<?php
namespace app\admin\model;
use think\Model;
class Typeid extends Model{
	//	name 		设置数据表名称
	//	auto 		新增及更新的时候自动完成的属性数组
	//	insert 		仅新增的时候自动完成的属性数组
	//	update 		仅更新的时候自动完成的属性数组
	protected $name 	=	'typeid';
	protected $auto 	=	['update_time'];
	protected $insert 	=	['create_time'];
	 // create_time属性修改器
	protected function setCreatetimeAttr(){
		return time();
	}
	protected function setUpdatetimeAttr(){
		return time();
	}

}
