<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-3-23
 */
class itemSaleQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $categoryCode;
	
	/**
	 * 
	 */
	private $cmTitle;
	
	
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $productName;
	
	/**
	 * 
	 */
	private $saleStatus;
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getCmTitle() {
		return $this->cmTitle;
	}
	
	public function setCmTitle($cmTitle) {
		$this->cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}
	
	
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getSaleStatus() {
		return $this->saleStatus;
	}
	
	public function setSaleStatus($saleStatus) {
		$this->saleStatus = $saleStatus;
		$this->apiParams["saleStatus"] = $saleStatus;
	}
	
	public function getApiMethodName(){
		return 'suning.integrate.itemsale.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "itemSale";
	}
	
}

?>