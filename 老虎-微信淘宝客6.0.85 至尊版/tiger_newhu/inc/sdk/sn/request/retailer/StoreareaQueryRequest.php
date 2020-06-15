<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-3
 */
class StoreareaQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $merchantCustNo;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $provinceCode;
	
	/**
	 * 
	 */
	private $cityCode;
	
	/**
	 * 
	 */
	private $districtCode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getMerchantCustNo() {
		return $this->merchantCustNo;
	}
	
	public function setMerchantCustNo($merchantCustNo) {
		$this->merchantCustNo = $merchantCustNo;
		$this->apiParams["merchantCustNo"] = $merchantCustNo;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getProvinceCode() {
		return $this->provinceCode;
	}
	
	public function setProvinceCode($provinceCode) {
		$this->provinceCode = $provinceCode;
		$this->apiParams["provinceCode"] = $provinceCode;
	}
	
	public function getCityCode() {
		return $this->cityCode;
	}
	
	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
	public function getDistrictCode() {
		return $this->districtCode;
	}
	
	public function setDistrictCode($districtCode) {
		$this->districtCode = $districtCode;
		$this->apiParams["districtCode"] = $districtCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.storearea.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->merchantCustNo, 'merchantCustNo');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
		RequestCheckUtil::checkNotNull($this->provinceCode, 'provinceCode');
	}
	
	public function getBizName(){
		return "queryStorearea";
	}
	
}

?>