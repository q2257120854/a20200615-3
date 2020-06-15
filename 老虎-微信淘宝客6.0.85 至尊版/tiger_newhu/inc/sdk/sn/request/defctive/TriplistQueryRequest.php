<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class TriplistQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $tripEndTime;
	
	public function getTripEndTime() {
		return $this->tripEndTime;
	}
	
	public function setTripEndTime($tripEndTime) {
		$this->tripEndTime = $tripEndTime;
		$this->apiParams["tripEndTime"] = $tripEndTime;
	}
	
	public function getApiMethodName(){
		return 'suning.defctive.triplist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->tripEndTime, 'tripEndTime');
	}
	
	public function getBizName(){
		return "queryTriplist";
	}
	
}

?>