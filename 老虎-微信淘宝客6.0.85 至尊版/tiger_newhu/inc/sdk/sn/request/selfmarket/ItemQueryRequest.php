<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-1-11
 */
class ItemQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $applyStatus;
	
	/**
	 * 
	 */
	private $brandCode;
	
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
	private $contentStatus;
	
	/**
	 * 
	 */
	private $endTime;
	
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
	private $startTime;
	
	/**
	 * 
	 */
	private $supplierCodeAsk;
	
	public function getApplyStatus() {
		return $this->applyStatus;
	}
	
	public function setApplyStatus($applyStatus) {
		$this->applyStatus = $applyStatus;
		$this->apiParams["applyStatus"] = $applyStatus;
	}
	
	public function getBrandCode() {
		return $this->brandCode;
	}
	
	public function setBrandCode($brandCode) {
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}
	
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
	
	public function getContentStatus() {
		return $this->contentStatus;
	}
	
	public function setContentStatus($contentStatus) {
		$this->contentStatus = $contentStatus;
		$this->apiParams["contentStatus"] = $contentStatus;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
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
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getSupplierCodeAsk() {
		return $this->supplierCodeAsk;
	}
	
	public function setSupplierCodeAsk($supplierCodeAsk) {
		$this->supplierCodeAsk = $supplierCodeAsk;
		$this->apiParams["supplierCodeAsk"] = $supplierCodeAsk;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.item.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryItem";
	}
	
}

?>