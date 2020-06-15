<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-15
 */
class OrderDeliverAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $expressCompCode;
	
	/**
	 * 
	 */
	private $expressNo;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $sender;
	
	/**
	 * 
	 */
	private $senderTel;
	
	/**
	 * 
	 */
	private $sign;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getExpressCompCode() {
		return $this->expressCompCode;
	}
	
	public function setExpressCompCode($expressCompCode) {
		$this->expressCompCode = $expressCompCode;
		$this->apiParams["expressCompCode"] = $expressCompCode;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}
	
	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getSender() {
		return $this->sender;
	}
	
	public function setSender($sender) {
		$this->sender = $sender;
		$this->apiParams["sender"] = $sender;
	}
	
	public function getSenderTel() {
		return $this->senderTel;
	}
	
	public function setSenderTel($senderTel) {
		$this->senderTel = $senderTel;
		$this->apiParams["senderTel"] = $senderTel;
	}
	
	public function getSign() {
		return $this->sign;
	}
	
	public function setSign($sign) {
		$this->sign = $sign;
		$this->apiParams["sign"] = $sign;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.orderdeliver.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "addOrderDeliver";
	}
	
}

?>