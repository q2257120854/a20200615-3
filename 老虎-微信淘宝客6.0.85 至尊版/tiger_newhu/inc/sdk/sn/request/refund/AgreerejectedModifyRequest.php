<?php

/**
 * 苏宁开放平台接口 - 退货及退款API - 退货信息处理(同意)
 *
 * $pack   suning.custom.agreerejected.modify
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-06-03
 */
class AgreerejectedModifyRequest extends SuningRequest {

	private $rejectedHead;

	private $rejectedDetail;

	public function getRejectedHead() {
		return $this -> rejectedHead;
	}

	public function getRejectedDetail() {
		return $this -> rejectedDetail;
	}

	public function setRejectedHead($rejectedHead) {
		$this -> rejectedHead = $rejectedHead;
		$this->apiParams["rejectedHead"] = $rejectedHead->getApiParams();
	}

	public function setRejectedDetail($rejectedDetail) {
		$this -> rejectedDetail = $rejectedDetail;
		$arr = array();
		foreach ($rejectedDetail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["rejectedDetail"] = $arr;
	}

	public function getApiMethodName() {
		return 'suning.custom.agreerejected.modify';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check() {
	}
	
	public function getBizName(){
		return "agreeRejected";
	}
}

class RejectedHead {
	private $apiParams = array();

	/**
	 * 苏宁B2C订单号
	 */
	private $orderCode;

	/**
	 * 退货地址代码
	 */
	private $address;

	/**
	 * 收货人姓名
	 */
	private $name;

	/**
	 * 联系方式,11位
	 */
	private $telephone;

	/**
	 * 邮编
	 */
	private $postalCode;

	public function getOrderCode() {
		return $this -> orderCode;
	}

	public function getAddress() {
		return $this -> address;
	}

	public function getName() {
		return $this -> name;
	}

	public function getTelephone() {
		return $this -> telephone;
	}

	public function getPostalCode() {
		return $this -> postalCode;
	}

	public function setOrderCode($orderCode) {
		$this -> orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}

	public function setAddress($address) {
		$this -> address = $address;
		$this->apiParams["address"] = $address;
	}

	public function setName($name) {
		$this -> name = $name;
		$this->apiParams["name"] = $name;
	}

	public function setTelephone($telephone) {
		$this -> telephone = $telephone;
		$this->apiParams["telephone"] = $telephone;
	}

	public function setPostalCode($postalCode) {
		$this -> postalCode = $postalCode;
		$this->apiParams["postalCode"] = $postalCode;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
}

/**
 * 退货详情
 */
class RejectedDetail {
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
	 * 状态。同意退货，固定值C040
	 */
	private $state;

	/**
	 * 备注
	 */
	private $reason;

	public function setProductCode($productCode) {
		$this -> productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}

	public function getProductCode() {
		return $this -> productCode;
	}

	public function setOrderLineNumber($orderLineNumber) {
		$this -> orderLineNumber = $orderLineNumber;
		$this->apiParams["orderLineNumber"] = $orderLineNumber;
	}

	public function getOrderLineNumber() {
		return $this -> orderLineNumber;
	}

	public function setState($state) {
		$this -> state = $state;
		$this->apiParams["state"] = $state;
	}

	public function getState() {
		return $this -> state;
	}

	public function setReason($reason) {
		$this -> reason = $reason;
		$this->apiParams["reason"] = $reason;
	}

	public function getReason() {
		return $this -> reason;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
}
?>