<?php
/**
 * 苏宁开放平台接口 - X元N件活动新增
 *
 * @author suning
 * @date   2015-7-27
 */
class XNActivityAddRequest  extends SuningRequest{
	
	/**
	 * 活动名称。不超过40个字符
	 */
	private $activityName;
	
	/**
	 * 活动开始时间。只能创建20分钟以后开始的活动，活动开始时间必须大于当前系统时间+20分钟
	 */
	private $startTime;
	
	/**
	 * 活动结束时间。不得早于开始时间
	 */
	private $endTime;
	
	/**
	 * 活动渠道。返券活动的渠道，31代表PC，32代表移动端，如需多选，则输入：31,32
	 */
	private $channelInfo;
	
	/**
	 * 件数阀值（X）。达到满足活动的件数，X,[1,10]
	 */
	private $baseAmount;
	
	/**
	 * 金额阀值（N）。达到活动件数后所需要支付的金额，数字，整数部分最多8位，小数最多精确到小数点后2位；最低1元
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
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
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
	
	public function getChannelInfo() {
		return $this->channelInfo;
	}
	
	public function setChannelInfo($channelInfo) {
		$this->channelInfo = $channelInfo;
		$this->apiParams["channelInfo"] = $channelInfo;
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
		return 'suning.custom.xnactivity.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->channelInfo, 'channelInfo');
		RequestCheckUtil::checkNotNull($this->baseAmount, 'baseAmount');
		RequestCheckUtil::checkNotNull($this->rewardAmount, 'rewardAmount');
		RequestCheckUtil::checkNotNull($this->isLimit, 'isLimit');
		RequestCheckUtil::checkNotNull($this->productList, 'productList');
	}
	
	public function getBizName(){
		return "addXNActivity";
	}
	
}

class ProductList {

	private $apiParams = array();
	
	private $productCode;
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>