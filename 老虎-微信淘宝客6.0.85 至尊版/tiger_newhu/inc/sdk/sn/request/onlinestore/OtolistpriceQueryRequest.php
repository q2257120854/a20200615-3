<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-2
 */
class OtolistpriceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $businessType;
	
	/**
	 * 
	 */
	private $cityName;
	
	/**
	 * 
	 */
	private $cmmdtyInfo;
	
	/**
	 * 
	 */
	private $mapType;
	
	/**
	 * 
	 */
	private $outPoiId;
	
	/**
	 * 
	 */
	private $shopCode;
	
	public function getBusinessType() {
		return $this->businessType;
	}
	
	public function setBusinessType($businessType) {
		$this->businessType = $businessType;
		$this->apiParams["businessType"] = $businessType;
	}
	
	public function getCityName() {
		return $this->cityName;
	}
	
	public function setCityName($cityName) {
		$this->cityName = $cityName;
		$this->apiParams["cityName"] = $cityName;
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
	
	public function getMapType() {
		return $this->mapType;
	}
	
	public function setMapType($mapType) {
		$this->mapType = $mapType;
		$this->apiParams["mapType"] = $mapType;
	}
	
	public function getOutPoiId() {
		return $this->outPoiId;
	}
	
	public function setOutPoiId($outPoiId) {
		$this->outPoiId = $outPoiId;
		$this->apiParams["outPoiId"] = $outPoiId;
	}
	
	public function getShopCode() {
		return $this->shopCode;
	}
	
	public function setShopCode($shopCode) {
		$this->shopCode = $shopCode;
		$this->apiParams["shopCode"] = $shopCode;
	}
	
	public function getApiMethodName(){
		return 'suning.onlinestore.listprice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->businessType, 'businessType');
		RequestCheckUtil::checkNotNull($this->cityName, 'cityName');
		RequestCheckUtil::checkNotNull($this->mapType, 'mapType');
		RequestCheckUtil::checkNotNull($this->outPoiId, 'outPoiId');
		RequestCheckUtil::checkNotNull($this->shopCode, 'shopCode');
	}
	
	public function getBizName(){
		return "queryOtolistprice";
	}
	
}

class CmmdtyInfo {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>