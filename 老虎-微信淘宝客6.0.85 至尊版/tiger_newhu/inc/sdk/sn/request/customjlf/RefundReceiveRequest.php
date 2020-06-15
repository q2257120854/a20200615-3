<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-21
 */
class RefundReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $receiveRefundList;
	
	public function getReceiveRefundList() {
		return $this->receiveRefundList;
	}
	
	public function setReceiveRefundList($receiveRefundList) {
		$this->receiveRefundList = $receiveRefundList;
		$arr = array();
		foreach ($receiveRefundList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["receiveRefundList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.customjlf.refund.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "receiveRefund";
	}
	
}

class ReceiveRefundList {

	private $apiParams = array();
	
	private $cfOrderId;
	
	private $cfOrderItemId;
	
	private $applySource;
	
	private $applyRefundType;
	
	private $reason;
	
	private $reasonName;
	
	private $reasonDetail;
	
	private $retNum;
	
	private $refundType;
	
	private $operatMum;
	
	public function getCfOrderId() {
		return $this->cfOrderId;
	}

	public function setCfOrderId($cfOrderId) {
		$this->cfOrderId = $cfOrderId;
		$this->apiParams["cfOrderId"] = $cfOrderId;
	}
	
	public function getCfOrderItemId() {
		return $this->cfOrderItemId;
	}

	public function setCfOrderItemId($cfOrderItemId) {
		$this->cfOrderItemId = $cfOrderItemId;
		$this->apiParams["cfOrderItemId"] = $cfOrderItemId;
	}
	
	public function getApplySource() {
		return $this->applySource;
	}

	public function setApplySource($applySource) {
		$this->applySource = $applySource;
		$this->apiParams["applySource"] = $applySource;
	}
	
	public function getApplyRefundType() {
		return $this->applyRefundType;
	}

	public function setApplyRefundType($applyRefundType) {
		$this->applyRefundType = $applyRefundType;
		$this->apiParams["applyRefundType"] = $applyRefundType;
	}
	
	public function getReason() {
		return $this->reason;
	}

	public function setReason($reason) {
		$this->reason = $reason;
		$this->apiParams["reason"] = $reason;
	}
	
	public function getReasonName() {
		return $this->reasonName;
	}

	public function setReasonName($reasonName) {
		$this->reasonName = $reasonName;
		$this->apiParams["reasonName"] = $reasonName;
	}
	
	public function getReasonDetail() {
		return $this->reasonDetail;
	}

	public function setReasonDetail($reasonDetail) {
		$this->reasonDetail = $reasonDetail;
		$this->apiParams["reasonDetail"] = $reasonDetail;
	}
	
	public function getRetNum() {
		return $this->retNum;
	}

	public function setRetNum($retNum) {
		$this->retNum = $retNum;
		$this->apiParams["retNum"] = $retNum;
	}
	
	public function getRefundType() {
		return $this->refundType;
	}

	public function setRefundType($refundType) {
		$this->refundType = $refundType;
		$this->apiParams["refundType"] = $refundType;
	}
	
	public function getOperatMum() {
		return $this->operatMum;
	}

	public function setOperatMum($operatMum) {
		$this->operatMum = $operatMum;
		$this->apiParams["operatMum"] = $operatMum;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>