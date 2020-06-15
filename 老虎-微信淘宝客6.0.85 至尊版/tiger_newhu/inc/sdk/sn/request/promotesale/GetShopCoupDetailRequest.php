<?php
/**
 * 苏宁开放平台接口 - 店铺优惠券活动详情查询
 *
 * @author suning
 * @date   2014-10-16
 */
class GetShopCoupDetailRequest  extends SuningRequest{
	
	/**
	 * 店铺券ID
	 */
	private $couponId;
	
	public function getCouponId() {
		return $this->couponId;
	}
	
	public function setCouponId($couponId) {
		$this->couponId = $couponId;
		$this->apiParams["couponId"] = $couponId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.shopcoupdetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->couponId, 'couponId');
	}
	
	public function getBizName(){
		return "getShopCoupDetail";
	}
	
}

?>