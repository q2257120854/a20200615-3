<?php
/**
 * 苏宁开放平台接口 - 获取库存报表
 *
 * @author suning
 * @date   2016-3-9
 */
class StockPileReportQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 商品类型。商品类型。10-常规，11-特价，12-包销，13-工程
	 */
	private $category;
	
	/**
	 * 供应商代码。
	 */
	private $supplierCode;
	
	/**
	 * 商品编码。苏宁商品编码。若苏宁商品编码与供应商商品编码都输入，只取苏宁商品编码。
	 */
	private $productCode;
	
	/**
	 * 供应商商品编码。供应商商品编码。若输入供应商商品编码，供应商代码必填。若苏宁商品编码与供应商商品编码都输入，只取苏宁商品编码。
	 */
	private $supplierProductCode;
	
	
	
	public function getCategory() {
		return $this->category;
	}
	
	public function setCategory($category) {
		$this->category = $category;
		$this->apiParams["category"] = $category;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getSupplierProductCode() {
		return $this->supplierProductCode;
	}
	
	public function setSupplierProductCode($supplierProductCode) {
		$this->supplierProductCode = $supplierProductCode;
		$this->apiParams["supplierProductCode"] = $supplierProductCode;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.stockreport.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->category, 'category');
	}
	
	public function getBizName(){
		return "queryStockReport";
	}
	
}

?>