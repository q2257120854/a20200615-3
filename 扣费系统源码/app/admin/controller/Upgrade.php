<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/28
 * Time: 10:09
 */
namespace app\admin\controller;
use think\Db;
use Think\Model;
header("Content-Type: text/html;charset=utf-8");
/**
 * Seo控制器
 */
class Upgrade extends AdminBase
{

    private $getUrl='http://upgrade.7mb.net/seo1/';

    public function index(){
        if(IS_AJAX){
       
        $patch_str = @file_get_contents($this->getUrl);
        $system_version=config('system_version');
        $pathlist = $allpathlist = array();
        // 获取所有升级包
        preg_match_all("/\"(patch_[\d]{8}+\.zip)\"/", $patch_str, $allpathlist);
        $allpathlist=$allpathlist['0'];
        foreach($allpathlist as $k=>$v){ 
            preg_match("/patch_([\d]{8})+\.zip/", $v, $p);
            if(empty($p) || $p[1] <= $system_version) continue;
            $pathlist[] = $p[0];
        }
        if(count($pathlist)==0){
            $this->jump([RESULT_ERROR, "没有可升级的安装包"]);
        }
        $cacheName="./caches_upgrade";
        if(!file_exists('./caches_upgrade')) {
            @mkdir('./caches_upgrade');
        }
        //-----------------------------------下载地址
        foreach($pathlist as $ks=>$vs){
            preg_match("/patch_([\d]{8})+\.zip/", $vs, $name);
            //远程压缩包地址
            $zip_url = $this->getUrl.$vs;
            //解压补丁文件地址
            $source_path = $cacheName.DIRECTORY_SEPARATOR.basename($vs,".zip");
            //本地压缩包地址
            $local_path = $cacheName."/".$vs;
            @file_put_contents($local_path,@file_get_contents($zip_url));
            //=============================解压文件
            $pclzip=new \pclzip\PclZip();
            $Dir=new \pclzip\Dir(ROOT_PATH);
            $pclzip->PclZip($local_path);
            if($pclzip->extract(PCLZIP_OPT_PATH, $source_path) == 0) {
                die("Error : ".$pclzip->errorInfo(true));
            }
            $copy_from = $source_path;
            $copy_to = ROOT_PATH ;
            $Dir->copyDir($copy_from, $copy_to);
			
			//执行更新的phpsql文件
			
			$this->logicUpsql->sql();
            //-----------------执行数据库


            $upgrade_sqlfile = dirname(dirname(dirname(dirname(__FILE__)))) . '/upgrade.sql';
            @chmod($upgrade_sqlfile,0777);
            if(file_exists($upgrade_sqlfile)) {
                $sqlquery=file_get_contents($upgrade_sqlfile);
                $sqlquery=preg_replace("/(\/\*.*\*\/)|(#.*?\n)|(\/\/.*?\n)/s", "",$sqlquery);
                $sqlarr=explode(PHP_EOL,$sqlquery);
                foreach($sqlarr as $k=>$v){
                    if(trim($v)=='' || strpos($v,'--')!==false){
                        unset($sqlarr[$k]);
                    }
                }
                $sqlarr=explode(";",implode("",$sqlarr));
                foreach($sqlarr as $ks=>$vs){
                    if(trim($vs)!=''){
                        Db::execute($vs);
                    }
                }
                @unlink($upgrade_sqlfile);
            }
			
			
			
		
            //-----------------------------删除目录
            @unlink($local_path);
            $Dir->delDir($source_path);
            // 升级版本号
            Db::name("config")->where("name='system_version'")->update(['value'=>$name['1']]);
			

        }
		
        $this->jump( [RESULT_SUCCESS, '升级成功', url('Index/index')]);


    }//END POST





    }






}