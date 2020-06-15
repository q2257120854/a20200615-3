<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class RefundAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $amount;
	
	/**
	 * 
	 */
	private $fixedEndTime;
	
	/**
	 * 
	 */
	private $fixedStartTime;
	
	/**
	 * 
	 */
	private $holidayEndTime;
	
	/**
	 * 
	 */
	private $holidayStartTime;
	
	/**
	 * 
	 */
	private $payTime;
	
	/**
	 * 
	 */
	private $refundTime;
	
	/**
	 * 
	 */
	private $tabNumber;
	
	public function getAmount() {
		return $this->amount;
	}
	
	public function setAmount($amount) {
		$this->amount = $amount;
		$this->apiParams["amount"] = $amount;
	}
	
	public function getFixedEndTime() {
		return $this->fixedEndTime;
	}
	
	public function setFixedEndTime($fixedEndTime) {
		$this->fixedEndTime = $fixedEndTime;
		$this->apiParams["fixedEndTime"] = $fixedEndTime;
	}
	
	public function getFixedStartTime() {
		return $this->fixedStartTime;
	}
	
	public function setFixedStartTime($fixedStartTime) {
		$this->fixedStartTime = $fixedStartTime;
		$this->apiParams["fixedStartTime"] = $fixedStartTime;
	}
	
	public function getHolidayEndTime() {
		return $this->holidayEndTime;
	}
	
	public function setHolidayEndTime($holidayEndTime) {
		$this->holidayEndTime = $holidayEndTime;
		$this->apiParams["holidayEndTime"] = $holidayEndTime;
	}
	
	public function getHolidayStartTime() {
		return $this->holidayStartTime;
	}
	
	public function setHolidayStartTime($holidayStartTime) {
		$this->holidayStartTime = $holidayStartTime;
		$this->apiParams["holidayStartTime"] = $holidayStartTime;
	}
	
	public function getPayTime() {
		return $this->payTime;
	}
	
	public function setPayTime($payTime) {
		$this->payTime = $payTime;
		$this->apiParams["payTime"] = $payTime;
	}
	
	public function getRefundTime() {
		return $this->refundTime;
	}
	
	public function setRefundTime($refundTime) {
		$this->refundTime = $refundTime;
		$this->apiParams["refundTime"] = $refundTime;
	}
	
	public function getTabNumber() {
		return $this->tabNumber;
	}
	
	public function setTabNumber($tabNumber) {
		$this->tabNumber = $tabNumber;
		$this->apiParams["tabNumber"] = $tabNumber;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.refund.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->tabNumber, 'tabNumber');
	}
	
	public function getBizName(){
		return "addRefund";
	}
	
}

?>