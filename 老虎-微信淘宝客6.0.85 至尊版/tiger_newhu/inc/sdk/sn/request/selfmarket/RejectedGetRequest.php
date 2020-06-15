<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-2-20
 */
class RejectedGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $applyTime;
	
	/**
	 * 
	 */
	private $omsOrderItemNo;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	/**
	 * 
	 */
	private $workOrderNum;
	
	public function getApplyTime() {
		return $this->applyTime;
	}
	
	public function setApplyTime($applyTime) {
		$this->applyTime = $applyTime;
		$this->apiParams["applyTime"] = $applyTime;
	}
	
	public function getOmsOrderItemNo() {
		return $this->omsOrderItemNo;
	}
	
	public function setOmsOrderItemNo($omsOrderItemNo) {
		$this->omsOrderItemNo = $omsOrderItemNo;
		$this->apiParams["omsOrderItemNo"] = $omsOrderItemNo;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getWorkOrderNum() {
		return $this->workOrderNum;
	}
	
	public function setWorkOrderNum($workOrderNum) {
		$this->workOrderNum = $workOrderNum;
		$this->apiParams["workOrderNum"] = $workOrderNum;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.rejected.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->omsOrderItemNo, 'omsOrderItemNo');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "getRejected";
	}
	
}

?>