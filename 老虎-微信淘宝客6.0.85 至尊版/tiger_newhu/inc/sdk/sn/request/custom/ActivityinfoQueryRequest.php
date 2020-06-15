<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-12
 */
class ActivityinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $viewNo;
	
	/**
	 * 
	 */
	private $viewSize;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getViewNo() {
		return $this->viewNo;
	}
	
	public function setViewNo($viewNo) {
		$this->viewNo = $viewNo;
		$this->apiParams["viewNo"] = $viewNo;
	}
	
	public function getViewSize() {
		return $this->viewSize;
	}
	
	public function setViewSize($viewSize) {
		$this->viewSize = $viewSize;
		$this->apiParams["viewSize"] = $viewSize;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.activityinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryActivityinfo";
	}
	
}

?>