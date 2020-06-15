<?php
/**
 * 苏宁开放平台接口 - X元N件活动修改
 *
 * @author suning
 * @date   2015-7-27
 */
class XNActivityModifyRequest  extends SuningRequest{
	
	/**
	 * 促销活动ID。促销活动的唯一标识
	 */
	private $activityCode;
	
	/**
	 * 活动开始时间。只能创建20分钟以后开始的活动，活动开始时间必须大于当前系统时间+20分钟 开始时间和结束时间必须成对出现
	 */
	private $startTime;
	
	/**
	 * 活动结束时间。不得早于开始时间
	 */
	private $endTime;
	
	/**
	 * 件数阀值（X）。达到满足活动的件数，X,[1,10]
	 */
	private $baseAmount;
	
	/**
	 * 金额阀值（N）。达到活动件数后所需要支付的金额，数字，整数部分最多8位，小数最多精确到小数点后2位；
	 */
	private $rewardAmount;
	
	/**
	 * 活动限制。限制：Y  不限制：N
	 */
	private $isLimit;
	
	/**
	 * 活动期间限制次数。每个用户活动期间限制次数，[1,9999]
	 */
	private $peopleActivityTimesLimit;
	
	/**
	 * 每日参加活动次数。每个用户活动期间每日参加限制次数，[1,9999]
	 */
	private $peopleDayTimesLimit;
	
	/**
	 * 
	 */
	private $productList;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getBaseAmount() {
		return $this->baseAmount;
	}
	
	public function setBaseAmount($baseAmount) {
		$this->baseAmount = $baseAmount;
		$this->apiParams["baseAmount"] = $baseAmount;
	}
	
	public function getRewardAmount() {
		return $this->rewardAmount;
	}
	
	public function setRewardAmount($rewardAmount) {
		$this->rewardAmount = $rewardAmount;
		$this->apiParams["rewardAmount"] = $rewardAmount;
	}
	
	public function getIsLimit() {
		return $this->isLimit;
	}
	
	public function setIsLimit($isLimit) {
		$this->isLimit = $isLimit;
		$this->apiParams["isLimit"] = $isLimit;
	}
	
	public function getPeopleActivityTimesLimit() {
		return $this->peopleActivityTimesLimit;
	}
	
	public function setPeopleActivityTimesLimit($peopleActivityTimesLimit) {
		$this->peopleActivityTimesLimit = $peopleActivityTimesLimit;
		$this->apiParams["peopleActivityTimesLimit"] = $peopleActivityTimesLimit;
	}
	
	public function getPeopleDayTimesLimit() {
		return $this->peopleDayTimesLimit;
	}
	
	public function setPeopleDayTimesLimit($peopleDayTimesLimit) {
		$this->peopleDayTimesLimit = $peopleDayTimesLimit;
		$this->apiParams["peopleDayTimesLimit"] = $peopleDayTimesLimit;
	}
	
	public function getProductList() {
		return $this->productList;
	}
	
	public function setProductList($productList) {
		$this->productList = $productList;
		$arr = array();
		foreach ($productList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["productList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.xnactivity.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
	}
	
	public function getBizName(){
		return "modifyXNActivity";
	}
	
}

class ProductList {

	private $apiParams = array();
	
	private $productCode;
	
	private $operateFlag;
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getOperateFlag() {
		return $this->operateFlag;
	}

	public function setOperateFlag($operateFlag) {
		$this->operateFlag = $operateFlag;
		$this->apiParams["operateFlag"] = $operateFlag;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>