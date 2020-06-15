<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-8-24
 */
class PriceExclusiveAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $createWay;
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $startTime;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $channelInfo;
	
	/**
	 * 
	 */
	private $priceType;
	
	/**
	 * 
	 */
	private $limitNum;
	
	/**
	 * 
	 */
	private $productList;
	
	public function getCreateWay() {
		return $this->createWay;
	}
	
	public function setCreateWay($createWay) {
		$this->createWay = $createWay;
		$this->apiParams["createWay"] = $createWay;
	}
	
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
	
	public function getPriceType() {
		return $this->priceType;
	}
	
	public function setPriceType($priceType) {
		$this->priceType = $priceType;
		$this->apiParams["priceType"] = $priceType;
	}
	
	public function getLimitNum() {
		return $this->limitNum;
	}
	
	public function setLimitNum($limitNum) {
		$this->limitNum = $limitNum;
		$this->apiParams["limitNum"] = $limitNum;
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
		return 'suning.custom.priceexclusive.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->createWay, 'createWay');
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->channelInfo, 'channelInfo');
		RequestCheckUtil::checkNotNull($this->priceType, 'priceType');
		RequestCheckUtil::checkNotNull($this->limitNum, 'limitNum');
	}
	
	public function getBizName(){
		return "addPriceExclusive";
	}
	
}

class ProductList {

	private $apiParams = array();
	
	private $cmType;
	
	private $productCode;
	
	private $childList;
	
	public function getCmType() {
		return $this->cmType;
	}

	public function setCmType($cmType) {
		$this->cmType = $cmType;
		$this->apiParams["cmType"] = $cmType;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getChildList() {
		return $this->childList;
	}

	public function setChildList($childList) {
		$this->childList = $childList;
		$arr = array();
		foreach ($childList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["childList"] = $arr;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ChildList {

	private $apiParams = array();
	
	private $subProductCode;
	
	private $priceAmount;
	
	public function getSubProductCode() {
		return $this->subProductCode;
	}

	public function setSubProductCode($subProductCode) {
		$this->subProductCode = $subProductCode;
		$this->apiParams["subProductCode"] = $subProductCode;
	}
	
	public function getPriceAmount() {
		return $this->priceAmount;
	}

	public function setPriceAmount($priceAmount) {
		$this->priceAmount = $priceAmount;
		$this->apiParams["priceAmount"] = $priceAmount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>