<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-22
 */
class PurmonthplanQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $purchaseMonthPlanNo;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	
	
	public function getPurchaseMonthPlanNo() {
		return $this->purchaseMonthPlanNo;
	}
	
	public function setPurchaseMonthPlanNo($purchaseMonthPlanNo) {
		$this->purchaseMonthPlanNo = $purchaseMonthPlanNo;
		$this->apiParams["purchaseMonthPlanNo"] = $purchaseMonthPlanNo;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.purmonthplan.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->purchaseMonthPlanNo, 'purchaseMonthPlanNo');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryPurmonthplan";
	}
	
}

?>