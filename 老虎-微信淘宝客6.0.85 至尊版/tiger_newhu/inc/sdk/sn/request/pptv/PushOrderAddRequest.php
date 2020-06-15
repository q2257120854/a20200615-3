<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-4-5
 */
class PushOrderAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $buyerNick;
	
	/**
	 * 
	 */
	private $deliveryArea;
	
	/**
	 * 
	 */
	private $hopeArrivalTime;
	
	/**
	 * 
	 */
	private $invoiceFlag;
	
	/**
	 * 
	 */
	private $invoiceName;
	
	/**
	 * 
	 */
	private $invoiceType;
	
	/**
	 * 
	 */
	private $order;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $postFee;
	
	/**
	 * 
	 */
	private $receiverAddress;
	
	/**
	 * 
	 */
	private $receiverCity;
	
	/**
	 * 
	 */
	private $receiverDistrict;
	
	/**
	 * 
	 */
	private $receiverMobile;
	
	/**
	 * 
	 */
	private $receiverName;
	
	/**
	 * 
	 */
	private $receiverPhone;
	
	/**
	 * 
	 */
	private $receiverState;
	
	/**
	 * 
	 */
	private $receiverTown;
	
	/**
	 * 
	 */
	private $receiverZip;
	
	/**
	 * 
	 */
	private $sellerNick;
	
	public function getBuyerNick() {
		return $this->buyerNick;
	}
	
	public function setBuyerNick($buyerNick) {
		$this->buyerNick = $buyerNick;
		$this->apiParams["buyerNick"] = $buyerNick;
	}
	
	public function getDeliveryArea() {
		return $this->deliveryArea;
	}
	
	public function setDeliveryArea($deliveryArea) {
		$this->deliveryArea = $deliveryArea;
		$this->apiParams["deliveryArea"] = $deliveryArea;
	}
	
	public function getHopeArrivalTime() {
		return $this->hopeArrivalTime;
	}
	
	public function setHopeArrivalTime($hopeArrivalTime) {
		$this->hopeArrivalTime = $hopeArrivalTime;
		$this->apiParams["hopeArrivalTime"] = $hopeArrivalTime;
	}
	
	public function getInvoiceFlag() {
		return $this->invoiceFlag;
	}
	
	public function setInvoiceFlag($invoiceFlag) {
		$this->invoiceFlag = $invoiceFlag;
		$this->apiParams["invoiceFlag"] = $invoiceFlag;
	}
	
	public function getInvoiceName() {
		return $this->invoiceName;
	}
	
	public function setInvoiceName($invoiceName) {
		$this->invoiceName = $invoiceName;
		$this->apiParams["invoiceName"] = $invoiceName;
	}
	
	public function getInvoiceType() {
		return $this->invoiceType;
	}
	
	public function setInvoiceType($invoiceType) {
		$this->invoiceType = $invoiceType;
		$this->apiParams["invoiceType"] = $invoiceType;
	}
	
	public function getOrder() {
		return $this->order;
	}
	
	public function setOrder($order) {
		$this->order = $order;
		$arr = array();
		foreach ($order as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["order"] = $arr;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getPostFee() {
		return $this->postFee;
	}
	
	public function setPostFee($postFee) {
		$this->postFee = $postFee;
		$this->apiParams["postFee"] = $postFee;
	}
	
	public function getReceiverAddress() {
		return $this->receiverAddress;
	}
	
	public function setReceiverAddress($receiverAddress) {
		$this->receiverAddress = $receiverAddress;
		$this->apiParams["receiverAddress"] = $receiverAddress;
	}
	
	public function getReceiverCity() {
		return $this->receiverCity;
	}
	
	public function setReceiverCity($receiverCity) {
		$this->receiverCity = $receiverCity;
		$this->apiParams["receiverCity"] = $receiverCity;
	}
	
	public function getReceiverDistrict() {
		return $this->receiverDistrict;
	}
	
	public function setReceiverDistrict($receiverDistrict) {
		$this->receiverDistrict = $receiverDistrict;
		$this->apiParams["receiverDistrict"] = $receiverDistrict;
	}
	
	public function getReceiverMobile() {
		return $this->receiverMobile;
	}
	
	public function setReceiverMobile($receiverMobile) {
		$this->receiverMobile = $receiverMobile;
		$this->apiParams["receiverMobile"] = $receiverMobile;
	}
	
	public function getReceiverName() {
		return $this->receiverName;
	}
	
	public function setReceiverName($receiverName) {
		$this->receiverName = $receiverName;
		$this->apiParams["receiverName"] = $receiverName;
	}
	
	public function getReceiverPhone() {
		return $this->receiverPhone;
	}
	
	public function setReceiverPhone($receiverPhone) {
		$this->receiverPhone = $receiverPhone;
		$this->apiParams["receiverPhone"] = $receiverPhone;
	}
	
	public function getReceiverState() {
		return $this->receiverState;
	}
	
	public function setReceiverState($receiverState) {
		$this->receiverState = $receiverState;
		$this->apiParams["receiverState"] = $receiverState;
	}
	
	public function getReceiverTown() {
		return $this->receiverTown;
	}
	
	public function setReceiverTown($receiverTown) {
		$this->receiverTown = $receiverTown;
		$this->apiParams["receiverTown"] = $receiverTown;
	}
	
	public function getReceiverZip() {
		return $this->receiverZip;
	}
	
	public function setReceiverZip($receiverZip) {
		$this->receiverZip = $receiverZip;
		$this->apiParams["receiverZip"] = $receiverZip;
	}
	
	public function getSellerNick() {
		return $this->sellerNick;
	}
	
	public function setSellerNick($sellerNick) {
		$this->sellerNick = $sellerNick;
		$this->apiParams["sellerNick"] = $sellerNick;
	}
	
	public function getApiMethodName(){
		return 'suning.pptv.pushorder.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->buyerNick, 'buyerNick');
		RequestCheckUtil::checkNotNull($this->deliveryArea, 'deliveryArea');
		RequestCheckUtil::checkNotNull($this->invoiceFlag, 'invoiceFlag');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->receiverDistrict, 'receiverDistrict');
		RequestCheckUtil::checkNotNull($this->receiverName, 'receiverName');
		RequestCheckUtil::checkNotNull($this->receiverState, 'receiverState');
		RequestCheckUtil::checkNotNull($this->receiverTown, 'receiverTown');
		RequestCheckUtil::checkNotNull($this->sellerNick, 'sellerNick');
	}
	
	public function getBizName(){
		return "addPushOrder";
	}
	
}

