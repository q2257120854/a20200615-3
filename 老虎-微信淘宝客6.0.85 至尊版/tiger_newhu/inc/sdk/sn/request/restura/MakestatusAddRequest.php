<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-8-14
 */
class MakestatusAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $makeStatus;
	
	/**
	 * 
	 */
	private $orderIds;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getMakeStatus() {
		return $this->makeStatus;
	}
	
	public function setMakeStatus($makeStatus) {
		$this->makeStatus = $makeStatus;
		$this->apiParams["makeStatus"] = $makeStatus;
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
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.restura.makestatus.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->makeStatus, 'makeStatus');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "addMakestatus";
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