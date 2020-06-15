<?php
/**
 * 苏宁开放平台接口 - 批量获取订单（三个月内的订单）
 *
 * @author suning
 * @date   2015-2-3
 */
class OrderQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 查询交易结束开始时间。格式：yyyy-MM-dd HH:mm：ss。 开始时间与结束时间间隔不超过30天
	 */
	private $endTime;
	
	/**
	 * 订单状态 10待发货，20已发货，21部分发货，30交易成功 ，40交易关闭
	 */
	private $orderStatus;
	
	/**
	 * 查询交易创建开始时间。格式：yyyy-MM-dd HH:mm：ss
	 */
	private $startTime;
	
	private $userName;
	
	private $userID;
	
	public function getUserID() {
		return $this->userID;
	}
	
	public function setUserID($userID) {
		$this->userID = $userID;
		$this->apiParams["userID"] = $userID;
	}
	
	public function getUserName() {
		return $this->userName;
	}
	
	public function setUserName($userName) {
		$this->userName = $userName;
		$this->apiParams["userName"] = $userName;
	}
	
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
		return 'suning.custom.order.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
	}
	
	public function getBizName(){
		return "orderQuery";
	}
	
}

?>