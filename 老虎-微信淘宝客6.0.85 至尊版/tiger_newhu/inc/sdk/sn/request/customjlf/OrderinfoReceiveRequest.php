<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-23
 */
class OrderinfoReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cfOrderId;
	
	/**
	 * 
	 */
	private $orderDate;
	
	/**
	 * 
	 */
	private $orderTime;
	
	/**
	 * 
	 */
	private $orderSource;
	
	/**
	 * 
	 */
	private $salePlatform;
	
	/**
	 * 
	 */
	private $orderChannel;
	
	/**
	 * 
	 */
	private $orderMemo;
	
	/**
	 * 
	 */
	private $orderItemQty;
	
	/**
	 * 
	 */
	private $cfTradePays;
	
	/**
	 * 
	 */
	private $payItemQty;
	
	/**
	 * 
	 */
	private $orderSaleTotalAmt;
	
	/**
	 * 
	 */
	private $realPayAmt;
	
	/**
	 * 
	 */
	private $totalSrvFee;
	
	/**
	 * 
	 */
	private $totalTax;
	
	/**
	 * 
	 */
	private $totalShippingFee;
	
	/**
	 * 
	 */
	private $orderSerialNumber;
	
	/**
	 * 
	 */
	private $cfOrders;
	
	public function getCfOrderId() {
		return $this->cfOrderId;
	}
	
	public function setCfOrderId($cfOrderId) {
		$this->cfOrderId = $cfOrderId;
		$this->apiParams["cfOrderId"] = $cfOrderId;
	}
	
	public function getOrderDate() {
		return $this->orderDate;
	}
	
	public function setOrderDate($orderDate) {
		$this->orderDate = $orderDate;
		$this->apiParams["orderDate"] = $orderDate;
	}
	
	public function getOrderTime() {
		return $this->orderTime;
	}
	
	public function setOrderTime($orderTime) {
		$this->orderTime = $orderTime;
		$this->apiParams["orderTime"] = $orderTime;
	}
	
	public function getOrderSource() {
		return $this->orderSource;
	}
	
	public function setOrderSource($orderSource) {
		$this->orderSource = $orderSource;
		$this->apiParams["orderSource"] = $orderSource;
	}
	
	public function getSalePlatform() {
		return $this->salePlatform;
	}
	
	public function setSalePlatform($salePlatform) {
		$this->salePlatform = $salePlatform;
		$this->apiParams["salePlatform"] = $salePlatform;
	}
	
	public function getOrderChannel() {
		return $this->orderChannel;
	}
	
	public function setOrderChannel($orderChannel) {
		$this->orderChannel = $orderChannel;
		$this->apiParams["orderChannel"] = $orderChannel;
	}
	
	public function getOrderMemo() {
		return $this->orderMemo;
	}
	
	public function setOrderMemo($orderMemo) {
		$this->orderMemo = $orderMemo;
		$this->apiParams["orderMemo"] = $orderMemo;
	}
	
	public function getOrderItemQty() {
		return $this->orderItemQty;
	}
	
	public function setOrderItemQty($orderItemQty) {
		$this->orderItemQty = $orderItemQty;
		$this->apiParams["orderItemQty"] = $orderItemQty;
	}
	
	public function getCfTradePays() {
		return $this->cfTradePays;
	}
	
	public function setCfTradePays($cfTradePays) {
		$this->cfTradePays = $cfTradePays;
		$arr = array();
		foreach ($cfTradePays as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cfTradePays"] = $arr;
	}
	
	public function getPayItemQty() {
		return $this->payItemQty;
	}
	
	public function setPayItemQty($payItemQty) {
		$this->payItemQty = $payItemQty;
		$this->apiParams["payItemQty"] = $payItemQty;
	}
	
	public function getOrderSaleTotalAmt() {
		return $this->orderSaleTotalAmt;
	}
	
	public function setOrderSaleTotalAmt($orderSaleTotalAmt) {
		$this->orderSaleTotalAmt = $orderSaleTotalAmt;
		$this->apiParams["orderSaleTotalAmt"] = $orderSaleTotalAmt;
	}
	
	public function getRealPayAmt() {
		return $this->realPayAmt;
	}
	
	public function setRealPayAmt($realPayAmt) {
		$this->realPayAmt = $realPayAmt;
		$this->apiParams["realPayAmt"] = $realPayAmt;
	}
	
	public function getTotalSrvFee() {
		return $this->totalSrvFee;
	}
	
	public function setTotalSrvFee($totalSrvFee) {
		$this->totalSrvFee = $totalSrvFee;
		$this->apiParams["totalSrvFee"] = $totalSrvFee;
	}
	
	public function getTotalTax() {
		return $this->totalTax;
	}
	
	public function setTotalTax($totalTax) {
		$this->totalTax = $totalTax;
		$this->apiParams["totalTax"] = $totalTax;
	}
	
	public function getTotalShippingFee() {
		return $this->totalShippingFee;
	}
	
	public function setTotalShippingFee($totalShippingFee) {
		$this->totalShippingFee = $totalShippingFee;
		$this->apiParams["totalShippingFee"] = $totalShippingFee;
	}
	
	public function getOrderSerialNumber() {
		return $this->orderSerialNumber;
	}
	
	public function setOrderSerialNumber($orderSerialNumber) {
		$this->orderSerialNumber = $orderSerialNumber;
		$this->apiParams["orderSerialNumber"] = $orderSerialNumber;
	}
	
	public function getCfOrders() {
		return $this->cfOrders;
	}
	
	public function setCfOrders($cfOrders) {
		$this->cfOrders = $cfOrders;
		$arr = array();
		foreach ($cfOrders as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cfOrders"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.customjlf.orderinfo.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cfOrderId, 'cfOrderId');
		RequestCheckUtil::checkNotNull($this->orderDate, 'orderDate');
		RequestCheckUtil::checkNotNull($this->orderTime, 'orderTime');
		RequestCheckUtil::checkNotNull($this->orderSource, 'orderSource');
		RequestCheckUtil::checkNotNull($this->salePlatform, 'salePlatform');
		RequestCheckUtil::checkNotNull($this->orderChannel, 'orderChannel');
		RequestCheckUtil::checkNotNull($this->orderItemQty, 'orderItemQty');
		RequestCheckUtil::checkNotNull($this->payItemQty, 'payItemQty');
		RequestCheckUtil::checkNotNull($this->orderSaleTotalAmt, 'orderSaleTotalAmt');
		RequestCheckUtil::checkNotNull($this->realPayAmt, 'realPayAmt');
		RequestCheckUtil::checkNotNull($this->orderSerialNumber, 'orderSerialNumber');
	}
	
	public function getBizName(){
		return "receiveOrderinfo";
	}
	
}

class CfLogistics {

	private $apiParams = array();
	
	private $hopeArrivalDate;
	
	private $hopeArrivalTime;
	
	private $verifyCode;
	
	public function getHopeArrivalDate() {
		return $this->hopeArrivalDate;
	}

	public function setHopeArrivalDate($hopeArrivalDate) {
		$this->hopeArrivalDate = $hopeArrivalDate;
		$this->apiParams["hopeArrivalDate"] = $hopeArrivalDate;
	}
	
	public function getHopeArrivalTime() {
		return $this->hopeArrivalTime;
	}

	public function setHopeArrivalTime($hopeArrivalTime) {
		$this->hopeArrivalTime = $hopeArrivalTime;
		$this->apiParams["hopeArrivalTime"] = $hopeArrivalTime;
	}
	
	public function getVerifyCode() {
		return $this->verifyCode;
	}

	public function setVerifyCode($verifyCode) {
		$this->verifyCode = $verifyCode;
		$this->apiParams["verifyCode"] = $verifyCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class CfTransactions {

	private $apiParams = array();
	
	private $consignee;
	
	private $mobPhoneNum;
	
	private $deliveryAddrMain;
	
	private $latitude;
	
	private $longitude;
	
	public function getConsignee() {
		return $this->consignee;
	}

	public function setConsignee($consignee) {
		$this->consignee = $consignee;
		$this->apiParams["consignee"] = $consignee;
	}
	
	public function getMobPhoneNum() {
		return $this->mobPhoneNum;
	}

	public function setMobPhoneNum($mobPhoneNum) {
		$this->mobPhoneNum = $mobPhoneNum;
		$this->apiParams["mobPhoneNum"] = $mobPhoneNum;
	}
	
	public function getDeliveryAddrMain() {
		return $this->deliveryAddrMain;
	}

	public function setDeliveryAddrMain($deliveryAddrMain) {
		$this->deliveryAddrMain = $deliveryAddrMain;
		$this->apiParams["deliveryAddrMain"] = $deliveryAddrMain;
	}
	
	public function getLatitude() {
		return $this->latitude;
	}

	public function setLatitude($latitude) {
		$this->latitude = $latitude;
		$this->apiParams["latitude"] = $latitude;
	}
	
	public function getLongitude() {
		return $this->longitude;
	}

	public function setLongitude($longitude) {
		$this->longitude = $longitude;
		$this->apiParams["longitude"] = $longitude;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class CfTradePays {

	private $apiParams = array();
	
	private $parentPaymentCode;
	
	private $paymentCode;
	
	private $totalPayAmount;
	
	public function getParentPaymentCode() {
		return $this->parentPaymentCode;
	}

	public function setParentPaymentCode($parentPaymentCode) {
		$this->parentPaymentCode = $parentPaymentCode;
		$this->apiParams["parentPaymentCode"] = $parentPaymentCode;
	}
	
	public function getPaymentCode() {
		return $this->paymentCode;
	}

	public function setPaymentCode($paymentCode) {
		$this->paymentCode = $paymentCode;
		$this->apiParams["paymentCode"] = $paymentCode;
	}
	
	public function getTotalPayAmount() {
		return $this->totalPayAmount;
	}

	public function setTotalPayAmount($totalPayAmount) {
		$this->totalPayAmount = $totalPayAmount;
		$this->apiParams["totalPayAmount"] = $totalPayAmount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class CfOrderPays {

	private $apiParams = array();
	
	private $parentPayCode;
	
	private $payCode;
	
	private $payName;
	
	private $payDate;
	
	private $payTime;
	
	private $payAmount;
	
	public function getParentPayCode() {
		return $this->parentPayCode;
	}

	public function setParentPayCode($parentPayCode) {
		$this->parentPayCode = $parentPayCode;
		$this->apiParams["parentPayCode"] = $parentPayCode;
	}
	
	public function getPayCode() {
		return $this->payCode;
	}

	public function setPayCode($payCode) {
		$this->payCode = $payCode;
		$this->apiParams["payCode"] = $payCode;
	}
	
	public function getPayName() {
		return $this->payName;
	}

	public function setPayName($payName) {
		$this->payName = $payName;
		$this->apiParams["payName"] = $payName;
	}
	
	public function getPayDate() {
		return $this->payDate;
	}

	public function setPayDate($payDate) {
		$this->payDate = $payDate;
		$this->apiParams["payDate"] = $payDate;
	}
	
	public function getPayTime() {
		return $this->payTime;
	}

	public function setPayTime($payTime) {
		$this->payTime = $payTime;
		$this->apiParams["payTime"] = $payTime;
	}
	
	public function getPayAmount() {
		return $this->payAmount;
	}

	public function setPayAmount($payAmount) {
		$this->payAmount = $payAmount;
		$this->apiParams["payAmount"] = $payAmount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class CfOrders {

	private $apiParams = array();
	
	private $cfOrderItemId;
	
	private $storeCode;
	
	private $cmmdtyCode;
	
	private $cmmdtyName;
	
	private $price;
	
	private $saleQty;
	
	private $totalAmount;
	
	private $couponTotalMoney;
	
	private $managerCardMoney;
	
	private $pointAmount;
	
	private $pointMoney;
	
	private $voucherTotalMoney;
	
	private $weight;
	
	private $basicFee;
	
	private $continuousFee;
	
	private $cfTransactions;
	
	private $cfLogistics;
	
	private $cfOrderPays;
	
	private $srvFee;
	
	private $transportFee;
	
	private $itemTaxFare;
	
	public function getCfOrderItemId() {
		return $this->cfOrderItemId;
	}

	public function setCfOrderItemId($cfOrderItemId) {
		$this->cfOrderItemId = $cfOrderItemId;
		$this->apiParams["cfOrderItemId"] = $cfOrderItemId;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}

	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getCmmdtyName() {
		return $this->cmmdtyName;
	}

	public function setCmmdtyName($cmmdtyName) {
		$this->cmmdtyName = $cmmdtyName;
		$this->apiParams["cmmdtyName"] = $cmmdtyName;
	}
	
	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getSaleQty() {
		return $this->saleQty;
	}

	public function setSaleQty($saleQty) {
		$this->saleQty = $saleQty;
		$this->apiParams["saleQty"] = $saleQty;
	}
	
	public function getTotalAmount() {
		return $this->totalAmount;
	}

	public function setTotalAmount($totalAmount) {
		$this->totalAmount = $totalAmount;
		$this->apiParams["totalAmount"] = $totalAmount;
	}
	
	public function getCouponTotalMoney() {
		return $this->couponTotalMoney;
	}

	public function setCouponTotalMoney($couponTotalMoney) {
		$this->couponTotalMoney = $couponTotalMoney;
		$this->apiParams["couponTotalMoney"] = $couponTotalMoney;
	}
	
	public function getManagerCardMoney() {
		return $this->managerCardMoney;
	}

	public function setManagerCardMoney($managerCardMoney) {
		$this->managerCardMoney = $managerCardMoney;
		$this->apiParams["managerCardMoney"] = $managerCardMoney;
	}
	
	public function getPointAmount() {
		return $this->pointAmount;
	}

	public function setPointAmount($pointAmount) {
		$this->pointAmount = $pointAmount;
		$this->apiParams["pointAmount"] = $pointAmount;
	}
	
	public function getPointMoney() {
		return $this->pointMoney;
	}

	public function setPointMoney($pointMoney) {
		$this->pointMoney = $pointMoney;
		$this->apiParams["pointMoney"] = $pointMoney;
	}
	
	public function getVoucherTotalMoney() {
		return $this->voucherTotalMoney;
	}

	public function setVoucherTotalMoney($voucherTotalMoney) {
		$this->voucherTotalMoney = $voucherTotalMoney;
		$this->apiParams["voucherTotalMoney"] = $voucherTotalMoney;
	}
	
	public function getWeight() {
		return $this->weight;
	}

	public function setWeight($weight) {
		$this->weight = $weight;
		$this->apiParams["weight"] = $weight;
	}
	
	public function getBasicFee() {
		return $this->basicFee;
	}

	public function setBasicFee($basicFee) {
		$this->basicFee = $basicFee;
		$this->apiParams["basicFee"] = $basicFee;
	}
	
	public function getContinuousFee() {
		return $this->continuousFee;
	}

	public function setContinuousFee($continuousFee) {
		$this->continuousFee = $continuousFee;
		$this->apiParams["continuousFee"] = $continuousFee;
	}
	
	public function getCfTransactions() {
		return $this->cfTransactions;
	}

	public function setCfTransactions($cfTransactions) {
		$this->cfTransactions = $cfTransactions;
		$arr = array();
		foreach ($cfTransactions as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cfTransactions"] = $arr;
	}
	
	public function getCfLogistics() {
		return $this->cfLogistics;
	}

	public function setCfLogistics($cfLogistics) {
		$this->cfLogistics = $cfLogistics;
		$this->apiParams["cfLogistics"] = $cfLogistics->getApiParams();
	}
	
	public function getCfOrderPays() {
		return $this->cfOrderPays;
	}

	public function setCfOrderPays($cfOrderPays) {
		$this->cfOrderPays = $cfOrderPays;
		$arr = array();
		foreach ($cfOrderPays as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cfOrderPays"] = $arr;
	}
	
	public function getSrvFee() {
		return $this->srvFee;
	}

	public function setSrvFee($srvFee) {
		$this->srvFee = $srvFee;
		$this->apiParams["srvFee"] = $srvFee;
	}
	
	public function getTransportFee() {
		return $this->transportFee;
	}

	public function setTransportFee($transportFee) {
		$this->transportFee = $transportFee;
		$this->apiParams["transportFee"] = $transportFee;
	}
	
	public function getItemTaxFare() {
		return $this->itemTaxFare;
	}

	public function setItemTaxFare($itemTaxFare) {
		$this->itemTaxFare = $itemTaxFare;
		$this->apiParams["itemTaxFare"] = $itemTaxFare;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>