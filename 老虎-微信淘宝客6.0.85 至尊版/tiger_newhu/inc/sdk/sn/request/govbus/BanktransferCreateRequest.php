<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-8-1
 */
class BanktransferCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderIds;
	
	/**
	 * 
	 */
	private $phoneNum;
	
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
	
	public function getPhoneNum() {
		return $this->phoneNum;
	}
	
	public function setPhoneNum($phoneNum) {
		$this->phoneNum = $phoneNum;
		$this->apiParams["phoneNum"] = $phoneNum;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.banktransfer.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->phoneNum, 'phoneNum');
	}
	
	public function getBizName(){
		return "createBanktransfer";
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