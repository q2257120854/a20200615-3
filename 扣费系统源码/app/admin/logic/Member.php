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

namespace app\admin\logic;
use think\Db;
/**
 * 会员逻辑
 */
class Member extends AdminBase
{
    
    /**
     * 获取会员信息
     */
    public function getMemberInfo($where = [], $field = true)
    {
        
        $info = $this->modelMember->getInfo($where, $field);
        
        $info['leader_nickname'] = $this->modelMember->getValue(['id' => $info['leader_id']], 'nickname');
        
        return $info;
    }
    
    /**
     * 获取代理列表
     */
    public function getMemberList($where = [], $field = 'm.*,b.nickname as leader_nickname', $order = '', $paginate = DB_LIST_ROWS)
    {
        $where['m.leader_id'] = ['eq', 1];
        $this->modelMember->alias('m');
        
        $join = [
                    [SYS_DB_PREFIX . 'member b', 'm.leader_id = b.id', 'LEFT'],
                  
                ];
        
        $where['m.' . DATA_STATUS_NAME] = ['neq', DATA_DELETE];
        
        $this->modelMember->join = $join;
        
        return $this->modelMember->getList($where, $field, $order, $paginate);
    }
    /**
     * 获取用户列表
     */
    public function getMemberYhList($where = [], $field = 'm.*,b.nickname as leader_nickname', $order = '', $paginate = DB_LIST_ROWS){

        $info=session('member_info');
        if($info['leader_id']==1){
            $where['m.leader_id'] = ['eq', $info['id']];
        }else{
            $where['m.leader_id'] = ['>', 1];
        }

        $this->modelMember->alias('m');

        $join = [
            [SYS_DB_PREFIX . 'member b', 'm.leader_id = b.id', 'LEFT'],
        ];

        $where['m.' . DATA_STATUS_NAME] = ['neq', DATA_DELETE];

        $this->modelMember->join = $join;

        return $this->modelMember->getList($where, $field, $order, $paginate);
    }
    
    /**
     * 导出会员列表
     */
    public function exportMemberList($where = [], $field = 'm.*,b.nickname as leader_nickname', $order = '')
    {
        
        $list = $this->getMemberList($where, $field, $order, false);
        
        $titles = "昵称,用户名,邮箱,手机,注册时间,上级";
        $keys   = "nickname,username,email,mobile,create_time,leader_nickname";
        
        action_log('导出', '导出会员列表');
        
        export_excel($titles, $keys, $list, '会员列表');
    }

    /**
     * 获取代理列表
     */
    public function getMemberDlInfo(){

        return $this->modelMember->where("leader_id=1 and status=1")->select();
    }

    /**
     * 获取会员列表搜索条件
     */
    public function getWhere($data = [])
    {
        
        $where = [];
        
        !empty($data['search_data']) && $where['m.nickname|m.username|m.email|m.mobile'] = ['like', '%'.$data['search_data'].'%'];

        if (!is_administrator()) {
            
            $member = session('member_info');


            /*
            if ($member['is_share_member']) {
                
                $ids = $this->getInheritMemberIds(MEMBER_ID);
                
                $ids[] = MEMBER_ID;
                
                $where['m.leader_id'] = ['in', $ids];
                
            } else {
                
                $where['m.leader_id'] = MEMBER_ID;
            }
            */
        }
        
        return $where;
    }
    
    /**
     * 获取存在继承关系的会员ids
     */
    public function getInheritMemberIds($id = 0, $data = [])
    {
        
        $member_id = $this->modelMember->getValue(['id' => $id, 'is_share_member' => DATA_NORMAL], 'leader_id');
        
        if (empty($member_id)) {
            
            return $data;
        } else {
            
            $data[] = $member_id;
            
            return $this->getInheritMemberIds($member_id, $data);
        }
    }
    
    /**
     * 获取会员的所有下级会员
     */
    public function getSubMemberIds($id = 0, $data = [])
    {
        
        $member_list = $this->modelMember->getList(['leader_id' => $id], 'id', 'id asc', false);
        
        foreach ($member_list as $v)
        {
            
            if (!empty($v['id'])) {
                
                $data[] = $v['id'];
            
                $data = array_unique(array_merge($data, $this->getSubMemberIds($v['id'], $data)));
            }
            
            continue;
        }
            
        return $data;
    }
    
    /**
     * 会员添加到用户组
     */
    public function addToGroup($data = [])
    {
        
        $url = url('memberList');
        
        if (SYS_ADMINISTRATOR_ID == $data['id']) {
            
            return [RESULT_ERROR, '天神不能授权哦~', $url];
        }
        
        $where = ['member_id' => ['in', $data['id']]];
        
        $this->modelAuthGroupAccess->deleteInfo($where, true);
        
        if (empty($data['group_id'])) {
            
            return [RESULT_SUCCESS, '会员授权成功', $url];
        }
        
        $add_data = [];
        
        foreach ($data['group_id'] as $group_id) {
            
            $add_data[] = ['member_id' => $data['id'], 'group_id' => $group_id];
        }
        
        if ($this->modelAuthGroupAccess->setList($add_data)) {
            
            action_log('授权', '会员授权，id：' . $data['id']);
        
            $this->logicAuthGroup->updateSubAuthByMember($data['id']);
            
            return [RESULT_SUCCESS, '会员授权成功', $url];
        } else {
            
            return [RESULT_ERROR, $this->modelAuthGroupAccess->getError()];
        }
    }
    
