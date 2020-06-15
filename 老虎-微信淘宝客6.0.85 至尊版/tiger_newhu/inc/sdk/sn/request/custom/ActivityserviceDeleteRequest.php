<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class ActivityserviceDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
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
	
	public function getRemarks() {
		return $this->remarks;
	}
	
	public function setRemarks($remarks) {
		$this->remarks = $remarks;
		$this->apiParams["remarks"] = $remarks;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.activityservice.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
	}
	
	public function getBizName(){
		return "deleteActivityservice";
	}
	
}

?>