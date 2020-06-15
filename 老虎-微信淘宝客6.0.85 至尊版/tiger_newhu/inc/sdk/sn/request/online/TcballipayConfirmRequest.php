<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-4-9
 */
class TcballipayConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $tcbAlipay;
	
	public function getTcbAlipay() {
		return $this->tcbAlipay;
	}
	
	public function setTcbAlipay($tcbAlipay) {
		$this->tcbAlipay = $tcbAlipay;
		$this->apiParams["tcbAlipay"] = $tcbAlipay->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.online.tcballipay.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "confirmTcballipay";
	}
	
}

class TcbAlipay {

	private $apiParams = array();
	
	private $body;
	
	private $channelType;
	
	private $clientInfo;
	
	private $disablePaymethod;
	
	private $enablePaymethod;
	
	private $frontReturnUrl;
	
	private $goodsType;
	
	private $orderItemList;
	
	private $orderNumer;
	
	private $orderTime;
	
	private $payTimeout;
	
	private $totalFee;
	
	public function getBody() {
		return $this->body;
	}

	public function setBody($body) {
		$this->body = $body;
		$this->apiParams["body"] = $body;
	}
	
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
	
	public function getDisablePaymethod() {
		return $this->disablePaymethod;
	}

	public function setDisablePaymethod($disablePaymethod) {
		$this->disablePaymethod = $disablePaymethod;
		$this->apiParams["disablePaymethod"] = $disablePaymethod;
	}
	
	public function getEnablePaymethod() {
		return $this->enablePaymethod;
	}

	public function setEnablePaymethod($enablePaymethod) {
		$this->enablePaymethod = $enablePaymethod;
		$this->apiParams["enablePaymethod"] = $enablePaymethod;
	}
	
	public function getFrontReturnUrl() {
		return $this->frontReturnUrl;
	}

	public function setFrontReturnUrl($frontReturnUrl) {
		$this->frontReturnUrl = $frontReturnUrl;
		$this->apiParams["frontReturnUrl"] = $frontReturnUrl;
	}
	
	public function getGoodsType() {
		return $this->goodsType;
	}

	public function setGoodsType($goodsType) {
		$this->goodsType = $goodsType;
		$this->apiParams["goodsType"] = $goodsType;
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
	
	public function getPayTimeout() {
		return $this->payTimeout;
	}

	public function setPayTimeout($payTimeout) {
		$this->payTimeout = $payTimeout;
		$this->apiParams["payTimeout"] = $payTimeout;
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

class OrderItemList {

	private $apiParams = array();
	
	private $itemTotalFee;
	
	private $orderItemNumer;
	
	public function getItemTotalFee() {
		return $this->itemTotalFee;
	}

	public function setItemTotalFee($itemTotalFee) {
		$this->itemTotalFee = $itemTotalFee;
		$this->apiParams["itemTotalFee"] = $itemTotalFee;
	}
	
	public function getOrderItemNumer() {
		return $this->orderItemNumer;
	}

	public function setOrderItemNumer($orderItemNumer) {
		$this->orderItemNumer = $orderItemNumer;
		$this->apiParams["orderItemNumer"] = $orderItemNumer;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>