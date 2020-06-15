<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-8
 */
class GuacouponModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $operationType;
	
	/**
	 * 
	 */
	private $shopCode;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getOperationType() {
		return $this->operationType;
	}
	
	public function setOperationType($operationType) {
		$this->operationType = $operationType;
		$this->apiParams["operationType"] = $operationType;
	}
	
	public function getShopCode() {
		return $this->shopCode;
	}
	
	public function setShopCode($shopCode) {
		$this->shopCode = $shopCode;
		$this->apiParams["shopCode"] = $shopCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.guacoupon.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
		RequestCheckUtil::checkNotNull($this->operationType, 'operationType');
		RequestCheckUtil::checkNotNull($this->shopCode, 'shopCode');
	}
	
	public function getBizName(){
		return "modifyGuacoupon";
	}
	
}

?>