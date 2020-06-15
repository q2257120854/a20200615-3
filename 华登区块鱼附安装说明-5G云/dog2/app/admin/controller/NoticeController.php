<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://www.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\admin\controller;
use vae\controller\AdminCheckAuth;
use think\Db;
use think\Config;
use app\common\model\notice\Notice as Notice;

class NoticeController extends AdminCheckAuth
{
    // 列表页视图
    public function index()
    {
        return $this -> fetch();
    }

    //列表页数据
    public function getContentList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            if ($param["keywords"] == "系统通知") {
                $param["keywords"] = "1";
            }else if($param["keywords"] == "活动通知"){
                $param["keywords"] = "2";
            }
            $where['id|type|title'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $list = Notice::systemPage($where);
        return vae_assign_table(0,'',$list);
    }

    //添加页视图
    public function add()
    {
        return $this -> fetch();
    }

    //提交添加
    public function addSubmit()
    {
    	if($this->request->isPost()){
            $param = vae_get_param();
            $param["sendtime"] = strtotime($param["sendtime"]);
            $param["createtime"] = time();
            Notice::insertNotice($param);
            return vae_assign();
    	}
    }

    //修改
    public function edit()
    {   
        $data = Notice::getNotice(['id' => vae_get_param('id')]);
        $this -> assign("data",$data);
        return $this -> fetch();
    }

    //提交修改
    public function editSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
                $param["sendtime"] = strtotime($param["sendtime"]);
                if ($param["thumb"] == "") {
                    unset($param["thumb"]);
                }
                Notice::updateNotice($param);
                return vae_assign(1, '修改通知数据成功');
        }
    }

    // 删除
    public function delete()
    {
        $id    = vae_get_param("id");
        if (Notice::deleteNotice($id) !== false) {
            return vae_assign(1,"成功放入回收站！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }

}
