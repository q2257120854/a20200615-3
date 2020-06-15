<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-1-12
 */
class itemSaleQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $productName;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $categoryCode;
	
	/**
	 * 
	 */
	private $priceUpper;
	
	/**
	 * 
	 */
	private $priceLimit;
	
	/**
	 * 
	 */
	private $saleStatus;
	
	/**
	 * 
	 */
	private $cmTitle;
	
	
	
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getPriceUpper() {
		return $this->priceUpper;
	}
	
	public function setPriceUpper($priceUpper) {
		$this->priceUpper = $priceUpper;
		$this->apiParams["priceUpper"] = $priceUpper;
	}
	
	public function getPriceLimit() {
		return $this->priceLimit;
	}
	
	public function setPriceLimit($priceLimit) {
		$this->priceLimit = $priceLimit;
		$this->apiParams["priceLimit"] = $priceLimit;
	}
	
	public function getSaleStatus() {
		return $this->saleStatus;
	}
	
	public function setSaleStatus($saleStatus) {
		$this->saleStatus = $saleStatus;
		$this->apiParams["saleStatus"] = $saleStatus;
	}
	
	public function getCmTitle() {
		return $this->cmTitle;
	}
	
	public function setCmTitle($cmTitle) {
		$this->cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.itemsale.query';
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