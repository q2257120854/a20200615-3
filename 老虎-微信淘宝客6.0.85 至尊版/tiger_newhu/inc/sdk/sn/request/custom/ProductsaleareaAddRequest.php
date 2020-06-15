<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-5
 */
class ProductsaleareaAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $ciyCode;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $provCode;
	
	public function getCiyCode() {
		return $this->ciyCode;
	}
	
	public function setCiyCode($ciyCode) {
		$this->ciyCode = $ciyCode;
		$this->apiParams["ciyCode"] = $ciyCode;
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
	
	public function getProvCode() {
		return $this->provCode;
	}
	
	public function setProvCode($provCode) {
		$this->provCode = $provCode;
		$this->apiParams["provCode"] = $provCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.productsalearea.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addProductsalearea";
	}
	
}

?>