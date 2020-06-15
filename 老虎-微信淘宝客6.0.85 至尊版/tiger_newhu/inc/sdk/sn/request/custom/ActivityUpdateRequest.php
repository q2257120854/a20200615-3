<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-28
 */
class ActivityUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityDes;
	
	/**
	 * 
	 */
	private $activityId;
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $expectFlag;
	
	/**
	 * 
	 */
	private $expectTime;
	
	/**
	 * 
	 */
	private $strategyInstId;
	
	/**
	 * 
	 */
	private $taskId;
	
	public function getActivityDes() {
		return $this->activityDes;
	}
	
	public function setActivityDes($activityDes) {
		$this->activityDes = $activityDes;
		$this->apiParams["activityDes"] = $activityDes;
	}
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getExpectFlag() {
		return $this->expectFlag;
	}
	
	public function setExpectFlag($expectFlag) {
		$this->expectFlag = $expectFlag;
		$this->apiParams["expectFlag"] = $expectFlag;
	}
	
	public function getExpectTime() {
		return $this->expectTime;
	}
	
	public function setExpectTime($expectTime) {
		$this->expectTime = $expectTime;
		$this->apiParams["expectTime"] = $expectTime;
	}
	
	public function getStrategyInstId() {
		return $this->strategyInstId;
	}
	
	public function setStrategyInstId($strategyInstId) {
		$this->strategyInstId = $strategyInstId;
		$this->apiParams["strategyInstId"] = $strategyInstId;
	}
	
	public function getTaskId() {
		return $this->taskId;
	}
	
	public function setTaskId($taskId) {
		$this->taskId = $taskId;
		$this->apiParams["taskId"] = $taskId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.activity.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->expectFlag, 'expectFlag');
		RequestCheckUtil::checkNotNull($this->strategyInstId, 'strategyInstId');
		RequestCheckUtil::checkNotNull($this->taskId, 'taskId');
	}
	
	public function getBizName(){
		return "updateActivity";
	}
	
}

?>