<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-10-19
 */
class PromotionPlanAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $promotionName;
	
	/**
	 * 
	 */
	private $promotionStartDate;
	
	/**
	 * 
	 */
	private $promotionEndDate;
	
	/**
	 * 
	 */
	private $userLimitAmount;
	
	/**
	 * 
	 */
	private $mobileTerminalDiscount;
	
	public function getPromotionName() {
		return $this->promotionName;
	}
	
	public function setPromotionName($promotionName) {
		$this->promotionName = $promotionName;
		$this->apiParams["promotionName"] = $promotionName;
	}
	
	public function getPromotionStartDate() {
		return $this->promotionStartDate;
	}
	
	public function setPromotionStartDate($promotionStartDate) {
		$this->promotionStartDate = $promotionStartDate;
		$this->apiParams["promotionStartDate"] = $promotionStartDate;
	}
	
	public function getPromotionEndDate() {
		return $this->promotionEndDate;
	}
	
	public function setPromotionEndDate($promotionEndDate) {
		$this->promotionEndDate = $promotionEndDate;
		$this->apiParams["promotionEndDate"] = $promotionEndDate;
	}
	
	public function getUserLimitAmount() {
		return $this->userLimitAmount;
	}
	
	public function setUserLimitAmount($userLimitAmount) {
		$this->userLimitAmount = $userLimitAmount;
		$this->apiParams["userLimitAmount"] = $userLimitAmount;
	}
	
	public function getMobileTerminalDiscount() {
		return $this->mobileTerminalDiscount;
	}
	
	public function setMobileTerminalDiscount($mobileTerminalDiscount) {
		$this->mobileTerminalDiscount = $mobileTerminalDiscount;
		$this->apiParams["mobileTerminalDiscount"] = $mobileTerminalDiscount;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promotionplan.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->promotionName, 'promotionName');
		RequestCheckUtil::checkNotNull($this->promotionStartDate, 'promotionStartDate');
	}
	
	public function getBizName(){
		return "addPromotionPlan";
	}
	
}

?>