<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class CmmdtypriceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cmmdtyInfo;
	
	/**
	 * 
	 */
	private $sceneType;
	
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
	
	public function getSceneType() {
		return $this->sceneType;
	}
	
	public function setSceneType($sceneType) {
		$this->sceneType = $sceneType;
		$this->apiParams["sceneType"] = $sceneType;
	}
	
	public function getApiMethodName(){
		return 'suning.online.price.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->sceneType, 'sceneType');
	}
	
	public function getBizName(){
		return "queryCmmdtyprice";
	}
	
}

class CmmdtyInfo {

	private $apiParams = array();
	
	private $address;
	
	private $chanId;
	
	private $city;
	
	private $cmmdtyCode;
	
	private $county;
	
	private $orderItemId;
	
	private $province;
	
	private $saleNum;
	
	private $village;
	
	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
		$this->apiParams["address"] = $address;
	}
	
	public function getChanId() {
		return $this->chanId;
	}

	public function setChanId($chanId) {
		$this->chanId = $chanId;
		$this->apiParams["chanId"] = $chanId;
	}
	
	public function getCity() {
		return $this->city;
	}

	public function setCity($city) {
		$this->city = $city;
		$this->apiParams["city"] = $city;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getCounty() {
		return $this->county;
	}

	public function setCounty($county) {
		$this->county = $county;
		$this->apiParams["county"] = $county;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getProvince() {
		return $this->province;
	}

	public function setProvince($province) {
		$this->province = $province;
		$this->apiParams["province"] = $province;
	}
	
	public function getSaleNum() {
		return $this->saleNum;
	}

	public function setSaleNum($saleNum) {
		$this->saleNum = $saleNum;
		$this->apiParams["saleNum"] = $saleNum;
	}
	
	public function getVillage() {
		return $this->village;
	}

	public function setVillage($village) {
		$this->village = $village;
		$this->apiParams["village"] = $village;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>