<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-8
 */
class IntegralCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $integralRwardInfos;
	
	/**
	 * 
	 */
	private $shopCode;
	
	/**
	 * 
	 */
	private $startTime;
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getIntegralRwardInfos() {
		return $this->integralRwardInfos;
	}
	
	public function setIntegralRwardInfos($integralRwardInfos) {
		$this->integralRwardInfos = $integralRwardInfos;
		$arr = array();
		foreach ($integralRwardInfos as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["integralRwardInfos"] = $arr;
	}
	
	public function getShopCode() {
		return $this->shopCode;
	}
	
	public function setShopCode($shopCode) {
		$this->shopCode = $shopCode;
		$this->apiParams["shopCode"] = $shopCode;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.integral.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->shopCode, 'shopCode');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
	}
	
	public function getBizName(){
		return "createIntegral";
	}
	
}

class IntegralRwardInfos {

	private $apiParams = array();
	
	private $consumeIntegral;
	
	private $customersCode;
	
	private $exchangeCount;
	
	private $memDayAllLimit;
	
	private $picUrl;
	
	private $rewardDesc;
	
	private $rewardName;
	
	private $totalBudgetCount;
	
	public function getConsumeIntegral() {
		return $this->consumeIntegral;
	}

	public function setConsumeIntegral($consumeIntegral) {
		$this->consumeIntegral = $consumeIntegral;
		$this->apiParams["consumeIntegral"] = $consumeIntegral;
	}
	
	public function getCustomersCode() {
		return $this->customersCode;
	}

	public function setCustomersCode($customersCode) {
		$this->customersCode = $customersCode;
		$this->apiParams["customersCode"] = $customersCode;
	}
	
	public function getExchangeCount() {
		return $this->exchangeCount;
	}

	public function setExchangeCount($exchangeCount) {
		$this->exchangeCount = $exchangeCount;
		$this->apiParams["exchangeCount"] = $exchangeCount;
	}
	
	public function getMemDayAllLimit() {
		return $this->memDayAllLimit;
	}

	public function setMemDayAllLimit($memDayAllLimit) {
		$this->memDayAllLimit = $memDayAllLimit;
		$this->apiParams["memDayAllLimit"] = $memDayAllLimit;
	}
	
	public function getPicUrl() {
		return $this->picUrl;
	}

	public function setPicUrl($picUrl) {
		$this->picUrl = $picUrl;
		$this->apiParams["picUrl"] = $picUrl;
	}
	
	public function getRewardDesc() {
		return $this->rewardDesc;
	}

	public function setRewardDesc($rewardDesc) {
		$this->rewardDesc = $rewardDesc;
		$this->apiParams["rewardDesc"] = $rewardDesc;
	}
	
	public function getRewardName() {
		return $this->rewardName;
	}

	public function setRewardName($rewardName) {
		$this->rewardName = $rewardName;
		$this->apiParams["rewardName"] = $rewardName;
	}
	
	public function getTotalBudgetCount() {
		return $this->totalBudgetCount;
	}

	public function setTotalBudgetCount($totalBudgetCount) {
		$this->totalBudgetCount = $totalBudgetCount;
		$this->apiParams["totalBudgetCount"] = $totalBudgetCount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>