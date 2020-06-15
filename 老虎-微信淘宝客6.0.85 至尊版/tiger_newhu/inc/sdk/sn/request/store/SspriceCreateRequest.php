<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SspriceCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityChannel;
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $operationType;
	
	/**
	 * 
	 */
	private $priceType;
	
	/**
	 * 
	 */
	private $productList;
	
	/**
	 * 
	 */
	private $startTime;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getActivityChannel() {
		return $this->activityChannel;
	}
	
	public function setActivityChannel($activityChannel) {
		$this->activityChannel = $activityChannel;
		$this->apiParams["activityChannel"] = $activityChannel;
	}
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getOperationType() {
		return $this->operationType;
	}
	
	public function setOperationType($operationType) {
		$this->operationType = $operationType;
		$this->apiParams["operationType"] = $operationType;
	}
	
	public function getPriceType() {
		return $this->priceType;
	}
	
	public function setPriceType($priceType) {
		$this->priceType = $priceType;
		$this->apiParams["priceType"] = $priceType;
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
		return 'suning.store.ssprice.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityChannel, 'activityChannel');
		RequestCheckUtil::checkNotNull($this->operationType, 'operationType');
		RequestCheckUtil::checkNotNull($this->priceType, 'priceType');
	}
	
	public function getBizName(){
		return "createSsprice";
	}
	
}

class ProductList {

	private $apiParams = array();
	
	private $productCode;
	
	private $productDiscount;
	
	private $productOperateType;
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getProductDiscount() {
		return $this->productDiscount;
	}

	public function setProductDiscount($productDiscount) {
		$this->productDiscount = $productDiscount;
		$this->apiParams["productDiscount"] = $productDiscount;
	}
	
	public function getProductOperateType() {
		return $this->productOperateType;
	}

	public function setProductOperateType($productOperateType) {
		$this->productOperateType = $productOperateType;
		$this->apiParams["productOperateType"] = $productOperateType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>