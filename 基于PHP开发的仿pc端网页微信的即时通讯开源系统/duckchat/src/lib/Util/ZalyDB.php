<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 28/09/2018
 * Time: 6:11 PM
 */

class ZalyDB
{
    private $attachmentDir = "attachment";
    private $gifDir = "gif";
    private $baseUrl;

    public function __construct(BaseCtx $context)
    {
        $this->ctx = $context;
    }

    public function upgradeDB()
    {
        try{
            $this->baseUrl = WPF_LIB_DIR . "/..";
            $config = ZalyConfig::getAllConfig();
            $sqliteName = $config['sqlite']['sqliteDBName'];
            if ("mysql" == $config['dbType']) {
                $this->initSiteWithMysql($config);
            } else {
                $this->initSiteWithSqlite($sqliteName);
            }
        }catch (Exception $ex) {
            $this->ctx->getLogger("zaly.db", $ex);
            return false;
        }
        return true;
    }

    /**
     * init site with mysql
     * @param array $config
     * @param $siteName
     * @param $siteHost
     * @param $sitePort
     * @throws Throwable
     */
    private function initSiteWithMysql(array $config)
    {
        $dbName = $config['mysql']['dbName'];
        $dbHost = $config['mysql']['dbHost'];
        $dbPort = $config['mysql']['dbPort'];
        $dbUserName = $config['mysql']['dbUserName'];
        $dbPwssword = $config['mysql']['dbPassword'];

        //check mysql args
        $dbDsn = "mysql:host=$dbHost;port=$dbPort;dbname=$dbName";
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
        );

        $this->db = new PDO($dbDsn, $dbUserName, $dbPwssword, $options);//创建一个pdo对象

