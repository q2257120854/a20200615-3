<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-29
 */
class EffectflowQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $activityId;
	
	
	
	/**
	 * 
	 */
	private $taskId;
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	
	
	public function getTaskId() {
		return $this->taskId;
	}
	
	public function setTaskId($taskId) {
		$this->taskId = $taskId;
		$this->apiParams["taskId"] = $taskId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.effectflow.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
	}
	
	public function getBizName(){
		return "queryEffectflow";
	}
	
}

?>