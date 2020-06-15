<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-4-23
 */
class PurweekplanQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $purchaseWeekPlanNo;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	
	
	public function getPurchaseWeekPlanNo() {
		return $this->purchaseWeekPlanNo;
	}
	
	public function setPurchaseWeekPlanNo($purchaseWeekPlanNo) {
		$this->purchaseWeekPlanNo = $purchaseWeekPlanNo;
		$this->apiParams["purchaseWeekPlanNo"] = $purchaseWeekPlanNo;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.purweekplan.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->purchaseWeekPlanNo, 'purchaseWeekPlanNo');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryPurweekplan";
	}
	
}

?>