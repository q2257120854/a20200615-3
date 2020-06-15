<?php
/**
 * 苏宁开放平台接口 - 商品实际入库信息查询
 *
 * @author suning
 * @date   2016-5-27
 */
class RealStorageQueryRequest  extends SuningRequest{
	
	/**
	 * 预约单号。入库预约单号、采购订单号，二者必填其一
	 */
	private $orderId;
	
	/**
	 * 采购订单号。入库预约单号、采购订单号，二者必填其一
	 */
	private $purchaseOrderId;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getPurchaseOrderId() {
		return $this->purchaseOrderId;
	}
	
	public function setPurchaseOrderId($purchaseOrderId) {
		$this->purchaseOrderId = $purchaseOrderId;
		$this->apiParams["purchaseOrderId"] = $purchaseOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.realstorage.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryRealStorage";
	}
	
}

?>