<?php
/**
 * 苏宁开放平台接口 - 商品入库预约信息单笔查询
 *
 * @author suning
 * @date   2016-5-30
 */
class StoragesubGetRequest  extends SuningRequest{
	
	/**
	 * 预约单号。预约单号、采购订单号，二者必填其一，两者都填以预约单号为准
	 */
	private $orderId;
	
	/**
	 * 采购订单号。预约单号、采购订单号，二者必填其一，两者都填以预约单号为准
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
		return 'suning.fourps.storagesub.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getStoragesub";
	}
	
}

?>