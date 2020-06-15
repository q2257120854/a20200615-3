<?php
/**
 * 苏宁开放平台接口 - 订单优惠活动详情查询
 *
 * @author suning
 * @date   2016-2-23
 */
class OrderCouponDetaiGetRequest  extends SuningRequest{
	
	/**
	 * 促销活动ID。促销活动创建时返回的
	 */
	private $activityCode;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.ordercoupondetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
	}
	
	public function getBizName(){
		return "getOrderCouponDetail";
	}
	
}

?>