<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-11
 */
class OrdersubmitCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $platFormTrade;
	
	public function getPlatFormTrade() {
		return $this->platFormTrade;
	}
	
	public function setPlatFormTrade($platFormTrade) {
		$this->platFormTrade = $platFormTrade;
		$this->apiParams["platFormTrade"] = $platFormTrade->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.onlinestore.ordersubmit.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "createOrdersubmit";
	}
	
}

class CouponInfo {

	private $apiParams = array();
	
	private $couponAmount;
	
	private $couponCode;
	
	private $couponType;
	
	public function getCouponAmount() {
		return $this->couponAmount;
	}

	public function setCouponAmount($couponAmount) {
		$this->couponAmount = $couponAmount;
		$this->apiParams["couponAmount"] = $couponAmount;
	}
	
	public function getCouponCode() {
		return $this->couponCode;
	}

	public function setCouponCode($couponCode) {
		$this->couponCode = $couponCode;
		$this->apiParams["couponCode"] = $couponCode;
	}
	
	public function getCouponType() {
		return $this->couponType;
	}

	public function setCouponType($couponType) {
		$this->couponType = $couponType;
		$this->apiParams["couponType"] = $couponType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class PlatFormTrade {

	private $apiParams = array();
	
	private $accntBank;
	
	private $bankAccntNum;
	
	private $businessSign;
	
	private $cartTwoNo;
	
	private $chanId;
	
	private $cityName;
	
	private $deliveryType;
	
	private $invoiceContent;
	
	private $invoiceTitle;
	
	private $invoiceTitleType;
	
	private $invoiceType;
	
	private $mapType;
	
	private $memberNo;
	
	private $orderId;
	
	private $orderTime;
	
	private $payment;
	
	private $platFormOrder;
	
	private $poiId;
	
	private $receiverAddress;
	
	private $receiverMobile;
	
	private $receiverName;
	
	private $regAddr;
	
	private $regPhone;
	
	private $shopCode;
	
	private $shopName;
	
	private $taxMobilePhone;
	
	private $taxPayerAddr;
	
	private $taxPayerName;
	
	private $taxPayerNo;
	
	private $taxPayerPhone;
	
	public function getAccntBank() {
		return $this->accntBank;
	}

	public function setAccntBank($accntBank) {
		$this->accntBank = $accntBank;
		$this->apiParams["accntBank"] = $accntBank;
	}
	
	public function getBankAccntNum() {
		return $this->bankAccntNum;
	}

	public function setBankAccntNum($bankAccntNum) {
		$this->bankAccntNum = $bankAccntNum;
		$this->apiParams["bankAccntNum"] = $bankAccntNum;
	}
	
	public function getBusinessSign() {
		return $this->businessSign;
	}

	public function setBusinessSign($businessSign) {
		$this->businessSign = $businessSign;
		$this->apiParams["businessSign"] = $businessSign;
	}
	
	public function getCartTwoNo() {
		return $this->cartTwoNo;
	}

	public function setCartTwoNo($cartTwoNo) {
		$this->cartTwoNo = $cartTwoNo;
		$this->apiParams["cartTwoNo"] = $cartTwoNo;
	}
	
	public function getChanId() {
		return $this->chanId;
	}

	public function setChanId($chanId) {
		$this->chanId = $chanId;
		$this->apiParams["chanId"] = $chanId;
	}
	
	public function getCityName() {
		return $this->cityName;
	}

	public function setCityName($cityName) {
		$this->cityName = $cityName;
		$this->apiParams["cityName"] = $cityName;
	}
	
	public function getDeliveryType() {
		return $this->deliveryType;
	}

	public function setDeliveryType($deliveryType) {
		$this->deliveryType = $deliveryType;
		$this->apiParams["deliveryType"] = $deliveryType;
	}
	
	public function getInvoiceContent() {
		return $this->invoiceContent;
	}

	public function setInvoiceContent($invoiceContent) {
		$this->invoiceContent = $invoiceContent;
		$this->apiParams["invoiceContent"] = $invoiceContent;
	}
	
	public function getInvoiceTitle() {
		return $this->invoiceTitle;
	}

	public function setInvoiceTitle($invoiceTitle) {
		$this->invoiceTitle = $invoiceTitle;
		$this->apiParams["invoiceTitle"] = $invoiceTitle;
	}
	
	public function getInvoiceTitleType() {
		return $this->invoiceTitleType;
	}

	public function setInvoiceTitleType($invoiceTitleType) {
		$this->invoiceTitleType = $invoiceTitleType;
		$this->apiParams["invoiceTitleType"] = $invoiceTitleType;
	}
	
	public function getInvoiceType() {
		return $this->invoiceType;
	}

	public function setInvoiceType($invoiceType) {
		$this->invoiceType = $invoiceType;
		$this->apiParams["invoiceType"] = $invoiceType;
	}
	
	public function getMapType() {
		return $this->mapType;
	}

	public function setMapType($mapType) {
		$this->mapType = $mapType;
		$this->apiParams["mapType"] = $mapType;
	}
	
	public function getMemberNo() {
		return $this->memberNo;
	}

	public function setMemberNo($memberNo) {
		$this->memberNo = $memberNo;
		$this->apiParams["memberNo"] = $memberNo;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}

	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderTime() {
		return $this->orderTime;
	}

	public function setOrderTime($orderTime) {
		$this->orderTime = $orderTime;
		$this->apiParams["orderTime"] = $orderTime;
	}
	
	public function getPayment() {
		return $this->payment;
	}

	public function setPayment($payment) {
		$this->payment = $payment;
		$this->apiParams["payment"] = $payment;
	}
	
	public function getPlatFormOrder() {
		return $this->platFormOrder;
	}

	public function setPlatFormOrder($platFormOrder) {
		$this->platFormOrder = $platFormOrder;
		$arr = array();
		foreach ($platFormOrder as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["platFormOrder"] = $arr;
	}
	
	public function getPoiId() {
		return $this->poiId;
	}

	public function setPoiId($poiId) {
		$this->poiId = $poiId;
		$this->apiParams["poiId"] = $poiId;
	}
	
	public function getReceiverAddress() {
		return $this->receiverAddress;
	}

	public function setReceiverAddress($receiverAddress) {
		$this->receiverAddress = $receiverAddress;
		$this->apiParams["receiverAddress"] = $receiverAddress;
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
	
	public function getRegAddr() {
		return $this->regAddr;
	}

	public function setRegAddr($regAddr) {
		$this->regAddr = $regAddr;
		$this->apiParams["regAddr"] = $regAddr;
	}
	
	public function getRegPhone() {
		return $this->regPhone;
	}

	public function setRegPhone($regPhone) {
		$this->regPhone = $regPhone;
		$this->apiParams["regPhone"] = $regPhone;
	}
	
	public function getShopCode() {
		return $this->shopCode;
	}

	public function setShopCode($shopCode) {
		$this->shopCode = $shopCode;
		$this->apiParams["shopCode"] = $shopCode;
	}
	
	public function getShopName() {
		return $this->shopName;
	}

	public function setShopName($shopName) {
		$this->shopName = $shopName;
		$this->apiParams["shopName"] = $shopName;
	}
	
	public function getTaxMobilePhone() {
		return $this->taxMobilePhone;
	}

	public function setTaxMobilePhone($taxMobilePhone) {
		$this->taxMobilePhone = $taxMobilePhone;
		$this->apiParams["taxMobilePhone"] = $taxMobilePhone;
	}
	
	public function getTaxPayerAddr() {
		return $this->taxPayerAddr;
	}

	public function setTaxPayerAddr($taxPayerAddr) {
		$this->taxPayerAddr = $taxPayerAddr;
		$this->apiParams["taxPayerAddr"] = $taxPayerAddr;
	}
	
	public function getTaxPayerName() {
		return $this->taxPayerName;
	}

	public function setTaxPayerName($taxPayerName) {
		$this->taxPayerName = $taxPayerName;
		$this->apiParams["taxPayerName"] = $taxPayerName;
	}
	
	public function getTaxPayerNo() {
		return $this->taxPayerNo;
	}

	public function setTaxPayerNo($taxPayerNo) {
		$this->taxPayerNo = $taxPayerNo;
		$this->apiParams["taxPayerNo"] = $taxPayerNo;
	}
	
	public function getTaxPayerPhone() {
		return $this->taxPayerPhone;
	}

	public function setTaxPayerPhone($taxPayerPhone) {
		$this->taxPayerPhone = $taxPayerPhone;
		$this->apiParams["taxPayerPhone"] = $taxPayerPhone;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class PlatFormOrder {

	private $apiParams = array();
	
	private $activityId;
	
	private $cartTwoItemNo;
	
	private $cmmdtyProperty;
	
	private $couponInfo;
	
	private $fullReductionInfo;
	
	private $hopeArrivalTime;
	
	private $orderItemId;
	
	private $orderPayment;
	
	private $pointAmount;
	
	private $postage;
	
	private $price;
	
	private $saleNum;
	
	private $skuId;
	
	private $snSkuId;
	
	private $totalFee;
	
	public function getActivityId() {
		return $this->activityId;
	}

	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getCartTwoItemNo() {
		return $this->cartTwoItemNo;
	}

	public function setCartTwoItemNo($cartTwoItemNo) {
		$this->cartTwoItemNo = $cartTwoItemNo;
		$this->apiParams["cartTwoItemNo"] = $cartTwoItemNo;
	}
	
	public function getCmmdtyProperty() {
		return $this->cmmdtyProperty;
	}

	public function setCmmdtyProperty($cmmdtyProperty) {
		$this->cmmdtyProperty = $cmmdtyProperty;
		$this->apiParams["cmmdtyProperty"] = $cmmdtyProperty;
	}
	
	public function getCouponInfo() {
		return $this->couponInfo;
	}

	public function setCouponInfo($couponInfo) {
		$this->couponInfo = $couponInfo;
		$arr = array();
		foreach ($couponInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["couponInfo"] = $arr;
	}
	
	public function getFullReductionInfo() {
		return $this->fullReductionInfo;
	}

	public function setFullReductionInfo($fullReductionInfo) {
		$this->fullReductionInfo = $fullReductionInfo;
		$arr = array();
		foreach ($fullReductionInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["fullReductionInfo"] = $arr;
	}
	
	public function getHopeArrivalTime() {
		return $this->hopeArrivalTime;
	}

	public function setHopeArrivalTime($hopeArrivalTime) {
		$this->hopeArrivalTime = $hopeArrivalTime;
		$this->apiParams["hopeArrivalTime"] = $hopeArrivalTime;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getOrderPayment() {
		return $this->orderPayment;
	}

	public function setOrderPayment($orderPayment) {
		$this->orderPayment = $orderPayment;
		$this->apiParams["orderPayment"] = $orderPayment;
	}
	
	public function getPointAmount() {
		return $this->pointAmount;
	}

	public function setPointAmount($pointAmount) {
		$this->pointAmount = $pointAmount;
		$this->apiParams["pointAmount"] = $pointAmount;
	}
	
	public function getPostage() {
		return $this->postage;
	}

	public function setPostage($postage) {
		$this->postage = $postage;
		$this->apiParams["postage"] = $postage;
	}
	
	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getSaleNum() {
		return $this->saleNum;
	}

	public function setSaleNum($saleNum) {
		$this->saleNum = $saleNum;
		$this->apiParams["saleNum"] = $saleNum;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}

	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getSnSkuId() {
		return $this->snSkuId;
	}

	public function setSnSkuId($snSkuId) {
		$this->snSkuId = $snSkuId;
		$this->apiParams["snSkuId"] = $snSkuId;
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

class FullReductionInfo {

	private $apiParams = array();
	
	private $bonusId;
	
	private $fullReductionAmount;
	
	private $promotionNum;
	
	private $provider;
	
	public function getBonusId() {
		return $this->bonusId;
	}

	public function setBonusId($bonusId) {
		$this->bonusId = $bonusId;
		$this->apiParams["bonusId"] = $bonusId;
	}
	
	public function getFullReductionAmount() {
		return $this->fullReductionAmount;
	}

	public function setFullReductionAmount($fullReductionAmount) {
		$this->fullReductionAmount = $fullReductionAmount;
		$this->apiParams["fullReductionAmount"] = $fullReductionAmount;
	}
	
	public function getPromotionNum() {
		return $this->promotionNum;
	}

	public function setPromotionNum($promotionNum) {
		$this->promotionNum = $promotionNum;
		$this->apiParams["promotionNum"] = $promotionNum;
	}
	
	public function getProvider() {
		return $this->provider;
	}

	public function setProvider($provider) {
		$this->provider = $provider;
		$this->apiParams["provider"] = $provider;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>