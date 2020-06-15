<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-5-29
 */
class BookmainproductModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $correctParams;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $productCode;
	
	public function getCorrectParams() {
		return $this->correctParams;
	}
	
	public function setCorrectParams($correctParams) {
		$this->correctParams = $correctParams;
		$arr = array();
		foreach ($correctParams as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["correctParams"] = $arr;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.bookmainproduct.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "mainProduct";
	}
	
}

class CorrectParams {

	private $apiParams = array();
	
	private $correctKey;
	
	private $correctPic;
	
	private $correctReason;
	
	private $correctValue;
	
	public function getCorrectKey() {
		return $this->correctKey;
	}

	public function setCorrectKey($correctKey) {
		$this->correctKey = $correctKey;
		$this->apiParams["correctKey"] = $correctKey;
	}
	
	public function getCorrectPic() {
		return $this->correctPic;
	}

	public function setCorrectPic($correctPic) {
		$this->correctPic = $correctPic;
		$this->apiParams["correctPic"] = $correctPic;
	}
	
	public function getCorrectReason() {
		return $this->correctReason;
	}

	public function setCorrectReason($correctReason) {
		$this->correctReason = $correctReason;
		$this->apiParams["correctReason"] = $correctReason;
	}
	
	public function getCorrectValue() {
		return $this->correctValue;
	}

	public function setCorrectValue($correctValue) {
		$this->correctValue = $correctValue;
		$this->apiParams["correctValue"] = $correctValue;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>