<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 01/08/2018
 * Time: 4:46 PM
 */

class BaseTable
{

    /**
     * @var BaseCtx
     */
    public $ctx;

    /**
     * @var \PDO
     */
    public $db;

    /**
     * @var \PDO
     */
    public $dbSlave;

    public function __construct(BaseCtx $context)
    {
        $this->ctx = $context;
        $this->db = $this->ctx->db;
        $this->dbSlave = $this->ctx->db;

        if ($context->isMysqlDB()) {
            $this->initSlaveDb();
        }
        $this->init();
    }

    public function initSlaveDb()
    {
        $mysqlSlaveArr = ZalyConfig::getConfig("mysqlSlave");
        if (!empty($mysqlSlaveArr)) {
            $slaveDbName = array_rand($mysqlSlaveArr, 1);
            $slaveConfig = $mysqlSlaveArr[$slaveDbName];

            $dbName = $slaveConfig['dbName'];
            $dbHost = $slaveConfig['dbHost'];
            $dbPort = $slaveConfig['dbPort'];
            $dbUserName = $slaveConfig['dbUserName'];
            $dbPwssword = $slaveConfig['dbPassword'];
            $dbDsn = "mysql:host=$dbHost;port=$dbPort;dbname=$dbName;";
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
//                PDO::ATTR_PERSISTENT => true,
            );
            $this->dbSlave = new PDO($dbDsn, $dbUserName, $dbPwssword, $options);//创建一个pdo对象
        }
    }

    public function init()
    {

    }

    /**
     * 公用的插入方法，基本满足所有的插入状况
     * @param $tableName
     * @param $data
     * @param $defaultColumns
     * @param bool $tag
     * @return bool
     * @throws Exception
     */
    public function insertData($tableName, $data, $defaultColumns, $tag = false)
    {
        if (!$tag) {
            $tag = __CLASS__ . "-" . __FUNCTION__;
        }
        $startTime = microtime(true);
        $insertKeys = array_keys($data);
        $insertKeyStr = implode(",", $insertKeys);
        $placeholderStr = "";
        foreach ($insertKeys as $key => $val) {
            if (!in_array($val, $defaultColumns)) {
                continue;
            }
            $placeholderStr .= ",:" . $val . "";
        }
        $placeholderStr = trim($placeholderStr, ",");
        if (!$placeholderStr) {
            throw new Exception($tag . " update is fail");
        }
        $sql = " insert into  $tableName({$insertKeyStr}) values ({$placeholderStr});";
        $prepare = $this->db->prepare($sql);
        $this->handlePrepareError($tag, $prepare);
        foreach ($data as $key => $val) {
            if (!in_array($key, $defaultColumns)) {
                continue;
            }
            $prepare->bindValue(":" . $key, $val);
        }
        $flag = $prepare->execute();
        $this->ctx->Wpf_Logger->writeSqlLog($tag, $sql, $data, $startTime);
        $count = $prepare->rowCount();
        if (!$flag || !$count) {
            throw new Exception($tag . "insert data error=" . var_export($prepare->errorInfo(), true));
        }
        return true;
    }

    /**
     * 公用的更新方法，仅仅适用于and更新
     * @param $tableName
     * @param $where
     * @param $data
     * @param $defaultColumns
     * @param $tag
     * @return bool
     * @throws Exception
     */
    public function updateInfo($tableName, $where, $data, $defaultColumns, $tag = false)
    {
        if (!$tag) {
            $tag = __CLASS__ . "-" . __FUNCTION__;
        }
        $startTime = microtime(true);
        $updateStr = "";
        $updateKeys = array_keys($data);
        foreach ($updateKeys as $updateField) {
            if (!in_array($updateField, $defaultColumns)) {
                continue;
            }
            $updateStr .= "$updateField=:$updateField,";
        }
        $updateStr = trim($updateStr, ",");
        if (!is_array($where)) {
            throw new Exception("update fail");
        }
        $whereKeys = array_keys($where);
        $whereKeyStr = "";
        foreach ($whereKeys as $k => $val) {
            if (!in_array($val, $defaultColumns)) {
                continue;
            }
            $whereKeyStr .= " $val=:$val and";
        }

        $whereKeyStr = trim($whereKeyStr, "and");

        if (!$whereKeyStr) {
            throw new Exception($tag . " update is fail");
        }

        $sql = "update  $tableName set  $updateStr where  $whereKeyStr";

        $prepare = $this->db->prepare($sql);
        $this->handlePrepareError($tag, $prepare);
        foreach ($data as $key => $val) {
            if (!in_array($key, $defaultColumns)) {
                continue;
            }
            $prepare->bindValue(":" . $key, $val);
        }

        foreach ($where as $key => $val) {
            $prepare->bindValue(":$key", $val);
        }
        $this->ctx->Wpf_Logger->writeSqlLog($tag, $sql, ["data" => $data, "where" => $where], $startTime);
        $flag = $prepare->execute();
//        $count = $prepare->rowCount();
//        if (!$flag || !$count) {
//            throw new Exception($tag . " update is fail=" . var_export($prepare->errorInfo(), true));
//        }
        return $this->handlerUpdateResult($flag, $prepare, $tag);
    }

    public function handlePrepareError($tag, $prepare)
    {
        if (!$prepare) {
            $error = [
                "error_code" => $this->db->errorCode(),
                "error_info" => $this->db->errorInfo(),
            ];
            if($this->db->errorCode() == 'HY000') {
                $this->ctx->ZalyDB->upgradeDB();
                $this->ctx->Wpf_Logger->error("===================table result ==", var_export($this->db->errorInfo(), true));
            }
            $this->ctx->Wpf_Logger->error($tag, json_encode($error));
            throw new Exception("execute prepare fail" . json_encode($error));
        }
    }

    protected function getCurrentTimeMills()
    {
        return $this->ctx->ZalyHelper->getMsectime();
    }

    /**
     * 处理 增，删 情况
     * @param $tag
     * @param $prepare
     * @param $result
     * @return bool
     * @throws Exception
     */
    protected function handlerResult($result, $prepare, $tag)
    {
        if ($prepare) {
            if ($result && $prepare->errorCode() == '00000') {
                return true;
            } elseif($prepare->errorCode() == 'HY000') {
                $this->ctx->ZalyDB->upgradeDB();
                $this->ctx->Wpf_Logger->error("===================table result ==". var_export($prepare->errorInfo(), true));
            }

            throw new Exception($tag . " execute prepare error="
                . var_export($prepare->errorInfo(), true));
        }

        throw new Exception($tag . " execute prepare fail as prepare false");
    }

    /**
     * 单独处理 update 情况，必须rowCount>0 才算成功
     * @param $result
     * @param $prepare
     * @param $tag
     * @return bool
     * @throws Exception
     */
    protected function handlerUpdateResult($result, $prepare, $tag)
    {
        $result = $this->handlerResult($result, $prepare, $tag);

        if ($result) {
            return $prepare->rowCount() > 0;
        }
        return false;
    }

}