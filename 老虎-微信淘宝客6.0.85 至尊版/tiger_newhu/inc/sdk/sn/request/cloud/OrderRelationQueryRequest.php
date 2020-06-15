<?php
/**
 * 苏宁开放平台接口 - 订购关系查询
 *
 * @author suning
 * @date   2015-5-27
 */
class OrderRelationQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 查询订单创建开始时间。查询开始时间。格式:yyyy-MM-dd HH:MM:SS若输入则开始时间和结束时间必须同时出现，开始时间和结束时间间隔不大于90天
	 */
	private $startTime;
	
	/**
	 * 查询订单创建结束时间。查询结束时间。格式:yyyy-MM-dd HH:MM:SS若输入则开始时间和结束时间必须同时出现，开始时间和结束时间间隔不大于90天。
	 */
	private $endTime;
	
	/**
	 * 应用ID。应用ID
	 */
	private $appId;
	
	
	
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
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.cloud.orderrelation.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
	}
	
	public function getBizName(){
		return "queryOrderRelation";
	}
	
}

?>