<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-10-17
 */
class RefundlogQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $omsItemOrderNo;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getOmsItemOrderNo() {
		return $this->omsItemOrderNo;
	}
	
	public function setOmsItemOrderNo($omsItemOrderNo) {
		$this->omsItemOrderNo = $omsItemOrderNo;
		$this->apiParams["omsItemOrderNo"] = $omsItemOrderNo;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.refundlog.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->omsItemOrderNo, 'omsItemOrderNo');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryRefundlog";
	}
	
}

?>