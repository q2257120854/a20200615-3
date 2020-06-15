<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-10
 */
class AbcpayAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $channelType;
	
	/**
	 * 
	 */
	private $orderIds;
	
	/**
	 * 
	 */
	private $returnUrl;
	
	public function getChannelType() {
		return $this->channelType;
	}
	
	public function setChannelType($channelType) {
		$this->channelType = $channelType;
		$this->apiParams["channelType"] = $channelType;
	}
	
	public function getOrderIds() {
		return $this->orderIds;
	}
	
	public function setOrderIds($orderIds) {
		$this->orderIds = $orderIds;
		$arr = array();
		foreach ($orderIds as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderIds"] = $arr;
	}
	
	public function getReturnUrl() {
		return $this->returnUrl;
	}
	
	public function setReturnUrl($returnUrl) {
		$this->returnUrl = $returnUrl;
		$this->apiParams["returnUrl"] = $returnUrl;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.abcpay.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channelType, 'channelType');
	}
	
	public function getBizName(){
		return "addAbcpay";
	}
	
}

class OrderIds {

	private $apiParams = array();
	
	private $orderId;
	
	public function getOrderId() {
		return $this->orderId;
	}

	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>