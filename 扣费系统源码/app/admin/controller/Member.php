<?php
// +---------------------------------------------------------------------+
// | OneBase    | [ WE CAN DO IT JUST THINK ]                            |
// +---------------------------------------------------------------------+
// | Licensed   | http://www.apache.org/licenses/LICENSE-2.0 )           |
// +---------------------------------------------------------------------+
// | Author     | Bigotry <3162875@qq.com>                               |
// +---------------------------------------------------------------------+
// | Repository | https://gitee.com/Bigotry/OneBase                      |
// +---------------------------------------------------------------------+

namespace app\admin\controller;
use think\Db;

/**
 * 会员控制器
 */
class Member extends AdminBase
{

    /**
     * 会员授权
     */
    public function memberAuth()
    {
        
        IS_POST && $this->jump($this->logicMember->addToGroup($this->param));
        
        // 所有的权限组
        $group_list = $this->logicAuthGroup->getAuthGroupList(['member_id' => MEMBER_ID]);
        
        // 会员当前权限组
        $member_group_list = $this->logicAuthGroupAccess->getMemberGroupInfo($this->param['id']);

        // 选择权限组
        $list = $this->logicAuthGroup->selectAuthGroupList($group_list, $member_group_list);
        
        $this->assign('list', $list);
        
        $this->assign('id', $this->param['id']);
        
        return $this->fetch('member_auth');
    }
    
    /**
     * 代理列表
     */
    public function memberList()
    {
        
        $where = $this->logicMember->getWhere($this->param);
	
        $order='';
        !empty($this->param['sort']) && $order="m.price asc";
		!empty($this->param['id']) && $order = "m.id desc";
		$list = $this->logicMember->getMemberList($where,'m.*,b.nickname as leader_nickname',$order);
		
		foreach($list as $key => $val){
			//网站数量
			$list[$key]['webnum'] = Db('weblist')->where(['userpid' => $val['id']])->count();
		}
		
        $this->assign('list', $list);
        
        return $this->fetch('member_list');
    }

    /**
     * 用户列表
     */
    public function memberyhList()
    {


        $where = $this->logicMember->getWhere($this->param);
        $order='';
        !empty($this->param['sort']) && $order="m.price asc";
		!empty($this->param['id']) && $order = "m.id desc";
		$list = $this->logicMember->getMemberYhList($where,'m.*,b.nickname as leader_nickname',$order);
		foreach($list as $key => $val){
			//网站数量
			$list[$key]['webnum'] = Db('weblist')->where(['userid' => $val['id']])->count();
		}
        $this->assign('list', $list);

        return $this->fetch('member_yh_list');
    }
    
    /**
     * 代理导出
     */
    public function exportMemberList()
    {
        
        $where = $this->logicMember->getWhere($this->param);
        
        $this->logicMember->exportMemberList($where);
    }

    /**
     * 用户导出
     */
    public function exportMemberYhList()
    {

        $where = $this->logicMember->getWhere($this->param);

        $this->logicMember->exportMemberYhList($where);
    }
    
    /**
     * 代理添加
     */
    public function memberAdd()
    {

        IS_POST && $this->jump($this->logicMember->memberAdd($this->param));

        return $this->fetch('member_add');
    }

    /**
     * 用户添加
     */
    public function memberAddyh()
    {

        IS_POST && $this->jump($this->logicMember->memberYhAdd($this->param));

        $info = $this->logicMember->getMemberDlInfo();
        $this->assign('info', $info);
        $this->assign('user', $_SESSION['think']['member_info']);
        return $this->fetch('member_yh_add');
    }
    
    /**
     * 会员编辑
     */
    public function memberEdit()
    {
        $this->param['id']=tp_decrypt($this->param['id']);
		
        IS_POST && $this->jump($this->logicMember->memberEdit($this->param));
        
        $info = $this->logicMember->getMemberInfo(['id' =>$this->param['id']]);
        

		
		$access = Db('auth_group_access')->where(['member_id' => $this->param['id']])->find();
		$this->assign('access',$access);
        $this->assign('info', $info);
        
        return $this->fetch('member_edit');
    }
    
    /**
     * 会员删除
     */
    public function memberDel($id = 0)
    {

        return $this->jump($this->logicMember->memberDel(['id' => tp_decrypt($id)]));
    }
    
    /**
     * 修改密码
     */
    public function editPassword()
    {
        
        IS_POST && $this->jump($this->logicMember->editPassword($this->param));
        
        $info = $this->logicMember->getMemberInfo(['id' => MEMBER_ID]);
        
        $this->assign('info', $info);
        
        return $this->fetch('edit_password');
    }
}
