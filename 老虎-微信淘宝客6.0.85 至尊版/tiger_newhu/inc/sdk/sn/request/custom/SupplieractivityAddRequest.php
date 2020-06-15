<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class SupplieractivityAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $amountAdd;
	
	/**
	 * 
	 */
	private $endDate;
	
	/**
	 * 
	 */
	private $remarks;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getAmountAdd() {
		return $this->amountAdd;
	}
	
	public function setAmountAdd($amountAdd) {
		$this->amountAdd = $amountAdd;
		$this->apiParams["amountAdd"] = $amountAdd;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getRemarks() {
		return $this->remarks;
	}
	
	public function setRemarks($remarks) {
		$this->remarks = $remarks;
		$this->apiParams["remarks"] = $remarks;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.supplieractivity.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
	}
	
	public function getBizName(){
		return "addSupplieractivity";
	}
	
}

?>