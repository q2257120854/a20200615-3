<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-17
 */
class CountysrcQueryRequest  extends SuningRequest{
	
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
	private $vllage;
	
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
	
	public function getVllage() {
		return $this->vllage;
	}
	
	public function setVllage($vllage) {
		$this->vllage = $vllage;
		$this->apiParams["vllage"] = $vllage;
	}
	
	public function getApiMethodName(){
		return 'suning.buyout.countysrc.query';
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
		return "queryCountysrc";
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