class Order {

	private $apiParams = array();
	
	private $created;
	
	private $discountFee;
	
	private $num;
	
	private $numIId;
	
	private $orderitemId;
	
	private $payment;
	
	private $payTime;
	
	private $payTypeAmount;
	
	private $payTypeCode;
	
	private $payTypeDesc;
	
	private $price;
	
	private $storeCode;
	
	private $totalFee;
	
	public function getCreated() {
		return $this->created;
	}

	public function setCreated($created) {
		$this->created = $created;
		$this->apiParams["created"] = $created;
	}
	
	public function getDiscountFee() {
		return $this->discountFee;
	}

	public function setDiscountFee($discountFee) {
		$this->discountFee = $discountFee;
		$this->apiParams["discountFee"] = $discountFee;
	}
	
	public function getNum() {
		return $this->num;
	}

	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
	}
	
	public function getNumIId() {
		return $this->numIId;
	}

	public function setNumIId($numIId) {
		$this->numIId = $numIId;
		$this->apiParams["numIId"] = $numIId;
	}
	
	public function getOrderitemId() {
		return $this->orderitemId;
	}

	public function setOrderitemId($orderitemId) {
		$this->orderitemId = $orderitemId;
		$this->apiParams["orderitemId"] = $orderitemId;
	}
	
	public function getPayment() {
		return $this->payment;
	}

	public function setPayment($payment) {
		$this->payment = $payment;
		$this->apiParams["payment"] = $payment;
	}
	
	public function getPayTime() {
		return $this->payTime;
	}

	public function setPayTime($payTime) {
		$this->payTime = $payTime;
		$this->apiParams["payTime"] = $payTime;
	}
	
	public function getPayTypeAmount() {
		return $this->payTypeAmount;
	}

	public function setPayTypeAmount($payTypeAmount) {
		$this->payTypeAmount = $payTypeAmount;
		$this->apiParams["payTypeAmount"] = $payTypeAmount;
	}
	
	public function getPayTypeCode() {
		return $this->payTypeCode;
	}

	public function setPayTypeCode($payTypeCode) {
		$this->payTypeCode = $payTypeCode;
		$this->apiParams["payTypeCode"] = $payTypeCode;
	}
	
	public function getPayTypeDesc() {
		return $this->payTypeDesc;
	}

	public function setPayTypeDesc($payTypeDesc) {
		$this->payTypeDesc = $payTypeDesc;
		$this->apiParams["payTypeDesc"] = $payTypeDesc;
	}
	
	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}

	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getTotalFee() {
		return $this->totalFee;
	}

	public function setTotalFee($totalFee) {
		$this->totalFee = $totalFee;
		$this->apiParams["totalFee"] = $totalFee;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>