<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-28
 */
class FeaturewordModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $featureWordOne;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $featureWordTwo;
	
	/**
	 * 
	 */
	private $featureWordThree;
	
	public function getFeatureWordOne() {
		return $this->featureWordOne;
	}
	
	public function setFeatureWordOne($featureWordOne) {
		$this->featureWordOne = $featureWordOne;
		$this->apiParams["featureWordOne"] = $featureWordOne;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getFeatureWordTwo() {
		return $this->featureWordTwo;
	}
	
	public function setFeatureWordTwo($featureWordTwo) {
		$this->featureWordTwo = $featureWordTwo;
		$this->apiParams["featureWordTwo"] = $featureWordTwo;
	}
	
	public function getFeatureWordThree() {
		return $this->featureWordThree;
	}
	
	public function setFeatureWordThree($featureWordThree) {
		$this->featureWordThree = $featureWordThree;
		$this->apiParams["featureWordThree"] = $featureWordThree;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.featureword.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->featureWordOne, 'featureWordOne');
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "modifyFeatureword";
	}
	
}

?>