<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-6-6
 */
class JudgeproductConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $categoryCode;
	
	/**
	 * 
	 */
	private $cmBarcode;
	
	/**
	 * 
	 */
	private $fixedPrice;
	
	/**
	 * 
	 */
	private $productName;
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getCmBarcode() {
		return $this->cmBarcode;
	}
	
	public function setCmBarcode($cmBarcode) {
		$this->cmBarcode = $cmBarcode;
		$this->apiParams["cmBarcode"] = $cmBarcode;
	}
	
	public function getFixedPrice() {
		return $this->fixedPrice;
	}
	
	public function setFixedPrice($fixedPrice) {
		$this->fixedPrice = $fixedPrice;
		$this->apiParams["fixedPrice"] = $fixedPrice;
	}
	
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.judgeproduct.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
		RequestCheckUtil::checkNotNull($this->productName, 'productName');
	}
	
	public function getBizName(){
		return "confirmJudgeproduct";
	}
	
}

?>