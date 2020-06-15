<?php

/**
 * 苏宁开放平台接口 - 销售准备API - 新增运费模板
 *
 * $pack   suning.custom.freighttemplate.add
 * @author 14050890
 * @date   2014-06-03
 */
class FreighttemplateAddRequest extends SuningRequest {

	/**
	 * 运费模板名称
	 */
	private $freightTemplateName;

	/**
	 * 运费方式。可选值 0、1
	 */
	private $shippingType;

	/**
	 * 计价方式。可选值：0、1、2
	 */
	private $valuationType;

	/**
	 * 首费标准
	 */
	private $firstValue;

	/**
	 * 首费
	 */
	private $firstValueFare;

	/**
	 * 续费标准
	 */
	private $continuedValue;

	/**
	 * 续费
	 */
	private $continuedValueFare;
	
	/**
	 * 用户类型
	 */
	private $supplierType;
	
	/**
	 * 是否包税
	 */
	private $taxType;

	/**
	 * 特定模板
	 */
	private $freightList;

	public function getFreightTemplateName() {
		return $this -> freightTemplateName;
	}

	public function getShippingType() {
		return $this -> shippingType;
	}

	public function getValuationType() {
		return $this -> valuationType;
	}

	public function getFirstValue() {
		return $this -> firstValue;
	}

	public function getFirstValueFare() {
		return $this -> firstValueFare;
	}

	public function getContinuedValue() {
		return $this -> continuedValue;
	}

	public function getContinuedValueFare() {
		return $this -> continuedValueFare;
	}

	public function getSupplierType() {
		return $this -> supplierType;
	}
	
	public function getTaxType() {
		return $this -> taxType;
	}
	
	public function getFreightList() {
		return $this -> freightList;
	}

	public function setFreightTemplateName($freightTemplateName) {
		$this -> freightTemplateName = $freightTemplateName;
		$this->apiParams["freightTemplateName"] = $freightTemplateName;
	}

	public function setShippingType($shippingType) {
		$this -> shippingType = $shippingType;
		$this->apiParams["shippingType"] = $shippingType;
	}

	public function setValuationType($valuationType) {
		$this -> valuationType = $valuationType;
		$this->apiParams["valuationType"] = $valuationType;
	}

	public function setFirstValue($firstValue) {
		$this -> firstValue = $firstValue;
		$this->apiParams["firstValue"] = $firstValue;
	}

	public function setFirstValueFare($firstValueFare) {
		$this -> firstValueFare = $firstValueFare;
		$this->apiParams["firstValueFare"] = $firstValueFare;
	}

	public function setContinuedValue($continuedValue) {
		$this -> continuedValue = $continuedValue;
		$this->apiParams["continuedValue"] = $continuedValue;
	}

	public function setContinuedValueFare($continuedValueFare) {
		$this -> continuedValueFare = $continuedValueFare;
		$this->apiParams["continuedValueFare"] = $continuedValueFare;
	}
	
	public function setSupplierType($supplierType) {
		$this -> supplierType = $supplierType;
		$this->apiParams["supplierType"] = $supplierType;
	}
	
	public function setTaxType($taxType) {
		$this -> taxType = $taxType;
		$this->apiParams["taxType"] = $taxType;
	}
	
	public function setFreightList($freightList) {
		$this -> freightList = $freightList;
		$this->apiParams["freightList"] = $freightList->getApiParams();
	}

	/**
	 * 根据请求方式，生成相应请求报文
	 *
	 * @param
	 *        	type 请求方式(json或xml)
	 */
	public function getApiParams() {
		return $this->apiParams;
	}

	public function getApiMethodName() {
		return "suning.custom.freighttemplate.add";
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this -> freightTemplateName, 'freightTemplateName');
		RequestCheckUtil::checkNotNull($this -> shippingType, 'shippingType');
		RequestCheckUtil::checkNotNull($this -> valuationType, 'valuationType');
	}
	
	public function getBizName(){
		return "freightTemplate";
	}
}

class FreightList {

	private $apiParams = array();
	/**
	 * 地区代码
	 */
	private $sperencod;

	/**
	 * 省份代码
	 */
	private $speprovencod;

	/**
	 * 城市代码
	 */
	private $specityencod;

	/**
	 * 特定区域首费
	 */
	private $firstValue;

	/**
	 * 特定区域首费标准
	 */
	private $firstValueFare;

	/**
	 * 特定区域续费
	 */
	private $continuedValue;

	/**
	 * 特定区域续费标准
	 */
	private $continuedValueFare;

	public function getSperencod() {
		return $this -> sperencod;
	}

	public function getSpeprovencod() {
		return $this -> speprovencod;
	}

	public function getSpecityencod() {
		return $this -> specityencod;
	}

	public function getFirstValue() {
		return $this -> firstValue;
	}

	public function getFirstValueFare() {
		return $this -> firstValueFare;
	}

	public function getContinuedValue() {
		return $this -> continuedValue;
	}

	public function getContinuedValueFare() {
		return $this -> continuedValueFare;
	}

	public function setSperencod($sperencod) {
		$this -> sperencod = $sperencod;
		$this->apiParams["sperencod"] = $sperencod;
	}

	public function setSpeprovencod($speprovencod) {
		$this -> speprovencod = $speprovencod;
		$this->apiParams["speprovencod"] = $speprovencod;
	}

	public function setSpecityencod($specityencod) {
		$this -> specityencod = $specityencod;
		$this->apiParams["specityencod"] = $specityencod;
	}

	public function setFirstValue($firstValue) {
		$this -> firstValue = $firstValue;
		$this->apiParams["firstValue"] = $firstValue;
	}

	public function setFirstValueFare($firstValueFare) {
		$this -> firstValueFare = $firstValueFare;
		$this->apiParams["firstValueFare"] = $firstValueFare;
	}

	public function setContinuedValue($continuedValue) {
		$this -> continuedValue = $continuedValue;
		$this->apiParams["continuedValue"] = $continuedValue;
	}

	public function setContinuedValueFare($continuedValueFare) {
		$this -> continuedValueFare = $continuedValueFare;
		$this->apiParams["continuedValueFare"] = $continuedValueFare;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
}
