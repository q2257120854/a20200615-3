<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-29
 */
class PriceUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $deductiblePrice;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $price;
	
	/**
	 * 
	 */
	private $productCode;
	
	public function getDeductiblePrice() {
		return $this->deductiblePrice;
	}
	
	public function setDeductiblePrice($deductiblePrice) {
		$this->deductiblePrice = $deductiblePrice;
		$this->apiParams["deductiblePrice"] = $deductiblePrice;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.price.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "updatePrice";
	}
	
}

?>