<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-7-27
 */
class ShippiingnoticeConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $attachStatus;
	
	/**
	 * 
	 */
	private $itemId;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $rejectReason;
	
	public function getAttachStatus() {
		return $this->attachStatus;
	}
	
	public function setAttachStatus($attachStatus) {
		$this->attachStatus = $attachStatus;
		$this->apiParams["attachStatus"] = $attachStatus;
	}
	
	public function getItemId() {
		return $this->itemId;
	}
	
	public function setItemId($itemId) {
		$this->itemId = $itemId;
		$this->apiParams["itemId"] = $itemId;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getRejectReason() {
		return $this->rejectReason;
	}
	
	public function setRejectReason($rejectReason) {
		$this->rejectReason = $rejectReason;
		$this->apiParams["rejectReason"] = $rejectReason;
	}
	
	public function getApiMethodName(){
		return 'suning.fontorder.shippiingnotice.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->attachStatus, 'attachStatus');
		RequestCheckUtil::checkNotNull($this->itemId, 'itemId');
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->rejectReason, 'rejectReason');
	}
	
	public function getBizName(){
		return "confirmShippiingnotice";
	}
	
}

?>