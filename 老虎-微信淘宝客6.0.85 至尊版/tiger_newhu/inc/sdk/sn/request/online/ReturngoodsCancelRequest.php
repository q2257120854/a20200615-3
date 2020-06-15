<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class ReturngoodsCancelRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $operateType;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $reOrderItemId;
	
	/**
	 * 
	 */
	private $skuId;
	
	public function getOperateType() {
		return $this->operateType;
	}
	
	public function setOperateType($operateType) {
		$this->operateType = $operateType;
		$this->apiParams["operateType"] = $operateType;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getReOrderItemId() {
		return $this->reOrderItemId;
	}
	
	public function setReOrderItemId($reOrderItemId) {
		$this->reOrderItemId = $reOrderItemId;
		$this->apiParams["reOrderItemId"] = $reOrderItemId;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}
	
	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getApiMethodName(){
		return 'suning.online.returngoods.cancel';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->operateType, 'operateType');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->reOrderItemId, 'reOrderItemId');
		RequestCheckUtil::checkNotNull($this->skuId, 'skuId');
	}
	
	public function getBizName(){
		return "cancelReturngoods";
	}
	
}

?>