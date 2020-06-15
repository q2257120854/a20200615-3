<?php
/**
 * 苏宁开放平台接口 - 苏宁顾客投诉记录单笔查询
 *
 * @author suning
 * @date   2014-9-25
 */
class ComplaintGetRequest  extends SuningRequest{
	
	/**
	 * 苏宁投诉编码
	 */
	private $complaintCode;
	
	/**
	 * 苏宁订单编号
	 */
	private $orderCode;
	
	public function getComplaintCode() {
		return $this->complaintCode;
	}
	
	public function setComplaintCode($complaintCode) {
		$this->complaintCode = $complaintCode;
		$this->apiParams["complaintCode"] = $complaintCode;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.complaint.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getComplaint";
	}
	
}

?>