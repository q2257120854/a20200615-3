<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-3-7
 */
class PriceExclusiveGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.priceexclusive.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
	}
	
	public function getBizName(){
		return "getPriceExclusive";
	}
	
}

?>