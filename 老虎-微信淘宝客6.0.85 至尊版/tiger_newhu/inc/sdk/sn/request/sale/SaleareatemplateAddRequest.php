<?php

/**
 * 苏宁开放平台接口 - 销售准备API - 新增销售范围模板
 *
 * $pack   suning.custom.saleareatemplate.add
 * @author 14050890
 * @date   2014-06-03
 */
class SaleareatemplateAddRequest extends SuningRequest {

	/**
	 * 模版名称
	 */
	private $templateName;

	/**
	 * 是否全国。1:全国 0:非全国
	 */
	private $nation;

	/**
	 * 省份列表
	 */
	private $provList;

	/**
	 * 城市列表
	 */
	private $cityList;

	public function getTemplateName() {
		return $this -> templateName;
	}

	public function getNation() {
		return $this -> nation;
	}

	public function setTemplateName($templateName) {
		$this -> templateName = $templateName;
		$this->apiParams["templateName"] = $templateName;
	}

	public function setNation($nation) {
		$this -> nation = $nation;
		$this->apiParams["nation"] = $nation;
	}

	public function getProvList() {
		return $this -> provList;
	}

	public function getCityList() {
		return $this -> cityList;
	}

	public function setProvList($provList) {
		$this -> provList = $provList;
		$this->apiParams["provList"] = $provList->getApiParams();
	}

	public function setCityList($cityList) {
		$this -> cityList = $cityList;
		$this->apiParams["cityList"] = $cityList->getApiParams();
	}

	/**
	 * 根据请求方式，生成相应请求报文
	 *
	 * @param $type 请求方式(json或xml，默认xml)        	
	 */
	public function getApiParams() {
		return $this->apiParams;
	}

	/**
	 * 获取接口方法名称
	 */
	public function getApiMethodName() {
		return "suning.custom.saleareatemplate.add";
	}

	/**
	 * 数据校验
	 */
	public function check() {
		RequestCheckUtil::checkNotNull($this -> templateName, 'templateName');
		RequestCheckUtil::checkNotNull($this -> nation, 'nation');
	}
	
	public function getBizName(){
		return "saleAreaTemplate";
	}
}

class ProvList {

	private $apiParams = array();
	/**
	 * 省份代码
	 */
	private $prov;

	public function getProv() {
		return $this -> prov;
	}

	public function setProv($prov) {
		$this -> prov = $prov;
		$this->apiParams["prov"] = $prov;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
}

class CityList {

	private $apiParams = array();
	/**
	 * 城市编码
	 */
	private $city;

	public function getCity() {
		return $this -> city;
	}

	public function setCity($city) {
		$this -> city = $city;
		$this->apiParams["city"] = $city;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
}
?>