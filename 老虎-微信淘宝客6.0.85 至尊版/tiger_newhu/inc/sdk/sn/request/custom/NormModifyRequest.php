<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-6-26
 */
class NormModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $valueItem;
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getValueItem() {
		return $this->valueItem;
	}
	
	public function setValueItem($valueItem) {
		$this->valueItem = $valueItem;
		$arr = array();
		foreach ($valueItem as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["valueItem"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.norm.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "modifyNorm";
	}
	
}

class ValueItem {

	private $apiParams = array();
	
	private $modCharacterCode;
	
	private $modCharacterOldVal;
	
	private $modCharacterNewVal;
	
	public function getModCharacterCode() {
		return $this->modCharacterCode;
	}

	public function setModCharacterCode($modCharacterCode) {
		$this->modCharacterCode = $modCharacterCode;
		$this->apiParams["modCharacterCode"] = $modCharacterCode;
	}
	
	public function getModCharacterOldVal() {
		return $this->modCharacterOldVal;
	}

	public function setModCharacterOldVal($modCharacterOldVal) {
		$this->modCharacterOldVal = $modCharacterOldVal;
		$this->apiParams["modCharacterOldVal"] = $modCharacterOldVal;
	}
	
	public function getModCharacterNewVal() {
		return $this->modCharacterNewVal;
	}

	public function setModCharacterNewVal($modCharacterNewVal) {
		$this->modCharacterNewVal = $modCharacterNewVal;
		$this->apiParams["modCharacterNewVal"] = $modCharacterNewVal;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>