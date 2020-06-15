<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-9-29
 */
class StoreAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $branchStoreName;
	
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
	private $ownstoreCode;
	
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
	private $storeCondues;
	
	/**
	 * 
	 */
	private $storeName;
	
	/**
	 * 
	 */
	private $storeInProVince;
	
	/**
	 * 
	 */
	private $storeInCity;
	
	/**
	 * 
	 */
	private $storeTel;
	
	/**
	 * 
	 */
	private $storeStatus;
	
	/**
	 * 
	 */
	private $storePict;
	
	/**
	 * 
	 */
	private $storeEpp;
	
	/**
	 * 
	 */
	private $storeEppPayFlag;
	
	/**
	 * 
	 */
	private $storeEppPay;
	
	/**
	 * 
	 */
	private $storeSend;
	
	public function getBranchStoreName() {
		return $this->branchStoreName;
	}
	
	public function setBranchStoreName($branchStoreName) {
		$this->branchStoreName = $branchStoreName;
		$this->apiParams["branchStoreName"] = $branchStoreName;
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
	
	public function getOwnstoreCode() {
		return $this->ownstoreCode;
	}
	
	public function setOwnstoreCode($ownstoreCode) {
		$this->ownstoreCode = $ownstoreCode;
		$this->apiParams["ownstoreCode"] = $ownstoreCode;
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
	
	public function getStoreCondues() {
		return $this->storeCondues;
	}
	
	public function setStoreCondues($storeCondues) {
		$this->storeCondues = $storeCondues;
		$this->apiParams["storeCondues"] = $storeCondues;
	}
	
	public function getStoreName() {
		return $this->storeName;
	}
	
	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->apiParams["storeName"] = $storeName;
	}
	
	public function getStoreInProVince() {
		return $this->storeInProVince;
	}
	
	public function setStoreInProVince($storeInProVince) {
		$this->storeInProVince = $storeInProVince;
		$this->apiParams["storeInProVince"] = $storeInProVince;
	}
	
	public function getStoreInCity() {
		return $this->storeInCity;
	}
	
	public function setStoreInCity($storeInCity) {
		$this->storeInCity = $storeInCity;
		$this->apiParams["storeInCity"] = $storeInCity;
	}
	
	public function getStoreTel() {
		return $this->storeTel;
	}
	
	public function setStoreTel($storeTel) {
		$this->storeTel = $storeTel;
		$this->apiParams["storeTel"] = $storeTel;
	}
	
	public function getStoreStatus() {
		return $this->storeStatus;
	}
	
	public function setStoreStatus($storeStatus) {
		$this->storeStatus = $storeStatus;
		$this->apiParams["storeStatus"] = $storeStatus;
	}
	
	public function getStorePict() {
		return $this->storePict;
	}
	
	public function setStorePict($storePict) {
		$this->storePict = $storePict;
		$this->apiParams["storePict"] = $storePict;
	}
	
	public function getStoreEpp() {
		return $this->storeEpp;
	}
	
	public function setStoreEpp($storeEpp) {
		$this->storeEpp = $storeEpp;
		$this->apiParams["storeEpp"] = $storeEpp;
	}
	
	public function getStoreEppPayFlag() {
		return $this->storeEppPayFlag;
	}
	
	public function setStoreEppPayFlag($storeEppPayFlag) {
		$this->storeEppPayFlag = $storeEppPayFlag;
		$this->apiParams["storeEppPayFlag"] = $storeEppPayFlag;
	}
	
	public function getStoreEppPay() {
		return $this->storeEppPay;
	}
	
	public function setStoreEppPay($storeEppPay) {
		$this->storeEppPay = $storeEppPay;
		$this->apiParams["storeEppPay"] = $storeEppPay;
	}
	
	public function getStoreSend() {
		return $this->storeSend;
	}
	
	public function setStoreSend($storeSend) {
		$this->storeSend = $storeSend;
		$this->apiParams["storeSend"] = $storeSend;
	}
	
	public function getApiMethodName(){
		return 'suning.oto.store.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->dayHours, 'dayHours');
		RequestCheckUtil::checkNotNull($this->latitude, 'latitude');
		RequestCheckUtil::checkNotNull($this->longitude, 'longitude');
		RequestCheckUtil::checkNotNull($this->storeAdd, 'storeAdd');
		RequestCheckUtil::checkNotNull($this->storeArea, 'storeArea');
		RequestCheckUtil::checkNotNull($this->storeName, 'storeName');
		RequestCheckUtil::checkNotNull($this->storeInProVince, 'storeInProVince');
		RequestCheckUtil::checkNotNull($this->storeInCity, 'storeInCity');
		RequestCheckUtil::checkNotNull($this->storeTel, 'storeTel');
		RequestCheckUtil::checkNotNull($this->storeStatus, 'storeStatus');
		RequestCheckUtil::checkNotNull($this->storeEppPayFlag, 'storeEppPayFlag');
	}
	
	public function getBizName(){
		return "addStore";
	}
	
}

?>