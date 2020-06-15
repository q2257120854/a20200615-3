<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-3-21
 */
class FacProductConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $skuConfirmList;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getSkuConfirmList() {
		return $this->skuConfirmList;
	}
	
	public function setSkuConfirmList($skuConfirmList) {
		$this->skuConfirmList = $skuConfirmList;
		$arr = array();
		foreach ($skuConfirmList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["skuConfirmList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.facproduct.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "confirmFacProduct";
	}
	
}

class SkuConfirmList {

	private $apiParams = array();
	
	private $confirmTime;
	
	private $skuId;
	
	public function getConfirmTime() {
		return $this->confirmTime;
	}

	public function setConfirmTime($confirmTime) {
		$this->confirmTime = $confirmTime;
		$this->apiParams["confirmTime"] = $confirmTime;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}

	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>