        if (!$this->db) {
            throw new Exception("connect mysql error");
        }
        $this->_executeMysqlScript();
        $this->_checkConfigDefaultValue();
    }

    private function _executeMysqlScript()
    {
        $tag = __CLASS__ . "->" . __FUNCTION__;
        $mysqlScriptPath = $this->baseUrl . "/model/database-sql/site_mysql.sql";

        $this->ctx->logger->info("site.install.db", "mysql script=" . $mysqlScriptPath);

        $_sqlContent = file_get_contents($mysqlScriptPath);//写自己的.sql文件
        $_sqlArr = explode(';', $_sqlContent);

        try {
            $this->db->beginTransaction();
            foreach ($_sqlArr as $sql) {
                error_log("===========mysql====sql===========".$sql);
                $this->db->exec($sql);
            }
            $this->db->commit();
        } catch (Throwable $e) {
            $this->db->rollBack();
            $this->ctx->logger->error($tag, $e);
            throw $e;
        }

    }

    private function initSiteWithSqlite($sqliteName)
    {
        $dbInfo = $this->baseUrl . "/" . $sqliteName;
        $this->db = new \PDO("sqlite:{$dbInfo}");

        $this->_executeSqliteScript();
        $this->_checkConfigDefaultValue();
    }

    private function _executeSqliteScript()
    {
        $tag = __CLASS__ . "->" . __FUNCTION__;
        $mysqlScriptPath = $this->baseUrl. "/model/database-sql/site_sqlite.sql";
        $_sqlContent = file_get_contents($mysqlScriptPath);//写自己的.sql文件
        $_sqlArr = explode(';', $_sqlContent);

        try {
            $this->db->beginTransaction();
            foreach ($_sqlArr as $sql) {
                $this->db->exec($sql);
            }
            $this->db->commit();
        } catch (Exception $e) {
            $this->db->rollBack();
            $this->ctx->logger->error($tag, $e);
            throw $e;
        }
    }

    private function _checkConfigDefaultValue()
    {
        $this->initPluginMiniProgram();
        $this->_initSiteUserGif();
        return;
    }

    /**
     * 增加默认扩展小程序
     */
    private function initPluginMiniProgram()
    {
        $miniPrograms = [
            [
                'pluginId' => 104,
                'name' => "gif小程序",
                'logo' => "",
                'sort' => 2, //order = 2
                'landingPageUrl' => "index.php?action=miniProgram.gif.index",
                'landingPageWithProxy' => 1, //1 表示走site代理
                'usageType' => Zaly\Proto\Core\PluginUsageType::PluginUsageU2Message,
                'loadingType' => Zaly\Proto\Core\PluginLoadingType::PluginLoadingChatbox,
                'permissionType' => Zaly\Proto\Core\PluginPermissionType::PluginPermissionAll,
                'authKey' => "",
            ],
            [
                'pluginId' => 104,
                'name' => "gif小程序",
                'logo' => "",
                'sort' => 2, //order = 2
                'landingPageUrl' => "index.php?action=miniProgram.gif.index",
                'landingPageWithProxy' => 1, //1 表示走site代理
                'usageType' => Zaly\Proto\Core\PluginUsageType::PluginUsageGroupMessage,
                'loadingType' => Zaly\Proto\Core\PluginLoadingType::PluginLoadingChatbox,
                'permissionType' => Zaly\Proto\Core\PluginPermissionType::PluginPermissionAll,
                'authKey' => "",
            ],

        ];

        $this->_insertSitePlugin($miniPrograms);
    }

    private function _insertSitePlugin($miniPrograms)
    {
        $tag = __CLASS__ . "->" . __FUNCTION__;
        $successParams = [];
        foreach ($miniPrograms as $miniProgram) {
            try {
                $success = $this->insertData("sitePlugin", $miniProgram);
                if ($success) {
                    $successParams[] = $miniProgram['name'];
                }
            } catch (Throwable $e) {
                $this->ctx->logger->error($tag, $e);
            }
        }
    }

    private function _initSiteUserGif()
    {
        $tag = __CLASS__ . "->" . __FUNCTION__;
        try{
            $dirName = $this->baseUrl . "/{$this->attachmentDir}/default";
            if (!is_dir($dirName)) {
                mkdir($dirName, 0755, true);
            }
            $gifDirName =  $this->baseUrl  . "/{$this->gifDir}/default";

            for($i=1; $i<8; $i++) {
                rename($gifDirName."/".$i.".gif", $dirName."/".$i.".gif");
                $gifId = ZalyHelper::generateStrKey();
                $dataSql = "insert into siteGif (gifId, gifUrl, width, height) VALUES ('{$gifId}', 'default-{$i}.gif', 200, 200);";
                $this->db->exec($dataSql);
                $dataSql = "insert into siteUserGif(userId, gifId) VALUES ('duckchat', '{$gifId}');";
                $this->db->exec($dataSql);
            }
        }catch (Exception $ex) {
            $this->ctx->logger->error($tag, $ex);
        }
    }

    public function insertData($tableName, $data)
    {
        $startTime = microtime(true);
        $tag = __CLASS__ . "-" . __FUNCTION__;
        $insertKeys = array_keys($data);
        $insertKeyStr = implode(",", $insertKeys);
        $placeholderStr = "";
        foreach ($insertKeys as $key => $val) {
            $placeholderStr .= ",:" . $val . "";
        }
        $placeholderStr = trim($placeholderStr, ",");
        if (!$placeholderStr) {
            throw new Exception("insert data fail with empty values");
        }
        $sql = " insert into  $tableName({$insertKeyStr}) values ({$placeholderStr});";
        $prepare = $this->db->prepare($sql);
        $this->handelPrepareError($prepare);
        foreach ($data as $key => $val) {
            $prepare->bindValue(":" . $key, $val);
        }
        $flag = $prepare->execute();
        $this->ctx->logger->writeSqlLog($tag, $sql, $data, $startTime);
        $count = $prepare->rowCount();

        $this->ctx->logger->error("site.install.db",
            "miniProgram name=" . $data['name'] .
            " count=" . $count .
            " errCode=" . $prepare->errorCode() .
            " errInfo=" . json_encode($prepare->errorInfo()));

        if ($flag) {
            return true;
        }
        return false;
    }


    function handelPrepareError($prepare)
    {
        $tag = __CLASS__ . ' - ' . __FUNCTION__;
        if (!$prepare) {
            $error = [
                "error_code" => $this->db->errorCode(),
                "error_info" => $this->db->errorInfo(),
            ];
            $this->ctx->logger->error($tag, "error_msg=" . json_encode($error));
        }
    }

}