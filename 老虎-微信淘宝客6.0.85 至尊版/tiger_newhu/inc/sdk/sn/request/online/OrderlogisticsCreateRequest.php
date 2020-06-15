<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class OrderlogisticsCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $expressCompanyName;
	
	/**
	 * 
	 */
	private $expressOrderId;
	
	/**
	 * 
	 */
	private $logisticsCode;
	
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
	private $sheetId;
	
	/**
	 * 
	 */
	private $skuId;
	
	public function getExpressCompanyName() {
		return $this->expressCompanyName;
	}
	
	public function setExpressCompanyName($expressCompanyName) {
		$this->expressCompanyName = $expressCompanyName;
		$this->apiParams["expressCompanyName"] = $expressCompanyName;
	}
	
	public function getExpressOrderId() {
		return $this->expressOrderId;
	}
	
	public function setExpressOrderId($expressOrderId) {
		$this->expressOrderId = $expressOrderId;
		$this->apiParams["expressOrderId"] = $expressOrderId;
	}
	
	public function getLogisticsCode() {
		return $this->logisticsCode;
	}
	
	public function setLogisticsCode($logisticsCode) {
		$this->logisticsCode = $logisticsCode;
		$this->apiParams["logisticsCode"] = $logisticsCode;
	}
	
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
	
	public function getSheetId() {
		return $this->sheetId;
	}
	
	public function setSheetId($sheetId) {
		$this->sheetId = $sheetId;
		$this->apiParams["sheetId"] = $sheetId;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}
	
	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getApiMethodName(){
		return 'suning.online.orderlogistics.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->expressCompanyName, 'expressCompanyName');
		RequestCheckUtil::checkNotNull($this->expressOrderId, 'expressOrderId');
		RequestCheckUtil::checkNotNull($this->logisticsCode, 'logisticsCode');
		RequestCheckUtil::checkNotNull($this->operateType, 'operateType');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->reOrderItemId, 'reOrderItemId');
		RequestCheckUtil::checkNotNull($this->sheetId, 'sheetId');
		RequestCheckUtil::checkNotNull($this->skuId, 'skuId');
	}
	
	public function getBizName(){
		return "createOrderlogistics";
	}
	
}

?>