<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-12
 */
class SupplieractivityCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $giveAmount;
	
	/**
	 * 
	 */
	private $giveMaxAmount;
	
	/**
	 * 
	 */
	private $isNeedPhone;
	
	/**
	 * 
	 */
	private $levelLimit;
	
	/**
	 * 
	 */
	private $remarks;
	
	/**
	 * 
	 */
	private $startTime;
	
	/**
	 * 
	 */
	private $thresholdAmount;
	
	/**
	 * 
	 */
	private $timesLimit;
	
	/**
	 * 
	 */
	private $totalAmount;
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getGiveAmount() {
		return $this->giveAmount;
	}
	
	public function setGiveAmount($giveAmount) {
		$this->giveAmount = $giveAmount;
		$this->apiParams["giveAmount"] = $giveAmount;
	}
	
	public function getGiveMaxAmount() {
		return $this->giveMaxAmount;
	}
	
	public function setGiveMaxAmount($giveMaxAmount) {
		$this->giveMaxAmount = $giveMaxAmount;
		$this->apiParams["giveMaxAmount"] = $giveMaxAmount;
	}
	
	public function getIsNeedPhone() {
		return $this->isNeedPhone;
	}
	
	public function setIsNeedPhone($isNeedPhone) {
		$this->isNeedPhone = $isNeedPhone;
		$this->apiParams["isNeedPhone"] = $isNeedPhone;
	}
	
	public function getLevelLimit() {
		return $this->levelLimit;
	}
	
	public function setLevelLimit($levelLimit) {
		$this->levelLimit = $levelLimit;
		$this->apiParams["levelLimit"] = $levelLimit;
	}
	
	public function getRemarks() {
		return $this->remarks;
	}
	
	public function setRemarks($remarks) {
		$this->remarks = $remarks;
		$this->apiParams["remarks"] = $remarks;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getThresholdAmount() {
		return $this->thresholdAmount;
	}
	
	public function setThresholdAmount($thresholdAmount) {
		$this->thresholdAmount = $thresholdAmount;
		$this->apiParams["thresholdAmount"] = $thresholdAmount;
	}
	
	public function getTimesLimit() {
		return $this->timesLimit;
	}
	
	public function setTimesLimit($timesLimit) {
		$this->timesLimit = $timesLimit;
		$this->apiParams["timesLimit"] = $timesLimit;
	}
	
	public function getTotalAmount() {
		return $this->totalAmount;
	}
	
	public function setTotalAmount($totalAmount) {
		$this->totalAmount = $totalAmount;
		$this->apiParams["totalAmount"] = $totalAmount;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.supplieractivity.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->giveMaxAmount, 'giveMaxAmount');
		RequestCheckUtil::checkNotNull($this->isNeedPhone, 'isNeedPhone');
		RequestCheckUtil::checkNotNull($this->levelLimit, 'levelLimit');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->thresholdAmount, 'thresholdAmount');
		RequestCheckUtil::checkNotNull($this->timesLimit, 'timesLimit');
		RequestCheckUtil::checkNotNull($this->totalAmount, 'totalAmount');
	}
	
	public function getBizName(){
		return "createSupplieractivity";
	}
	
}

?>