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
use app\common\model\member\Member as MemberModel;
use app\common\model\member\MemberLevel;
class MemberController extends AdminCheckAuth
{
    public function index()
    {
        $levellist = MemberLevel::getList();
        $count = MemberModel::getOnlineCount();
        return view('',['levellist'=>$levellist, 'count' => $count]);
    }

    //列表
    public function getContentList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['mid|account|nickname|realname|idnum'] = ['like', '%' . $param['keywords'] . '%'];
        }
        if(isset($param['level']) && $param['level'] != '') {
            $where['level'] = intval($param['level']);
        }
        if(isset($param['status']) && $param['status'] != '') {
            $where['status'] = intval($param['status']);
        }else{
            $where['status'] = array('>=', 0);
        }
        if(isset($param['is_idverifly']) && $param['is_idverifly'] != '') {
            $where['is_idverifly'] = intval($param['is_idverifly']);
        }
        if(isset($param['is_promoter']) && $param['is_promoter'] != '') {
            $where['is_promoter'] = intval($param['is_promoter']);
        }
        if(isset($param['is_activation']) && $param['is_activation'] != '') {
            $where['is_activation'] = intval($param['is_activation']);
        }
        if(!empty($param['add_time'])) {
            $addtime = explode(',', $param['add_time']);
            $starttime = strtotime($addtime[0]);
            $endtime = strtotime($addtime[1]);
            $where['add_time'] = array('between time', array($starttime, $endtime));
        }
        $list = MemberModel::systemPage($where);
        return vae_assign_table(0,'',$list);
    }

    //添加
    public function add()
    {
        $levellist = MemberLevel::getList();
        return view('',['levellist'=>$levellist]);
    }

    //提交添加
    public function addSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\member\Member.add');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                $member = MemberModel::getMember(['account' => $param['account'], 'status' =>['<>', -1]]);
                if(!empty($member)) return vae_assign(0, '会员账号已存在');
                $mid = MemberModel::insertMember($param);
                if(!empty($param['parent_mid'])){
                	MemberModel::updateParent($mid, intval($param['parent_mid']));
                }
                return vae_assign();
            }
        }
    }

    //修改
    public function edit()
    {   
        $data['detail'] = MemberModel::getMember(['mid' => vae_get_param('mid')]);
        $data['levellist'] = MemberLevel::getList();
        return view('', $data);
    }

    //提交修改
    public function editSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\member\Member.edit');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                MemberModel::updateMember($param);

                $member = MemberModel::getMember(['mid' => vae_get_param('mid')]);
                if(!empty($param['parent_mid']) && $member['parent_mid'] != $param['parent_mid']){
                	MemberModel::updateParent($param['mid'], intval($param['parent_mid']));
                }
                return vae_assign(1, '修改会员数据成功');
            }
        }
    }

    //会员等级
    public function level()
    {
        return view();
    }

    //列表
    public function getLevelList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['id|levelname|level'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $list = MemberLevel::systemPage($where);
        return vae_assign_table(0,'',$list);
    }

    //添加会员等级
    public function addlevel()
    {
        return view();
    }

    //提交添加会员等级
    public function addlevelSubmit($value='')
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\member\MemberLevel.add');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                MemberLevel::insertLevel($param);
                return vae_assign();
            }
        }
    }

    //编辑会员等级
    public function editlevel()
    {
        $data['detail'] = MemberLevel::getLevel(vae_get_param('id'));
        return view('', $data);
    }

    //提交编辑的会员等级
    public function editlevelSubmit($value='')
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\member\MemberLevel.edit');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                MemberLevel::updateLevel($param);
                return vae_assign();
            }
        }
    }

    //软删除
    public function delete()
    {
        $mid = vae_get_param("mid");
        if (MemberModel::updateMember(['mid' => $mid, 'status' => -1])) {
            return vae_assign(1,"成功放入回收站！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }

    //软删除
    public function deleteLevel()
    {
        $id = vae_get_param("id");
        if (MemberLevel::deleteLevel($id) !== false) {
            return vae_assign(1,"成功放入回收站！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }

    //会员实名
    public function verifly()
    {
        return view();
    }

    //获取未实名的用户
    public function getVeriflyList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['mid|account|realname|idnum'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $where['is_idverifly'] = 2;
        $list = MemberModel::systemPage($where);
        return vae_assign_table(0,'',$list);

    }

    //ajax 审核会员实名
    public function AjaxVerifly()
    {
        $mid = vae_get_param("mid");
        $is_idverifly = vae_get_param("is_idverifly");
        $res = MemberModel::updateMember(['mid' => $mid, 'is_idverifly' => $is_idverifly]);
        if ($res) {
            return vae_assign(1, "会员实名保存成功");
        } else {
            return vae_assign(0, "会员实名保存失败");
        }

    }

    //会员充值
    public function recharge()
    {
        $data['mid'] = vae_get_param("mid");
        return view('', $data);
    }

    //保存会员充值的数据
    public function rechargeSubmit()
    {
        $mid = vae_get_param('mid');
        $changetype = vae_get_param('changetype');
        $num = vae_get_param('num');

        if($changetype){
            $res = MemberModel::changeIntegral(8, intval($num), $mid);
        }else{
            $res = MemberModel::changeIntegral(7, intval($num), $mid);
        }

        if ($res) {
            return vae_assign(1, "会员鱼饵变动成功");
        } else {
            return vae_assign(0, "会员鱼饵变动失败");
        }
    }

}

