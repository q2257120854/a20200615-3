<?php
/**
 * 苏宁开放平台接口 - 订单状态查询
 *
 * @author suning
 * @date   2015-11-18
 */
class OrderStatusQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 订单来源。201
	 */
	private $orderSource;
	
	/**
	 * 开始时间。2014-01-14 12:20:00
	 */
	private $startTime;
	
	/**
	 * 结束时间。2014-01-14 12:20:00
	 */
	private $endTime;
	
	/**
	 * 查询类型。2
	 */
	private $queryType;
	
	
	
	public function getOrderSource() {
		return $this->orderSource;
	}
	
	public function setOrderSource($orderSource) {
		$this->orderSource = $orderSource;
		$this->apiParams["orderSource"] = $orderSource;
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
	
	public function getQueryType() {
		return $this->queryType;
	}
	
	public function setQueryType($queryType) {
		$this->queryType = $queryType;
		$this->apiParams["queryType"] = $queryType;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.fourps.orderstatus.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderSource, 'orderSource');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->queryType, 'queryType');
	}
	
	public function getBizName(){
		return "queryOrderStatus";
	}
	
}

?>