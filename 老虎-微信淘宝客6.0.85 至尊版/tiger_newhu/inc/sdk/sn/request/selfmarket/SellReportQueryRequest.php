<?php
/**
 * 苏宁开放平台接口 - 获取销售报表
 *
 * @author suning
 * @date   2016-3-9
 */
class SellReportQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 销售日期开始时间。查询销售日期开始时间。格式：yyyy-MM-dd
	 */
	private $createTimeStart;
	
	/**
	 * 销售日期结束时间。查询销售日期结束时间。格式：yyyy-MM-dd
	 */
	private $createTimeEnd;
	
	/**
	 * 供应商代码。
	 */
	private $supplierCode;
	
	/**
	 * 商品编码。苏宁商品编码。若苏宁商品编码与供应商商品编码都输入，只取苏宁商品编码。
	 */
	private $productCode;
	
	/**
	 * 供应商商品编码。供应商商品编码若填写，供应商编码必填。若输入供应商商品编码，供应商代码必填。若苏宁商品编码与供应商商品编码都输入，只取苏宁商品编码。
	 */
	private $supplierProductCode;
	
	
	
	public function getCreateTimeStart() {
		return $this->createTimeStart;
	}
	
	public function setCreateTimeStart($createTimeStart) {
		$this->createTimeStart = $createTimeStart;
		$this->apiParams["createTimeStart"] = $createTimeStart;
	}
	
	public function getCreateTimeEnd() {
		return $this->createTimeEnd;
	}
	
	public function setCreateTimeEnd($createTimeEnd) {
		$this->createTimeEnd = $createTimeEnd;
		$this->apiParams["createTimeEnd"] = $createTimeEnd;
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
		return 'suning.salesreport.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->createTimeStart, 'createTimeStart');
		RequestCheckUtil::checkNotNull($this->createTimeEnd, 'createTimeEnd');
	}
	
	public function getBizName(){
		return "querySalesReport";
	}
	
}

?>