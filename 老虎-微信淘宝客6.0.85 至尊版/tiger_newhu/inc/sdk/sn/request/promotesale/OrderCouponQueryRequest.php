<?php
/**
 * 苏宁开放平台接口 - 订单返券活动批量查询
 *
 * @author suning
 * @date   2016-1-11
 */
class OrderCouponQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 活动开始时间。查询开始时间。格式:yyyy-MM-dd HH:MM:SS若输入则开始时间和结束时间必须同时出现，开始时间和结束时间间隔不大于30天, 如果时间不输入，则默认查询当前时间往前三天的数据。活动开始时间，结束时间成对出现
	 */
	private $startTime;
	
	/**
	 * 活动结束时间。查询结束时间。格式:yyyy-MM-dd HH:MM:SS若输入则开始时间和结束时间必须同时出现，开始时间和结束时间间隔不大于30天, 如果时间不输入，则默认查询当前时间往前三天的数据。活动开始时间，结束时间成对出现
	 */
	private $endTime;
	
	/**
	 * 活动状态编码。0全部状态；1草稿、2处理中、3待开始、4进行中、5已结束、6已暂停、7已终止、8未生效、9编辑失败
	 */
	private $status;
	
	
	
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
	
	public function getStatus() {
		return $this->status;
	}
	
	public function setStatus($status) {
		$this->status = $status;
		$this->apiParams["status"] = $status;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.ordercoupon.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryOrderCoupon";
	}
	
}

?>