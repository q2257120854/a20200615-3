<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-1-12
 */
class ElectronicsheetAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderItemNo;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getOrderItemNo() {
		return $this->orderItemNo;
	}
	
	public function setOrderItemNo($orderItemNo) {
		$this->orderItemNo = $orderItemNo;
		$this->apiParams["orderItemNo"] = $orderItemNo;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.saleoff.electronicsheet.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderItemNo, 'orderItemNo');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "addElectronicsheet";
	}
	
}

?>