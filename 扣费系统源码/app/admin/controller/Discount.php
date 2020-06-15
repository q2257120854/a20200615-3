<?php
/*
 * 折扣表
 * 2019-8-3
 * clown 812827345@qq.com
 */
namespace app\admin\controller;


class Discount extends AdminBase
{
	
	public function index()
	{
		return $this->fetch();
	}
	
	
	/*
	 * 代理折扣
	 */
	public function agency()
	{
		IS_POST && $this->jump($this->logicDiscount->agencysave($this->param));
		return $this->fetch();
	}
	
	
	/*
	 * 会员折扣
	 */
	public function member()
	{
		IS_POST && $this->jump($this->logicDiscount->agencysave($this->param));
		return $this->fetch();
	}
	
	/*
	 * 折扣列表
	 */
	public function discountlist()
	{
		
		$this->assign('list',$this->logicDiscount->discountlist());
		return $this->fetch();
	}
	
	/*
	 * 折扣删除
	 */
	public function discountdel($id = '')
	{
		
		$this->jump($this->logicDiscount->discountdel(['id' => tp_decrypt($id)]));
	}
	
	/*
	 * 折扣编辑
	 */
	public function discountedit($id = '')
	{
		$this->assign('info',$this->logicDiscount->getdiscount(['id' => tp_decrypt($id)]));
		IS_POST && $this->jump($this->logicDiscount->getdissave($this->param));
		return $this->fetch();
	}
	
}//classend
