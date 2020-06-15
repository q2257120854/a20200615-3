<?php
/**
 * 苏宁开放平台接口 - 顾客投诉记录批量查询
 *
 * @author suning
 * @date   2014-9-25
 */
class ComplaintQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 投诉状态
	 */
	private $complaintStatus;
	
	/**
	 * 查询开始时间
	 */
	private $startTime;
	
	/**
	 * 查询结束时间
	 */
	private $endTime;
	
	/**
	 * 页码
	 */
	
	/**
	 * 每页条数
	 */
	
	public function getComplaintStatus() {
		return $this->complaintStatus;
	}
	
	public function setComplaintStatus($complaintStatus) {
		$this->complaintStatus = $complaintStatus;
		$this->apiParams["complaintStatus"] = $complaintStatus;
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
		return 'suning.custom.complaint.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryComplaint";
	}
	
}

?>