<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-17
 */
class SyncrefundorderUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $batchRefundInfoList;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $refundFinishTime;
	
	/**
	 * 
	 */
	private $returnQuestId;
	
	public function getBatchRefundInfoList() {
		return $this->batchRefundInfoList;
	}
	
	public function setBatchRefundInfoList($batchRefundInfoList) {
		$this->batchRefundInfoList = $batchRefundInfoList;
		$arr = array();
		foreach ($batchRefundInfoList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["batchRefundInfoList"] = $arr;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getRefundFinishTime() {
		return $this->refundFinishTime;
	}
	
	public function setRefundFinishTime($refundFinishTime) {
		$this->refundFinishTime = $refundFinishTime;
		$this->apiParams["refundFinishTime"] = $refundFinishTime;
	}
	
	public function getReturnQuestId() {
		return $this->returnQuestId;
	}
	
	public function setReturnQuestId($returnQuestId) {
		$this->returnQuestId = $returnQuestId;
		$this->apiParams["returnQuestId"] = $returnQuestId;
	}
	
	public function getApiMethodName(){
		return 'suning.onlinestore.syncrefundorder.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->refundFinishTime, 'refundFinishTime');
		RequestCheckUtil::checkNotNull($this->returnQuestId, 'returnQuestId');
	}
	
	public function getBizName(){
		return "updateSyncrefundorder";
	}
	
}

class BatchRefundInfoList {

	private $apiParams = array();
	
	private $orderItemId;
	
	private $refundAmount;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getRefundAmount() {
		return $this->refundAmount;
	}

	public function setRefundAmount($refundAmount) {
		$this->refundAmount = $refundAmount;
		$this->apiParams["refundAmount"] = $refundAmount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>