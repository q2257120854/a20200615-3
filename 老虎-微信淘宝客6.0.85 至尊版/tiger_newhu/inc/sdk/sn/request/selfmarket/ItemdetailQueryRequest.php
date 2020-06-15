<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-3-6
 */
class ItemdetailQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $applyCode;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $supplierCodeAsk;
	
	public function getApplyCode() {
		return $this->applyCode;
	}
	
	public function setApplyCode($applyCode) {
		$this->applyCode = $applyCode;
		$this->apiParams["applyCode"] = $applyCode;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getSupplierCodeAsk() {
		return $this->supplierCodeAsk;
	}
	
	public function setSupplierCodeAsk($supplierCodeAsk) {
		$this->supplierCodeAsk = $supplierCodeAsk;
		$this->apiParams["supplierCodeAsk"] = $supplierCodeAsk;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.itemdetail.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryItemdetail";
	}
	
}

?>