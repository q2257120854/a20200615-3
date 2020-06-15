<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-12-17
 */
class DireCouponAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $baseAmount;
	
	/**
	 * 
	 */
	private $channelInfo;
	
	/**
	 * 
	 */
	private $custnumList;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $isAssign;
	
	/**
	 * 
	 */
	private $productList;
	
	/**
	 * 
	 */
	private $rewardAmount;
	
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
	
	public function getBaseAmount() {
		return $this->baseAmount;
	}
	
	public function setBaseAmount($baseAmount) {
		$this->baseAmount = $baseAmount;
		$this->apiParams["baseAmount"] = $baseAmount;
	}
	
	public function getChannelInfo() {
		return $this->channelInfo;
	}
	
	public function setChannelInfo($channelInfo) {
		$this->channelInfo = $channelInfo;
		$this->apiParams["channelInfo"] = $channelInfo;
	}
	
	public function getCustnumList() {
		return $this->custnumList;
	}
	
	public function setCustnumList($custnumList) {
		$this->custnumList = $custnumList;
		$arr = array();
		foreach ($custnumList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["custnumList"] = $arr;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getIsAssign() {
		return $this->isAssign;
	}
	
	public function setIsAssign($isAssign) {
		$this->isAssign = $isAssign;
		$this->apiParams["isAssign"] = $isAssign;
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
	
	public function getRewardAmount() {
		return $this->rewardAmount;
	}
	
	public function setRewardAmount($rewardAmount) {
		$this->rewardAmount = $rewardAmount;
		$this->apiParams["rewardAmount"] = $rewardAmount;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.direcoupon.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->baseAmount, 'baseAmount');
		RequestCheckUtil::checkNotNull($this->channelInfo, 'channelInfo');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->isAssign, 'isAssign');
		RequestCheckUtil::checkNotNull($this->rewardAmount, 'rewardAmount');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
	}
	
	public function getBizName(){
		return "addDireCoupon";
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

class CustnumList {

	private $apiParams = array();
	
	private $custnum;
	
	public function getCustnum() {
		return $this->custnum;
	}

	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>