<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-7-29
 */
class CmmdtylogisticstimeQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $cmmdtyList;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
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
	
	public function getApiMethodName(){
		return 'suning.retailer.cmmdtylogisticstime.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "queryCmmdtylogisticstime";
	}
	
}

class CmmdtyList {

	private $apiParams = array();
	
	private $address;
	
	private $cityCode;
	
	private $cmmdtyCode;
	
	private $distributorCode;
	
	private $districtCode;
	
	private $isPrototype;
	
	private $itemNo;
	
	private $quantity;
	
	private $selectedArrivalTime;
	
	private $townCode;
	
	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
		$this->apiParams["address"] = $address;
	}
	
	public function getCityCode() {
		return $this->cityCode;
	}

	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
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
	
	public function getDistrictCode() {
		return $this->districtCode;
	}

	public function setDistrictCode($districtCode) {
		$this->districtCode = $districtCode;
		$this->apiParams["districtCode"] = $districtCode;
	}
	
	public function getIsPrototype() {
		return $this->isPrototype;
	}

	public function setIsPrototype($isPrototype) {
		$this->isPrototype = $isPrototype;
		$this->apiParams["isPrototype"] = $isPrototype;
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
	
	public function getSelectedArrivalTime() {
		return $this->selectedArrivalTime;
	}

	public function setSelectedArrivalTime($selectedArrivalTime) {
		$this->selectedArrivalTime = $selectedArrivalTime;
		$this->apiParams["selectedArrivalTime"] = $selectedArrivalTime;
	}
	
	public function getTownCode() {
		return $this->townCode;
	}

	public function setTownCode($townCode) {
		$this->townCode = $townCode;
		$this->apiParams["townCode"] = $townCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>