<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class TripinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $tripCode;
	
	public function getTripCode() {
		return $this->tripCode;
	}
	
	public function setTripCode($tripCode) {
		$this->tripCode = $tripCode;
		$this->apiParams["tripCode"] = $tripCode;
	}
	
	public function getApiMethodName(){
		return 'suning.defctive.tripinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->tripCode, 'tripCode');
	}
	
	public function getBizName(){
		return "queryTripinfo";
	}
	
}

?>