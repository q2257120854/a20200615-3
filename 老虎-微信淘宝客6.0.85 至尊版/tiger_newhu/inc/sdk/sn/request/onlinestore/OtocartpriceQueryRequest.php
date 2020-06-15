<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-11
 */
class OtocartpriceQueryRequest  extends SuningRequest{
	
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
	private $deliveryMode;
	
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
	
	public function getDeliveryMode() {
		return $this->deliveryMode;
	}
	
	public function setDeliveryMode($deliveryMode) {
		$this->deliveryMode = $deliveryMode;
		$this->apiParams["deliveryMode"] = $deliveryMode;
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
		return 'suning.onlinestore.cartprice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->businessType, 'businessType');
		RequestCheckUtil::checkNotNull($this->cityName, 'cityName');
		RequestCheckUtil::checkNotNull($this->deliveryMode, 'deliveryMode');
		RequestCheckUtil::checkNotNull($this->mapType, 'mapType');
		RequestCheckUtil::checkNotNull($this->outPoiId, 'outPoiId');
		RequestCheckUtil::checkNotNull($this->shopCode, 'shopCode');
	}
	
	public function getBizName(){
		return "queryOtocartprice";
	}
	
}

class CmmdtyInfo {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	private $itemId;
	
	private $saleNum;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
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