    /**
     * 代理添加
     */
    public function memberAdd($data = [])
    {
        
        $validate_result = $this->validateMember->scene('add')->check($data);
        
        if (!$validate_result) {
            
            return [RESULT_ERROR, $this->validateMember->getError()];
        }
        
        $url = url('memberList');
        
        $data['nickname']  = $data['username'];
        $data['leader_id'] = MEMBER_ID;
        $data['is_inside'] = DATA_NORMAL;
        $data['password'] = data_md5_key($data['password']);
        $result = $this->modelMember->setInfo($data);
        $infos=Db::name('member')->where("username='{$data['username']}'")->find()['id'];
        Db::name("auth_group_access")->insert(['member_id'=>$infos,'group_id'=>18,'create_time'=>time()]);
        $result && action_log('新增', '新增会员，username：' . $data['username']);
        
        return $result ? [RESULT_SUCCESS, '会员添加成功', $url] : [RESULT_ERROR, $this->modelMember->getError()];
    }

    /**
     * 用户添加
     */
    public function memberYhAdd($data = [])
    {


        $validate_result = $this->validateMember->scene('addYh')->check($data);

        if (!$validate_result) {

            return [RESULT_ERROR, $this->validateMember->getError()];
        }
        $url = url('memberyhlist');

        $data['nickname']  = $data['username'];
        $data['leader_id'] = $data['dl'];
        $data['is_inside'] = DATA_NORMAL;
		$data['password'] = data_md5_key($data['password']);

        $result = $this->modelMember->setInfo($data);
        $infos=Db::name('member')->where("username='{$data['username']}'")->find()['id'];
        Db::name("auth_group_access")->insert(['member_id'=>$infos,'group_id'=>19,'create_time'=>time()]);
        $result && action_log('新增', '新增会员，username：' . $data['username']);

        return $result ? [RESULT_SUCCESS, '会员添加成功', $url] : [RESULT_ERROR, $this->modelMember->getError()];
    }

    /**
     * 会员编辑
     */
    public function memberEdit($data = [])
    {
        
        $validate_result = $this->validateMember->scene('edit')->check($data);
        
        if (!$validate_result) {
            
            return [RESULT_ERROR, $this->validateMember->getError()];
        }
        $info=$this->modelMember->where("id={$data['id']}")->find();
        if($info['leader_id']>1){
            $url = url('memberyhlist');
        }else{
            $url = url('memberList');
        }

        if(trim($data['password'])!=''){
            $data['password']= data_md5_key($data['password']);
        }else{
            unset($data['password']);
        }
        
        $result = $this->modelMember->setInfo($data);
        
        $result && action_log('编辑', '编辑会员，id：' . $data['id']);
        
        return $result ? [RESULT_SUCCESS, '会员编辑成功', $url] : [RESULT_ERROR, $this->modelMember->getError()];
    }
    
    /**
     * 修改密码
     */
    public function editPassword($data = [])
    {
       
        $validate_result = $this->validateMember->scene('password')->check($data);
        
        if (!$validate_result) {
            
            return [RESULT_ERROR, $this->validateMember->getError()];
        }
        
        $member = $this->getMemberInfo(['id' => $data['id']]);
        
        if (data_md5_key($data['old_password']) != $member['password']) {
            
            return [RESULT_ERROR, '旧密码输入不正确'];
        }
        
        $data['id'] = MEMBER_ID;
        
        $url = url('index/index');
	
		$data['password'] = data_md5_key($data['password']);
		
        
        $result = $this->modelMember->setInfo($data);
        
        $result && action_log('编辑', '会员密码修改，id：' . $data['id']);
        
        return $result ? [RESULT_SUCCESS, '密码修改成功', $url] : [RESULT_ERROR, $this->modelMember->getError()];
    }
    
    /**
     * 设置会员信息
     */
    public function setMemberValue($where = [], $field = '', $value = '')
    {
        
        return $this->modelMember->setFieldValue($where, $field, $value);
    }
    
    /**
     * 会员删除
     */
    public function memberDel($where = [])
    {
        $info=$this->modelMember->where($where)->find();
        if($info['leader_id']>1){
            $url = url('memberyhlist');
        }else{
            $url = url('memberList');
        }
        if (SYS_ADMINISTRATOR_ID == $where['id'] || MEMBER_ID == $where['id']) {
            
            return [RESULT_ERROR, '天神和自己不能删除哦~', $url];
        }
        if($where['id'] == 967)
		{
			return [RESULT_ERROR,'测试代理不能删除哦~',$url];
		}
        
        $result = $this->modelMember->where($where)->delete();
                
        $result && action_log('删除', '删除会员，where：' . http_build_query($where));
        
        return $result ? [RESULT_SUCCESS, '会员删除成功', $url] : [RESULT_ERROR, $this->modelMember->getError(), $url];
    }

    public function getMember($where = [],$field=true)
    {
        return $this->modelMember->getInfo($where,$field);
    }
}
