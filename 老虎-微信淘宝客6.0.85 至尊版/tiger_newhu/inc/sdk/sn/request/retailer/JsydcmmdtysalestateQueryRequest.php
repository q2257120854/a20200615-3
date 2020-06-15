<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-28
 */
class JsydcmmdtysalestateQueryRequest  extends SuningRequest{
	
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
	private $province;
	
	/**
	 * 
	 */
	private $skuIds;
	
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
	
	public function getProvince() {
		return $this->province;
	}
	
	public function setProvince($province) {
		$this->province = $province;
		$this->apiParams["province"] = $province;
	}
	
	public function getSkuIds() {
		return $this->skuIds;
	}
	
	public function setSkuIds($skuIds) {
		$this->skuIds = $skuIds;
		$this->apiParams["skuIds"] = $skuIds;
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
		return 'suning.retailer.jsydcmmdtysalestate.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->city, 'city');
		RequestCheckUtil::checkNotNull($this->county, 'county');
		RequestCheckUtil::checkNotNull($this->province, 'province');
		RequestCheckUtil::checkNotNull($this->skuIds, 'skuIds');
		RequestCheckUtil::checkNotNull($this->token, 'token');
		RequestCheckUtil::checkNotNull($this->town, 'town');
	}
	
	public function getBizName(){
		return "queryJsydcmmdtysalestate";
	}
	
}

?>