<?php
/**
 * 苏宁开放平台接口 - 按照订单修改时间获取订单号
 *
 * @author suning
 * @date   2016-3-25
 */
class OrderByTimeQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 查询修改开始时间。查询订单修改开始时间。格式：yyyy-MM-dd HH:mm：ss。 开始时间与结束时间间隔不超过1天
	 */
	private $startTime;
	
	/**
	 * 查询修改结束时间。查询订单修改结束时间格式：yyyy-MM-dd HH:mm：ss。 开始时间与结束时间间隔不超过1天
	 */
	private $endTime;
	
	/**
	 * 订单行状态。订单状态  10待发货，20已发货，30交易成功。如果不输入则默认查询所有
	 */
	private $orderLineStatus;
	
	
	
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
	
	public function getOrderLineStatus() {
		return $this->orderLineStatus;
	}
	
	public function setOrderLineStatus($orderLineStatus) {
		$this->orderLineStatus = $orderLineStatus;
		$this->apiParams["orderLineStatus"] = $orderLineStatus;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.supply.orderbytime.query';
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
		return "queryOrderByTime";
	}
	
}

?>