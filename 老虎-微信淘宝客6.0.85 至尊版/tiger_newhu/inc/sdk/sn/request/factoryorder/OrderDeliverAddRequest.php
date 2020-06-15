<?php
/**
 * 苏宁开放平台接口 - 订单发货单新增
 *
 * @author suning
 * @date   2015-9-14
 */
class OrderDeliverAddRequest  extends SuningRequest{
	
	/**
	 * 订单行号
	 */
	private $orderItemId;
	
	/**
	 * 运单号
	 */
	private $expressNo;
	
	/**
	 * 物流公司编码
	 */
	private $expressCompCode;
	
	/**
	 * 供应商编码
	 */
	private $supplierCode;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}
	
	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getExpressCompCode() {
		return $this->expressCompCode;
	}
	
	public function setExpressCompCode($expressCompCode) {
		$this->expressCompCode = $expressCompCode;
		$this->apiParams["expressCompCode"] = $expressCompCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.orderdeliver.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->expressNo, 'expressNo');
		RequestCheckUtil::checkNotNull($this->expressCompCode, 'expressCompCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "addOrderDeliver";
	}
	
}

?>