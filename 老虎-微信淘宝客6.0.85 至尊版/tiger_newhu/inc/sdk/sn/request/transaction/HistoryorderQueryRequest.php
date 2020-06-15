<?php
/**
 * 苏宁开放平台接口 - 批量获取订单（三个月前的历史订单）
 *
 * @author suning
 * @date   2015-2-3
 */
class HistoryorderQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 查询交易创建开始时间。格式：yyyy-MM-dd HH:mm：ss
	 */
	private $startTime;
	
	/**
	 * 查询交易创建结束时间。格式：yyyy-MM-dd HH:mm：ss
	 */
	private $endTime;
	
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
		return 'suning.custom.historyorder.query';
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
		return "historyOrderQuery";
	}
	
}

?>