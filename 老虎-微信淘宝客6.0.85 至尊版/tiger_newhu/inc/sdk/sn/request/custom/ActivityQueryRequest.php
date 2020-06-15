<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-29
 */
class ActivityQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $activityName;
	
	
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.custom.activity.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryActivity";
	}
	
}

?>