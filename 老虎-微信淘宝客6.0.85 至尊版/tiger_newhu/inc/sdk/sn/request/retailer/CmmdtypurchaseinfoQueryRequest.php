<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-22
 */
class CmmdtypurchaseinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $address;
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $cityCode;
	
	/**
	 * 
	 */
	private $cmmdtyList;
	
	/**
	 * 
	 */
	private $districtCode;
	
	/**
	 * 
	 */
	private $priceDate;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $townCode;
	
	public function getAddress() {
		return $this->address;
	}
	
	public function setAddress($address) {
		$this->address = $address;
		$this->apiParams["address"] = $address;
	}
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getCityCode() {
		return $this->cityCode;
	}
	
	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
	public function getCmmdtyList() {
		return $this->cmmdtyList;
	}
	
	public function setCmmdtyList($cmmdtyList) {
		$this->cmmdtyList = $cmmdtyList;
		$arr = array();
		foreach ($cmmdtyList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtyList"] = $arr;
	}
	
	public function getDistrictCode() {
		return $this->districtCode;
	}
	
	public function setDistrictCode($districtCode) {
		$this->districtCode = $districtCode;
		$this->apiParams["districtCode"] = $districtCode;
	}
	
	public function getPriceDate() {
		return $this->priceDate;
	}
	
	public function setPriceDate($priceDate) {
		$this->priceDate = $priceDate;
		$this->apiParams["priceDate"] = $priceDate;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getTownCode() {
		return $this->townCode;
	}
	
	public function setTownCode($townCode) {
		$this->townCode = $townCode;
		$this->apiParams["townCode"] = $townCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.cmmdtypurchaseinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->address, 'address');
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->cityCode, 'cityCode');
		RequestCheckUtil::checkNotNull($this->districtCode, 'districtCode');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "queryCmmdtypurchaseinfo";
	}
	
}

class CmmdtyList {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	private $distributorCode;
	
	private $itemNo;
	
	private $quantity;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getDistributorCode() {
		return $this->distributorCode;
	}

	public function setDistributorCode($distributorCode) {
		$this->distributorCode = $distributorCode;
		$this->apiParams["distributorCode"] = $distributorCode;
	}
	
	public function getItemNo() {
		return $this->itemNo;
	}

	public function setItemNo($itemNo) {
		$this->itemNo = $itemNo;
		$this->apiParams["itemNo"] = $itemNo;
	}
	
	public function getQuantity() {
		return $this->quantity;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
		$this->apiParams["quantity"] = $quantity;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>