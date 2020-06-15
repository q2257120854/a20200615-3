<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-2
 */
class OtodetailpriceQueryRequest  extends SuningRequest{
	
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
	private $cmmdtyCode;
	
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
	private $saleNum;
	
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
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}
	
	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
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
	
	public function getSaleNum() {
		return $this->saleNum;
	}
	
	public function setSaleNum($saleNum) {
		$this->saleNum = $saleNum;
		$this->apiParams["saleNum"] = $saleNum;
	}
	
	public function getShopCode() {
		return $this->shopCode;
	}
	
	public function setShopCode($shopCode) {
		$this->shopCode = $shopCode;
		$this->apiParams["shopCode"] = $shopCode;
	}
	
	public function getApiMethodName(){
		return 'suning.onlinestore.detailprice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->businessType, 'businessType');
		RequestCheckUtil::checkNotNull($this->cityName, 'cityName');
		RequestCheckUtil::checkNotNull($this->cmmdtyCode, 'cmmdtyCode');
		RequestCheckUtil::checkNotNull($this->mapType, 'mapType');
		RequestCheckUtil::checkNotNull($this->outPoiId, 'outPoiId');
		RequestCheckUtil::checkNotNull($this->saleNum, 'saleNum');
		RequestCheckUtil::checkNotNull($this->shopCode, 'shopCode');
	}
	
	public function getBizName(){
		return "queryOtodetailprice";
	}
	
}

?>