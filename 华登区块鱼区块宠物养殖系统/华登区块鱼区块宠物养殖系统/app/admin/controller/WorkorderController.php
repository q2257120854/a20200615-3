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
use app\common\model\workorder\Workorder as Workorder;
use app\common\model\workorder\WorkorderType;

class WorkorderController extends AdminCheckAuth
{

    // 列表页视图
    public function index()
    {
        return view();
    }

    //列表页数据
    public function getContentList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['status'])) {
            $where['w.status'] = intval($param['status']);
        }
        if(!empty($param['add_time'])) {
            $addtime = explode(',', $param['add_time']);
            $starttime = strtotime($addtime[0]);
            $endtime = strtotime($addtime[1]);
            $where['w.add_time'] = array('between time', array($starttime, $endtime));
        }
        if(!empty($param['keywords'])) {
            $where['p.id|pc.title|p.contact'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $list = Workorder::systemPage($where);
        return vae_assign_table(0,'',$list);
    }

    //修改
    public function edit()
    {   
        $detail = Workorder::getWorkorder(['w.id' => vae_get_param('id')]);
        return view('', ['detail' => $detail]);
    }

    //提交修改
    public function editSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
                Workorder::updateWorkorder($param);
                return vae_assign(1, '修改会员数据成功');
        }

    }

    // 删除
    public function delete()
    {
        $id    = vae_get_param("id");
        if (Workorder::deleteWorkorder($id) !== false) {
            return vae_assign(1,"成功放入回收站！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }

    // 工单类型页
    public function type()
    {
        return view();
    }

    // 工单类型ajax申请表数据
    public function gettypeList()
    {

        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['id|title'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $list = WorkorderType::systemPage($where);
        return vae_assign_table(0,'',$list);
    }

    // 工单类型添加页
    public function addtype()
    {
        return view();
    }

    // 工单类型添加数据
    public function addtypeSubmit()
    {

        if($this->request->isPost()){
            $param = vae_get_param();
            WorkorderType::insertType($param);
            return vae_assign();
        }
    }

    // 工单类型编辑页
    public function edittype()
    {
        $param = vae_get_param();
        $data = WorkorderType::getType($param);
        return view('', ['data' => $data]);
    }

    // 工单类型编辑数据保存
    public function edittypeSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            WorkorderType::updateType($param);
            return vae_assign();
        }

    }

    // 工单类型删除
    public function deletetype()
    {
        $id = vae_get_param("id");
        if (WorkorderType::deleteType($id) !== false) {
            return vae_assign(1,"成功放入回收站！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }

}

