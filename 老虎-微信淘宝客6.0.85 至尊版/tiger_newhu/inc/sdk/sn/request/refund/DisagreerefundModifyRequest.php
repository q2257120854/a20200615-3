<?php

/**
 * 苏宁开放平台接口 - 退货及退款API - 退款信息处理(不同意)
 *
 * $pack   suning.custom.disagreerefund.modify
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-06-03
 */
class DisagreerefundModifyRequest extends SuningRequest {

	private $refundHead;

	private $refundDetail;

	public function getRefundHead() {
		return $this -> refundHead;
	}

	public function getRefundDetail() {
		return $this -> refundDetail;
	}

	public function setRefundHead($refundHead) {
		$this -> refundHead = $refundHead;
		$this->apiParams["refundHead"] = $refundHead->getApiParams();
	}

	public function setRefundDetail($refundDetail) {
		$this -> refundDetail = $refundDetail;
		$arr = array();
		foreach ($refundDetail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["refundDetail"] = $arr;
	}

	public function getApiMethodName() {
		return 'suning.custom.disagreerefund.modify';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check() {
	}
	
	public function getBizName(){
		return "disAgreeRefund";
	}
}

class RefundHead {
	private $apiParams = array();

	private $orderCode;

	public function getOrderCode() {
		return $this -> orderCode;
	}

	public function setOrderCode($orderCode) {
		$this -> orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
}

/**
 * 退货信息
 */
class RefundDetail {

	private $apiParams = array();
	/**
	 * 苏宁商品编码
	 */
	private $productCode;

	/**
	 * 订单行项目号
	 */
	private $orderLineNumber;

	/**
	 * 状态。不同意退货，固定值C051
	 */
	private $state;

	/**
	 * 备注
	 */
	private $reason;

	public function getProductCode() {
		return $this -> productCode;
	}

	public function getOrderLineNumber() {
		return $this -> orderLineNumber;
	}

	public function getState() {
		return $this -> state;
	}

	public function getReason() {
		return $this -> reason;
	}

	public function setProductCode($productCode) {
		$this -> productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}

	public function setOrderLineNumber($orderLineNumber) {
		$this -> orderLineNumber = $orderLineNumber;
		$this->apiParams["orderLineNumber"] = $orderLineNumber;
	}

	public function setState($state) {
		$this -> state = $state;
		$this->apiParams["state"] = $state;
	}

	public function setReason($reason) {
		$this -> reason = $reason;
		$this->apiParams["reason"] = $reason;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
}
?>