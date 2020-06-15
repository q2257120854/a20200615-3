<?php
/**
 * 苏宁开放平台接口 - X元N件活动详情查询
 *
 * @author suning
 * @date   2015-7-27
 */
class XNDetailGetRequest  extends SuningRequest{
	
	/**
	 * 促销活动ID。促销活动的唯一标识
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
		return 'suning.custom.xndetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
	}
	
	public function getBizName(){
		return "getXNDetail";
	}
	
}

?>