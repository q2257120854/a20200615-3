<?php
/**
 * 苏宁开放平台接口 - 购物返券活动详情查询
 *
 * @author suning
 * @date   2014-10-16
 */
class GetShoppingCouponRequest  extends SuningRequest{
	
	/**
	 * 购物返券活动ID
	 */
	private $id;
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
		$this->apiParams["id"] = $id;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.shoppingcoupon.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->id, 'id');
	}
	
	public function getBizName(){
		return "getShoppingCoupon";
	}
	
}

?>