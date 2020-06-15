<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class OrderdiscountsideCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $allShopType;
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $baseQuantifierType;
	
	/**
	 * 
	 */
	private $channelInfo;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $productList;
	
	/**
	 * 
	 */
	private $rewardQuantifierType;
	
	/**
	 * 
	 */
	private $ruleList;
	
	/**
	 * 
	 */
	private $startTime;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getAllShopType() {
		return $this->allShopType;
	}
	
	public function setAllShopType($allShopType) {
		$this->allShopType = $allShopType;
		$this->apiParams["allShopType"] = $allShopType;
	}
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	public function getBaseQuantifierType() {
		return $this->baseQuantifierType;
	}
	
	public function setBaseQuantifierType($baseQuantifierType) {
		$this->baseQuantifierType = $baseQuantifierType;
		$this->apiParams["baseQuantifierType"] = $baseQuantifierType;
	}
	
	public function getChannelInfo() {
		return $this->channelInfo;
	}
	
	public function setChannelInfo($channelInfo) {
		$this->channelInfo = $channelInfo;
		$this->apiParams["channelInfo"] = $channelInfo;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
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
	
	public function getRewardQuantifierType() {
		return $this->rewardQuantifierType;
	}
	
	public function setRewardQuantifierType($rewardQuantifierType) {
		$this->rewardQuantifierType = $rewardQuantifierType;
		$this->apiParams["rewardQuantifierType"] = $rewardQuantifierType;
	}
	
	public function getRuleList() {
		return $this->ruleList;
	}
	
	public function setRuleList($ruleList) {
		$this->ruleList = $ruleList;
		$arr = array();
		foreach ($ruleList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["ruleList"] = $arr;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.store.orderdiscount.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->allShopType, 'allShopType');
		RequestCheckUtil::checkNotNull($this->baseQuantifierType, 'baseQuantifierType');
		RequestCheckUtil::checkNotNull($this->channelInfo, 'channelInfo');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->rewardQuantifierType, 'rewardQuantifierType');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
	}
	
	public function getBizName(){
		return "createOrderdiscountside";
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

class RuleList {

	private $apiParams = array();
	
	private $baseAmount;
	
	private $rewardAmount;
	
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
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>