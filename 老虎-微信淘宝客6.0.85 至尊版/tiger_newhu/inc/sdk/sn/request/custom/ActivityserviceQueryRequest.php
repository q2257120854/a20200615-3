<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class ActivityserviceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $lstActivityQuery;
	
	public function getLstActivityQuery() {
		return $this->lstActivityQuery;
	}
	
	public function setLstActivityQuery($lstActivityQuery) {
		$this->lstActivityQuery = $lstActivityQuery;
		$arr = array();
		foreach ($lstActivityQuery as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["lstActivityQuery"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.activityservice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryActivityservice";
	}
	
}

class LstActivityQuery {

	private $apiParams = array();
	
	private $activityCode;
	
	public function getActivityCode() {
		return $this->activityCode;
	}

	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>