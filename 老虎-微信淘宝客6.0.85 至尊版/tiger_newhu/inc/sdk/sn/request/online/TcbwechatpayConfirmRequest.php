<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-4-9
 */
class TcbwechatpayConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $tcbwechatpay;
	
	public function getTcbwechatpay() {
		return $this->tcbwechatpay;
	}
	
	public function setTcbwechatpay($tcbwechatpay) {
		$this->tcbwechatpay = $tcbwechatpay;
		$this->apiParams["tcbwechatpay"] = $tcbwechatpay->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.online.tcbwechatpay.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "confirmTcbwechatpay";
	}
	
}

class OrderItemList {

	private $apiParams = array();
	
	private $itemTotalAmount;
	
	private $orderItemNumer;
	
	private $price;
	
	private $quantity;
	
	public function getItemTotalAmount() {
		return $this->itemTotalAmount;
	}

	public function setItemTotalAmount($itemTotalAmount) {
		$this->itemTotalAmount = $itemTotalAmount;
		$this->apiParams["itemTotalAmount"] = $itemTotalAmount;
	}
	
	public function getOrderItemNumer() {
		return $this->orderItemNumer;
	}

	public function setOrderItemNumer($orderItemNumer) {
		$this->orderItemNumer = $orderItemNumer;
		$this->apiParams["orderItemNumer"] = $orderItemNumer;
	}
	
	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getQuantity() {
		return $this->quantity;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
		$this->apiParams["quantity"] = $quantity;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class Tcbwechatpay {

	private $apiParams = array();
	
	private $channelType;
	
	private $clientInfo;
	
	private $deviceInfo;
	
	private $extraContent;
	
	private $ipAddress;
	
	private $limitPay;
	
	private $merchantName;
	
	private $orderItemList;
	
	private $orderNumer;
	
	private $orderTime;
	
	private $returnUrl;
	
	private $totalAmount;
	
	public function getChannelType() {
		return $this->channelType;
	}

	public function setChannelType($channelType) {
		$this->channelType = $channelType;
		$this->apiParams["channelType"] = $channelType;
	}
	
	public function getClientInfo() {
		return $this->clientInfo;
	}

	public function setClientInfo($clientInfo) {
		$this->clientInfo = $clientInfo;
		$this->apiParams["clientInfo"] = $clientInfo;
	}
	
	public function getDeviceInfo() {
		return $this->deviceInfo;
	}

	public function setDeviceInfo($deviceInfo) {
		$this->deviceInfo = $deviceInfo;
		$this->apiParams["deviceInfo"] = $deviceInfo;
	}
	
	public function getExtraContent() {
		return $this->extraContent;
	}

	public function setExtraContent($extraContent) {
		$this->extraContent = $extraContent;
		$this->apiParams["extraContent"] = $extraContent;
	}
	
	public function getIpAddress() {
		return $this->ipAddress;
	}

	public function setIpAddress($ipAddress) {
		$this->ipAddress = $ipAddress;
		$this->apiParams["ipAddress"] = $ipAddress;
	}
	
	public function getLimitPay() {
		return $this->limitPay;
	}

	public function setLimitPay($limitPay) {
		$this->limitPay = $limitPay;
		$this->apiParams["limitPay"] = $limitPay;
	}
	
	public function getMerchantName() {
		return $this->merchantName;
	}

	public function setMerchantName($merchantName) {
		$this->merchantName = $merchantName;
		$this->apiParams["merchantName"] = $merchantName;
	}
	
	public function getOrderItemList() {
		return $this->orderItemList;
	}

	public function setOrderItemList($orderItemList) {
		$this->orderItemList = $orderItemList;
		$arr = array();
		foreach ($orderItemList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItemList"] = $arr;
	}
	
	public function getOrderNumer() {
		return $this->orderNumer;
	}

	public function setOrderNumer($orderNumer) {
		$this->orderNumer = $orderNumer;
		$this->apiParams["orderNumer"] = $orderNumer;
	}
	
	public function getOrderTime() {
		return $this->orderTime;
	}

	public function setOrderTime($orderTime) {
		$this->orderTime = $orderTime;
		$this->apiParams["orderTime"] = $orderTime;
	}
	
	public function getReturnUrl() {
		return $this->returnUrl;
	}

	public function setReturnUrl($returnUrl) {
		$this->returnUrl = $returnUrl;
		$this->apiParams["returnUrl"] = $returnUrl;
	}
	
	public function getTotalAmount() {
		return $this->totalAmount;
	}

	public function setTotalAmount($totalAmount) {
		$this->totalAmount = $totalAmount;
		$this->apiParams["totalAmount"] = $totalAmount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>