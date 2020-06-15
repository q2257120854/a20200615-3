<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-11-16
 */
class OrderUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $counterCode;
	
	/**
	 * 
	 */
	private $itemInfo;
	
	/**
	 * 
	 */
	private $operateFlag;
	
	/**
	 * 
	 */
	private $payId;
	
	public function getCounterCode() {
		return $this->counterCode;
	}
	
	public function setCounterCode($counterCode) {
		$this->counterCode = $counterCode;
		$this->apiParams["counterCode"] = $counterCode;
	}
	
	public function getItemInfo() {
		return $this->itemInfo;
	}
	
	public function setItemInfo($itemInfo) {
		$this->itemInfo = $itemInfo;
		$arr = array();
		foreach ($itemInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["itemInfo"] = $arr;
	}
	
	public function getOperateFlag() {
		return $this->operateFlag;
	}
	
	public function setOperateFlag($operateFlag) {
		$this->operateFlag = $operateFlag;
		$this->apiParams["operateFlag"] = $operateFlag;
	}
	
	public function getPayId() {
		return $this->payId;
	}
	
	public function setPayId($payId) {
		$this->payId = $payId;
		$this->apiParams["payId"] = $payId;
	}
	
	public function getApiMethodName(){
		return 'suning.offline.order.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->operateFlag, 'operateFlag');
		RequestCheckUtil::checkNotNull($this->payId, 'payId');
	}
	
	public function getBizName(){
		return "updateOrder";
	}
	
}

class ItemInfo {

	private $apiParams = array();
	
	private $orderItemId;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>