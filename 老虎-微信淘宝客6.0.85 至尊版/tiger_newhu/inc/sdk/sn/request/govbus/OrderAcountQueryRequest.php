<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-1-3
 */
class OrderAcountQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $endDate;
	
	/**
	 * 
	 */
	private $orderStatus;
	
	
	
	/**
	 * 
	 */
	private $startDate;
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.orderaccount.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->orderStatus, 'orderStatus');
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
	}
	
	public function getBizName(){
		return "queryOrderAccount";
	}
	
}

?>