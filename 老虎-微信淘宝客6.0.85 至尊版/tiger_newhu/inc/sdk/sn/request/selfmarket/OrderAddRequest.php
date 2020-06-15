<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-1-12
 */
class OrderAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderItemIds;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getOrderItemIds() {
		return $this->orderItemIds;
	}
	
	public function setOrderItemIds($orderItemIds) {
		$this->orderItemIds = $orderItemIds;
		$this->apiParams["orderItemIds"] = $orderItemIds;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.order.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderItemIds, 'orderItemIds');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "addOrder";
	}
	
}

?>