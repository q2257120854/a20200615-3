<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class AppstoreUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $branchStoreName;
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $dayHours;
	
	/**
	 * 
	 */
	private $latitude;
	
	/**
	 * 
	 */
	private $longitude;
	
	/**
	 * 
	 */
	private $openDay;
	
	/**
	 * 
	 */
	private $storeAdd;
	
	/**
	 * 
	 */
	private $storeArea;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $storeCondues;
	
	/**
	 * 
	 */
	private $storeContact;
	
	/**
	 * 
	 */
	private $storeDeliveryMode;
	
	/**
	 * 
	 */
	private $storeInCity;
	
	/**
	 * 
	 */
	private $storeInProVince;
	
	/**
	 * 
	 */
	private $storeLogo;
	
	/**
	 * 
	 */
	private $storeName;
	
	/**
	 * 
	 */
	private $storePict;
	
	/**
	 * 
	 */
	private $storeStatus;
	
	/**
	 * 
	 */
	private $storeTel;
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	public function getBranchStoreName() {
		return $this->branchStoreName;
	}
	
	public function setBranchStoreName($branchStoreName) {
		$this->branchStoreName = $branchStoreName;
		$this->apiParams["branchStoreName"] = $branchStoreName;
	}
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getDayHours() {
		return $this->dayHours;
	}
	
	public function setDayHours($dayHours) {
		$this->dayHours = $dayHours;
		$this->apiParams["dayHours"] = $dayHours;
	}
	
	public function getLatitude() {
		return $this->latitude;
	}
	
	public function setLatitude($latitude) {
		$this->latitude = $latitude;
		$this->apiParams["latitude"] = $latitude;
	}
	
	public function getLongitude() {
		return $this->longitude;
	}
	
	public function setLongitude($longitude) {
		$this->longitude = $longitude;
		$this->apiParams["longitude"] = $longitude;
	}
	
	public function getOpenDay() {
		return $this->openDay;
	}
	
	public function setOpenDay($openDay) {
		$this->openDay = $openDay;
		$this->apiParams["openDay"] = $openDay;
	}
	
	public function getStoreAdd() {
		return $this->storeAdd;
	}
	
	public function setStoreAdd($storeAdd) {
		$this->storeAdd = $storeAdd;
		$this->apiParams["storeAdd"] = $storeAdd;
	}
	
	public function getStoreArea() {
		return $this->storeArea;
	}
	
	public function setStoreArea($storeArea) {
		$this->storeArea = $storeArea;
		$this->apiParams["storeArea"] = $storeArea;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getStoreCondues() {
		return $this->storeCondues;
	}
	
	public function setStoreCondues($storeCondues) {
		$this->storeCondues = $storeCondues;
		$this->apiParams["storeCondues"] = $storeCondues;
	}
	
	public function getStoreContact() {
		return $this->storeContact;
	}
	
	public function setStoreContact($storeContact) {
		$this->storeContact = $storeContact;
		$this->apiParams["storeContact"] = $storeContact;
	}
	
	public function getStoreDeliveryMode() {
		return $this->storeDeliveryMode;
	}
	
	public function setStoreDeliveryMode($storeDeliveryMode) {
		$this->storeDeliveryMode = $storeDeliveryMode;
		$this->apiParams["storeDeliveryMode"] = $storeDeliveryMode;
	}
	
	public function getStoreInCity() {
		return $this->storeInCity;
	}
	
	public function setStoreInCity($storeInCity) {
		$this->storeInCity = $storeInCity;
		$this->apiParams["storeInCity"] = $storeInCity;
	}
	
	public function getStoreInProVince() {
		return $this->storeInProVince;
	}
	
	public function setStoreInProVince($storeInProVince) {
		$this->storeInProVince = $storeInProVince;
		$this->apiParams["storeInProVince"] = $storeInProVince;
	}
	
	public function getStoreLogo() {
		return $this->storeLogo;
	}
	
	public function setStoreLogo($storeLogo) {
		$this->storeLogo = $storeLogo;
		$this->apiParams["storeLogo"] = $storeLogo;
	}
	
	public function getStoreName() {
		return $this->storeName;
	}
	
	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->apiParams["storeName"] = $storeName;
	}
	
	public function getStorePict() {
		return $this->storePict;
	}
	
	public function setStorePict($storePict) {
		$this->storePict = $storePict;
		$this->apiParams["storePict"] = $storePict;
	}
	
	public function getStoreStatus() {
		return $this->storeStatus;
	}
	
	public function setStoreStatus($storeStatus) {
		$this->storeStatus = $storeStatus;
		$this->apiParams["storeStatus"] = $storeStatus;
	}
	
	public function getStoreTel() {
		return $this->storeTel;
	}
	
	public function setStoreTel($storeTel) {
		$this->storeTel = $storeTel;
		$this->apiParams["storeTel"] = $storeTel;
	}
	
	public function getApiMethodName(){
		return 'suning.store.appstore.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appStoreCode, 'appStoreCode');
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "updateAppstore";
	}
	
}

?>