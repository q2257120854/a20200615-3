<?php

/*
 * 关键词查询
 */
namespace app\admin\logic;
use think\Db;
use app\admin\model\Member as MemberModel;

class Keyword extends AdminBase
{
	/*
	 * 网站列表
	 */
	public function webList()
	{
		$member = MemberModel::where(['id' => MEMBER_ID])->find();
		//如果是管理员查询所有网站列表
		if($member['id'] == 1 || $member['leader_id'] == 0){
			$weblist = Db('weblist')->select();
		//如果是代理就查询代理下的网站列表
		}else if($member['leader_id'] == 1){
			$weblist = Db('weblist')->where(['userpid' => MEMBER_ID])->select();
		//如果是用户就查询自己的
		}else{
			$weblist = Db('weblist')->where(['userid' => MEMBER_ID])->select();
		}
		
		return $weblist;
	}
}//classend
