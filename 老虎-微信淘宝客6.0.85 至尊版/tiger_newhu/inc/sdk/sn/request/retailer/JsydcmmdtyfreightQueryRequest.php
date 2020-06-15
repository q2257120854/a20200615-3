<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-28
 */
class JsydcmmdtyfreightQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $city;
	
	/**
	 * 
	 */
	private $county;
	
	/**
	 * 
	 */
	private $paymentType;
	
	/**
	 * 
	 */
	private $provinc;
	
	/**
	 * 
	 */
	private $sku;
	
	/**
	 * 
	 */
	private $token;
	
	/**
	 * 
	 */
	private $town;
	
	public function getCity() {
		return $this->city;
	}
	
	public function setCity($city) {
		$this->city = $city;
		$this->apiParams["city"] = $city;
	}
	
	public function getCounty() {
		return $this->county;
	}
	
	public function setCounty($county) {
		$this->county = $county;
		$this->apiParams["county"] = $county;
	}
	
	public function getPaymentType() {
		return $this->paymentType;
	}
	
	public function setPaymentType($paymentType) {
		$this->paymentType = $paymentType;
		$this->apiParams["paymentType"] = $paymentType;
	}
	
	public function getProvinc() {
		return $this->provinc;
	}
	
	public function setProvinc($provinc) {
		$this->provinc = $provinc;
		$this->apiParams["provinc"] = $provinc;
	}
	
	public function getSku() {
		return $this->sku;
	}
	
	public function setSku($sku) {
		$this->sku = $sku;
		$arr = array();
		foreach ($sku as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["sku"] = $arr;
	}
	
	public function getToken() {
		return $this->token;
	}
	
	public function setToken($token) {
		$this->token = $token;
		$this->apiParams["token"] = $token;
	}
	
	public function getTown() {
		return $this->town;
	}
	
	public function setTown($town) {
		$this->town = $town;
		$this->apiParams["town"] = $town;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.jsydcmmdtyfreight.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->city, 'city');
		RequestCheckUtil::checkNotNull($this->county, 'county');
		RequestCheckUtil::checkNotNull($this->paymentType, 'paymentType');
		RequestCheckUtil::checkNotNull($this->provinc, 'provinc');
		RequestCheckUtil::checkNotNull($this->token, 'token');
	}
	
	public function getBizName(){
		return "queryJsydcmmdtyfreight";
	}
	
}

class Sku {

	private $apiParams = array();
	
	private $num;
	
	private $skuId;
	
	public function getNum() {
		return $this->num;
	}

	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}

	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>