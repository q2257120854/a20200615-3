<?php
/**
 * 苏宁开放平台接口 - 根据订单修改时间批量查询订单信息
 *
 * @author suning
 * @date   2015-2-3
 */
class OrdQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 查询修改开始时间(修改时间跨度不能大于一天)。格式:yyyy-MM-dd HH:mm:ss
	 */
	private $startTime;
	
	/**
	 * 查询修改结束时间，必须大于修改开始时间(修改时间跨度不能大于一天)，格式:yyyy-MM-dd HH:mm:ss。
	 */
	private $endTime;
	
	/**
	 * 订单行项目状态 10待发货，20已发货，30交易成功
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
		return 'suning.custom.ord.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->orderLineStatus, 'orderLineStatus');
	}
	
	public function getBizName(){
		return "orderQuery";
	}
	
}

?>