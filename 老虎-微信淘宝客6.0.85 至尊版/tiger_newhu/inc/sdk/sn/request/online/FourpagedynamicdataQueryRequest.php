<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-22
 */
class FourpagedynamicdataQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityList;
	
	/**
	 * 
	 */
	private $memberNo;
	
	public function getActivityList() {
		return $this->activityList;
	}
	
	public function setActivityList($activityList) {
		$this->activityList = $activityList;
		$arr = array();
		foreach ($activityList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["activityList"] = $arr;
	}
	
	public function getMemberNo() {
		return $this->memberNo;
	}
	
	public function setMemberNo($memberNo) {
		$this->memberNo = $memberNo;
		$this->apiParams["memberNo"] = $memberNo;
	}
	
	public function getApiMethodName(){
		return 'suning.online.fourpagedyna.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->memberNo, 'memberNo');
	}
	
	public function getBizName(){
		return "queryFourpagedynamicdata";
	}
	
}

class ActivityList {

	private $apiParams = array();
	
	private $activityId;
	
	public function getActivityId() {
		return $this->activityId;
	}

	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>