<?php

/**
 * 苏宁开放平台接口 - 库存API - （平行仓模式）设置仓库覆盖范围
 *
 * $pack   suning.custom.parallelinvarea.set
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */
class ParallelinvareaSetRequest extends SuningRequest {

	/**
	 * 商家创建仓库时自行定义的仓库编码
	 */
	private $invCode;

	private $invProvinces;

	private $invCitys;

	public function getInvCode() {
		return $this -> invCode;
	}

	public function getInvProvinces() {
		return $this -> invProvinces;
	}

	public function getInvCitys() {
		return $this -> invCitys;
	}

	public function setInvCode($invCode) {
		$this -> invCode = $invCode;
		$this->apiParams["invCode"] = $invCode;
	}

	public function setInvProvinces($invProvinces) {
		$this -> invProvinces = $invProvinces;
		$this->apiParams["invProvinces"] = $invProvinces->getApiParams();
	}

	public function setInvCitys($invCitys) {
		$this -> invCitys = $invCitys;
		$this->apiParams["invCitys"] = $invCitys->getApiParams();
	}

	public function getApiMethodName() {
		return 'suning.custom.parallelinvarea.set';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this -> invCode, 'invCode');
	}
	
	public function getBizName(){
		return "parallelInvarea";
	}
}

class InvProvinces {
	private $apiParams = array();
	
	private $invProvince;

	public function getInvProvince() {
		return $this -> invProvince;
	}

	public function setInvProvince($invProvince) {
		$this -> invProvince = $invProvince;
		
		$arr = array();
		foreach ($invProvince as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["invProvince"] = $arr;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
}

class InvCitys {
	private $apiParams = array();

	private $invCity;

	public function getInvCity() {
		return $this -> invCity;
	}

	public function setInvCity($invCity) {
		$this -> invCity = $invCity;
		
		$arr = array();
		foreach ($invCity as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["invCity"] = $arr;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
}

class InvProvince{
	private $apiParams = array();
	
	private $invProvinceCode;
	/**
	 * @return the $invProvinceCode
	 */
	public function getInvProvinceCode() {
		return $this->invProvinceCode;
	}

	/**
	 * @param field_type $invProvinceCode
	 */
	public function setInvProvinceCode($invProvinceCode) {
		$this->invProvinceCode = $invProvinceCode;
		$this->apiParams["invProvinceCode"] = $invProvinceCode;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}

}

class InvCity{
	private $apiParams = array();
	
	private $invCityCode;
	/**
	 * @return the $invCityCode
	 */
	public function getInvCityCode() {
		return $this->invCityCode;
	}

	/**
	 * @param field_type $invCityCode
	 */
	public function setInvCityCode($invCityCode) {
		$this->invCityCode = $invCityCode;
		$this->apiParams["invCityCode"] = $invCityCode;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}

}
?>