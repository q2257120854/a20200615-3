<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-8
 */
class BoshopsrcQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $address;
	
	/**
	 * 
	 */
	private $city;
	
	/**
	 * 
	 */
	private $cmmdtyInfo;
	
	/**
	 * 
	 */
	private $county;
	
	/**
	 * 
	 */
	private $province;
	
	/**
	 * 
	 */
	private $village;
	
	/**
	 * 
	 */
	private $businessType;
	
	public function getAddress() {
		return $this->address;
	}
	
	public function setAddress($address) {
		$this->address = $address;
		$this->apiParams["address"] = $address;
	}
	
	public function getCity() {
		return $this->city;
	}
	
	public function setCity($city) {
		$this->city = $city;
		$this->apiParams["city"] = $city;
	}
	
	public function getCmmdtyInfo() {
		return $this->cmmdtyInfo;
	}
	
	public function setCmmdtyInfo($cmmdtyInfo) {
		$this->cmmdtyInfo = $cmmdtyInfo;
		$arr = array();
		foreach ($cmmdtyInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtyInfo"] = $arr;
	}
	
	public function getCounty() {
		return $this->county;
	}
	
	public function setCounty($county) {
		$this->county = $county;
		$this->apiParams["county"] = $county;
	}
	
	public function getProvince() {
		return $this->province;
	}
	
	public function setProvince($province) {
		$this->province = $province;
		$this->apiParams["province"] = $province;
	}
	
	public function getVillage() {
		return $this->village;
	}
	
	public function setVillage($village) {
		$this->village = $village;
		$this->apiParams["village"] = $village;
	}
	
	public function getBusinessType() {
		return $this->businessType;
	}
	
	public function setBusinessType($businessType) {
		$this->businessType = $businessType;
		$this->apiParams["businessType"] = $businessType;
	}
	
	public function getApiMethodName(){
		return 'suning.online.boshopsrc.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->city, 'city');
		RequestCheckUtil::checkNotNull($this->county, 'county');
		RequestCheckUtil::checkNotNull($this->province, 'province');
	}
	
	public function getBizName(){
		return "queryBoshopsrc";
	}
	
}

class CmmdtyInfo {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	private $serialNumber;
	
	private $preplantCode;
	
	private $itemId;
	
	private $saleNum;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getSerialNumber() {
		return $this->serialNumber;
	}

	public function setSerialNumber($serialNumber) {
		$this->serialNumber = $serialNumber;
		$this->apiParams["serialNumber"] = $serialNumber;
	}
	
	public function getPreplantCode() {
		return $this->preplantCode;
	}

	public function setPreplantCode($preplantCode) {
		$this->preplantCode = $preplantCode;
		$this->apiParams["preplantCode"] = $preplantCode;
	}
	
	public function getItemId() {
		return $this->itemId;
	}

	public function setItemId($itemId) {
		$this->itemId = $itemId;
		$this->apiParams["itemId"] = $itemId;
	}
	
	public function getSaleNum() {
		return $this->saleNum;
	}

	public function setSaleNum($saleNum) {
		$this->saleNum = $saleNum;
		$this->apiParams["saleNum"] = $saleNum;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>