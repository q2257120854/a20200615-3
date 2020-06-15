<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class RefundstatusQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $reOrderItemId;
	
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
	
	public function getApiMethodName(){
		return 'suning.online.refundstatus.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->reOrderItemId, 'reOrderItemId');
	}
	
	public function getBizName(){
		return "queryRefundstatus";
	}
	
}

?>