<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-7-31
 */
class ServiceinformationQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $orderStatus;
	
	/**
	 * 
	 */
	private $startTime;
	
	
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.fontorder.serviceinformation.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderStatus, 'orderStatus');
	}
	
	public function getBizName(){
		return "queryServiceinformation";
	}
	
}

?>