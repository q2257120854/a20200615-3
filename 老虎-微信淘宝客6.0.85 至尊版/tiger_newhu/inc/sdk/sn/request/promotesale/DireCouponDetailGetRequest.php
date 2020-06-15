<?php
/**
 * 苏宁开放平台接口 - 定向发券活动详情查询
 *
 * @author suning
 * @date   2015-12-14
 */
class DireCouponDetailGetRequest  extends SuningRequest{
	
	/**
	 * 促销活动ID。
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
		return 'suning.custom.direcoupondetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
	}
	
	public function getBizName(){
		return "getDireCouponDetail";
	}
	
}

?>