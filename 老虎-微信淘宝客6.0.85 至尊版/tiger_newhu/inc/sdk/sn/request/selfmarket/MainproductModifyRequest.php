<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-3-6
 */
class MainproductModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $correctData;
	
	/**
	 * 
	 */
	private $productCode;
	
	public function getCorrectData() {
		return $this->correctData;
	}
	
	public function setCorrectData($correctData) {
		$this->correctData = $correctData;
		$arr = array();
		foreach ($correctData as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["correctData"] = $arr;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.mainproduct.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "modifyMainproduct";
	}
	
}

class CorrectData {

	private $apiParams = array();
	
	private $barpic;
	
	private $correctKey;
	
	private $correctValue;
	
	private $subProductCode;
	
	public function getBarpic() {
		return $this->barpic;
	}

	public function setBarpic($barpic) {
		$this->barpic = $barpic;
		$this->apiParams["barpic"] = $barpic;
	}
	
	public function getCorrectKey() {
		return $this->correctKey;
	}

	public function setCorrectKey($correctKey) {
		$this->correctKey = $correctKey;
		$this->apiParams["correctKey"] = $correctKey;
	}
	
	public function getCorrectValue() {
		return $this->correctValue;
	}

	public function setCorrectValue($correctValue) {
		$this->correctValue = $correctValue;
		$this->apiParams["correctValue"] = $correctValue;
	}
	
	public function getSubProductCode() {
		return $this->subProductCode;
	}

	public function setSubProductCode($subProductCode) {
		$this->subProductCode = $subProductCode;
		$this->apiParams["subProductCode"] = $subProductCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>