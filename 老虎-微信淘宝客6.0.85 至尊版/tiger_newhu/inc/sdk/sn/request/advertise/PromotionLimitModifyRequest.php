<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-10-19
 */
class PromotionLimitModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $promotionId;
	
	/**
	 * 
	 */
	private $userLimitAmount;
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getUserLimitAmount() {
		return $this->userLimitAmount;
	}
	
	public function setUserLimitAmount($userLimitAmount) {
		$this->userLimitAmount = $userLimitAmount;
		$this->apiParams["userLimitAmount"] = $userLimitAmount;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promotionlimit.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->promotionId, 'promotionId');
	}
	
	public function getBizName(){
		return "modifyPromotionLimit";
	}
	
}

?>