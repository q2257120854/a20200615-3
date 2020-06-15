<?php
namespace app\api\controller;
use app\api\controller\Common;
use app\api\model\Send;
use think\Db;
use think\Validate;


// error_reporting(0);
class Page extends Common
{
    public function __construct(){
        parent::__construct();
    }
    function view(){
        $id=input('id/d');
        $data=Db::name('page')->cache(true)->find($id);
        echo json_encode($data);
    }
    

}
