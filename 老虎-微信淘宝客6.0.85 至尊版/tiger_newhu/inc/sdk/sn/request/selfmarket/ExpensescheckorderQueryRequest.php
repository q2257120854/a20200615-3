<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-3-6
 */
class ExpensescheckorderQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $applicationCode;
	
	/**
	 * 
	 */
	private $applyCode;
	
	/**
	 * 
	 */
	private $createBegindate;
	
	/**
	 * 
	 */
	private $createEnddate;
	
	/**
	 * 
	 */
	private $modelType;
	
	
	
	/**
	 * 
	 */
	private $status;
	
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
	
	public function getApplyCode() {
		return $this->applyCode;
	}
	
	public function setApplyCode($applyCode) {
		$this->applyCode = $applyCode;
		$this->apiParams["applyCode"] = $applyCode;
	}
	
	public function getCreateBegindate() {
		return $this->createBegindate;
	}
	
	public function setCreateBegindate($createBegindate) {
		$this->createBegindate = $createBegindate;
		$this->apiParams["createBegindate"] = $createBegindate;
	}
	
	public function getCreateEnddate() {
		return $this->createEnddate;
	}
	
	public function setCreateEnddate($createEnddate) {
		$this->createEnddate = $createEnddate;
		$this->apiParams["createEnddate"] = $createEnddate;
	}
	
	public function getModelType() {
		return $this->modelType;
	}
	
	public function setModelType($modelType) {
		$this->modelType = $modelType;
		$this->apiParams["modelType"] = $modelType;
	}
	
	
	
	public function getStatus() {
		return $this->status;
	}
	
	public function setStatus($status) {
		$this->status = $status;
		$this->apiParams["status"] = $status;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.expensescheckorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryExpensescheckorder";
	}
	
}

?>