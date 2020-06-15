<?php
/**
 * 苏宁开放平台接口 - 定向发券活动批量查询
 *
 * @author suning
 * @date   2015-12-14
 */
class DireCouponQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 活动状态编码。0全部状态；1未开始、2进行中、3已结束
	 */
	private $activityStatus;
	
	/**
	 * 券有效期开始时间。查询开始时间。格式:yyyy-MM-dd HH:MM:SS若输入则开始时间和结束时间必须同时出现，开始时间和结束时间间隔不大于90天, 如果时间不输入，则默认查询当前时间往前三天的数据。券有效期开始时间，券有效期结束时间成对出现
	 */
	private $startTime;
	
	/**
	 * 券有效期结束时间。查询结束时间。格式:yyyy-MM-dd HH:MM:SS若输入则开始时间和结束时间必须同时出现，开始时间和结束时间间隔不大于90天, 如果时间不输入，则默认查询当前时间往前三天的数据。券有效期开始时间，券有效期结束时间成对出现
	 */
	private $endTime;
	
	
	
	public function getActivityStatus() {
		return $this->activityStatus;
	}
	
	public function setActivityStatus($activityStatus) {
		$this->activityStatus = $activityStatus;
		$this->apiParams["activityStatus"] = $activityStatus;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.custom.direcoupon.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryDireCoupon";
	}
	
}

?>