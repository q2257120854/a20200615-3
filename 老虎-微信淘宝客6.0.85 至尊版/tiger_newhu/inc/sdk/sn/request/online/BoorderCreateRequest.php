<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class BoorderCreateRequest  extends SuningRequest{
	
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
		return 'suning.online.boorder.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "createBoorder";
	}
	
}

class PlatFormTrade {

	private $apiParams = array();
	
	private $memberNo;
	
	private $orderId;
	
	private $orderType;
	
	private $payment;
	
	private $platFormOrder;
	
	private $receiverAddress;
	
	private $receiverCity;
	
	private $receiverCounty;
	
	private $receiverMobile;
	
	private $receiverName;
	
	private $receiverNationality;
	
	private $receiverPhone;
	
	private $receiverProvince;
	
	private $receiverStreet;
	
	private $receiverZip;
	
	private $totalNo;
	
	private $businessType;
	
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
	
	public function getOrderType() {
		return $this->orderType;
	}

	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
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
	
	public function getReceiverCounty() {
		return $this->receiverCounty;
	}

	public function setReceiverCounty($receiverCounty) {
		$this->receiverCounty = $receiverCounty;
		$this->apiParams["receiverCounty"] = $receiverCounty;
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
	
	public function getReceiverNationality() {
		return $this->receiverNationality;
	}

	public function setReceiverNationality($receiverNationality) {
		$this->receiverNationality = $receiverNationality;
		$this->apiParams["receiverNationality"] = $receiverNationality;
	}
	
	public function getReceiverPhone() {
		return $this->receiverPhone;
	}

	public function setReceiverPhone($receiverPhone) {
		$this->receiverPhone = $receiverPhone;
		$this->apiParams["receiverPhone"] = $receiverPhone;
	}
	
	public function getReceiverProvince() {
		return $this->receiverProvince;
	}

	public function setReceiverProvince($receiverProvince) {
		$this->receiverProvince = $receiverProvince;
		$this->apiParams["receiverProvince"] = $receiverProvince;
	}
	
	public function getReceiverStreet() {
		return $this->receiverStreet;
	}

	public function setReceiverStreet($receiverStreet) {
		$this->receiverStreet = $receiverStreet;
		$this->apiParams["receiverStreet"] = $receiverStreet;
	}
	
	public function getReceiverZip() {
		return $this->receiverZip;
	}

	public function setReceiverZip($receiverZip) {
		$this->receiverZip = $receiverZip;
		$this->apiParams["receiverZip"] = $receiverZip;
	}
	
	public function getTotalNo() {
		return $this->totalNo;
	}

	public function setTotalNo($totalNo) {
		$this->totalNo = $totalNo;
		$this->apiParams["totalNo"] = $totalNo;
	}
	
	public function getBusinessType() {
		return $this->businessType;
	}

	public function setBusinessType($businessType) {
		$this->businessType = $businessType;
		$this->apiParams["businessType"] = $businessType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class PlatFormOrder {

	private $apiParams = array();
	
	private $businessSign;
	
	private $orderItemId;
	
	private $orderPayment;
	
	private $postage;
	
	private $price;
	
	private $saleNum;
	
	private $skuId;
	
	private $snSkuId;
	
	private $totalFee;
	
	private $serialNumber;
	
	private $preplantCode;
	
	public function getBusinessSign() {
		return $this->businessSign;
	}

	public function setBusinessSign($businessSign) {
		$this->businessSign = $businessSign;
		$this->apiParams["businessSign"] = $businessSign;
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
	
	public function getSerialNumber() {
		return $this->serialNumber;
	}

	public function setSerialNumber($serialNumber) {
		$this->serialNumber = $serialNumber;
		$this->apiParams["serialNumber"] = $serialNumber;
	}
	
	public function getPreplantCode() {
		return $this->preplantCode;
	}

	public function setPreplantCode($preplantCode) {
		$this->preplantCode = $preplantCode;
		$this->apiParams["preplantCode"] = $preplantCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>