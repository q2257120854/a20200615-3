<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class ActivityallreleaseCancelRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $allRelease;
	
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
	
	public function getAllRelease() {
		return $this->allRelease;
	}
	
	public function setAllRelease($allRelease) {
		$this->allRelease = $allRelease;
		$this->apiParams["allRelease"] = $allRelease;
	}
	
	public function getRemarks() {
		return $this->remarks;
	}
	
	public function setRemarks($remarks) {
		$this->remarks = $remarks;
		$this->apiParams["remarks"] = $remarks;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.activityallrelease.cancel';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
		RequestCheckUtil::checkNotNull($this->allRelease, 'allRelease');
		RequestCheckUtil::checkNotNull($this->remarks, 'remarks');
	}
	
	public function getBizName(){
		return "cancelActivityallrelease";
	}
	
}

?>