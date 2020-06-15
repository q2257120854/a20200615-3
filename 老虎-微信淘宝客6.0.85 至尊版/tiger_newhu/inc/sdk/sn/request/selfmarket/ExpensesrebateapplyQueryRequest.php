<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-4-17
 */
class ExpensesrebateapplyQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $applicationCode;
	
	/**
	 * 
	 */
	private $applyBegindate;
	
	/**
	 * 
	 */
	private $applyEnddate;
	
	/**
	 * 
	 */
	private $applyModel;
	
	/**
	 * 
	 */
	private $checkedBegindate;
	
	/**
	 * 
	 */
	private $checkedEnddate;
	
	
	
	/**
	 * 
	 */
	private $snCode;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getApplicationCode() {
		return $this->applicationCode;
	}
	
	public function setApplicationCode($applicationCode) {
		$this->applicationCode = $applicationCode;
		$this->apiParams["applicationCode"] = $applicationCode;
	}
	
	public function getApplyBegindate() {
		return $this->applyBegindate;
	}
	
	public function setApplyBegindate($applyBegindate) {
		$this->applyBegindate = $applyBegindate;
		$this->apiParams["applyBegindate"] = $applyBegindate;
	}
	
	public function getApplyEnddate() {
		return $this->applyEnddate;
	}
	
	public function setApplyEnddate($applyEnddate) {
		$this->applyEnddate = $applyEnddate;
		$this->apiParams["applyEnddate"] = $applyEnddate;
	}
	
	public function getApplyModel() {
		return $this->applyModel;
	}
	
	public function setApplyModel($applyModel) {
		$this->applyModel = $applyModel;
		$this->apiParams["applyModel"] = $applyModel;
	}
	
	public function getCheckedBegindate() {
		return $this->checkedBegindate;
	}
	
	public function setCheckedBegindate($checkedBegindate) {
		$this->checkedBegindate = $checkedBegindate;
		$this->apiParams["checkedBegindate"] = $checkedBegindate;
	}
	
	public function getCheckedEnddate() {
		return $this->checkedEnddate;
	}
	
	public function setCheckedEnddate($checkedEnddate) {
		$this->checkedEnddate = $checkedEnddate;
		$this->apiParams["checkedEnddate"] = $checkedEnddate;
	}
	
	
	
	public function getSnCode() {
		return $this->snCode;
	}
	
	public function setSnCode($snCode) {
		$this->snCode = $snCode;
		$this->apiParams["snCode"] = $snCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.expensesrebateapply.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryExpensesRebateapply";
	}
	
}

?>