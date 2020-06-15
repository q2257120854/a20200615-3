<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-6-26
 */
class NormDeleteRequest  extends SuningRequest{
	
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
		return 'suning.custom.norm.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "deleteNorm";
	}
	
}

class ValueItem {

	private $apiParams = array();
	
	private $delCharacterCode;
	
	private $delCharacterValue;
	
	public function getDelCharacterCode() {
		return $this->delCharacterCode;
	}

	public function setDelCharacterCode($delCharacterCode) {
		$this->delCharacterCode = $delCharacterCode;
		$this->apiParams["delCharacterCode"] = $delCharacterCode;
	}
	
	public function getDelCharacterValue() {
		return $this->delCharacterValue;
	}

	public function setDelCharacterValue($delCharacterValue) {
		$this->delCharacterValue = $delCharacterValue;
		$this->apiParams["delCharacterValue"] = $delCharacterValue;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>