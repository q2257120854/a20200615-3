<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-9
 */
class PaymentwayGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cityCode;
	
	/**
	 * 
	 */
	private $districtCode;
	
	/**
	 * 
	 */
	private $payAmount;
	
	/**
	 * 
	 */
	private $provinceCode;
	
	/**
	 * 
	 */
	private $skuId;
	
	/**
	 * 
	 */
	private $townCode;
	
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
	
	public function getPayAmount() {
		return $this->payAmount;
	}
	
	public function setPayAmount($payAmount) {
		$this->payAmount = $payAmount;
		$this->apiParams["payAmount"] = $payAmount;
	}
	
	public function getProvinceCode() {
		return $this->provinceCode;
	}
	
	public function setProvinceCode($provinceCode) {
		$this->provinceCode = $provinceCode;
		$this->apiParams["provinceCode"] = $provinceCode;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}
	
	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getTownCode() {
		return $this->townCode;
	}
	
	public function setTownCode($townCode) {
		$this->townCode = $townCode;
		$this->apiParams["townCode"] = $townCode;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.paymentway.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cityCode, 'cityCode');
		RequestCheckUtil::checkNotNull($this->districtCode, 'districtCode');
		RequestCheckUtil::checkNotNull($this->payAmount, 'payAmount');
		RequestCheckUtil::checkNotNull($this->provinceCode, 'provinceCode');
		RequestCheckUtil::checkNotNull($this->skuId, 'skuId');
	}
	
	public function getBizName(){
		return "getPaymentway";
	}
	
}

?>