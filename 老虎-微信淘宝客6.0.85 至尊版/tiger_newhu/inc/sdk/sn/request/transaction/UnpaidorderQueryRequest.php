<?php
/**
 * 苏宁开放平台接口 - 未付款订单查询
 *
 * @author suning
 * @date   2015-2-3
 */
class UnpaidorderQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 查询订单提交开始时间(修改时间跨度不能大于一天)。格式:yyyy-MM-dd HH:mm:ss
	 */
	private $startTime;
	
	/**
	 * 查询订单提交结束时间，必须大于修改开始时间(修改时间跨度不能大于一天)，格式:yyyy-MM-dd HH:mm:ss。
	 */
	private $endTime;
	
	/**
	 * 40取消;5未付款,默认为5未付款
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
		return 'suning.custom.unpaidorder.query';
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
		return "unpaidOrder";
	}
	
}

?>