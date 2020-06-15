<?php
/**
 * 苏宁开放平台接口 - 订单发货(合并包裹单号发货)
 *
 * @author suning
 * @date   2016-3-28
 */
class OrderDeliveryAddRequest  extends SuningRequest{
	
	/**
	 * 合并包裹单号。合并包裹单号
	 */
	private $packageOrderId;
	
	/**
	 * 发货方式。01：海外直邮方式发货02：商家保税区发货；03：苏宁保税区发货；
	 */
	private $deliveryType;
	
	/**
	 * 物流公司编码。物流公司编码，可以通过获取物流公司代码（查询所有）获取，当以苏宁保税区发货方式时，物流公司编码和运单号为空；海外直邮、商家保税区发货方式发货时物流公司编码和运单号必填。
	 */
	private $expressCompanyCode;
	
	/**
	 * 运单号。运单号，当以苏宁保税区发货方式时，物流公司编码和运单号为空；海外直邮、商家保税区发货方式发货时物流公司编码和运单号必填。
	 */
	private $expressNo;
	
	public function getPackageOrderId() {
		return $this->packageOrderId;
	}
	
	public function setPackageOrderId($packageOrderId) {
		$this->packageOrderId = $packageOrderId;
		$this->apiParams["packageOrderId"] = $packageOrderId;
	}
	
	public function getDeliveryType() {
		return $this->deliveryType;
	}
	
	public function setDeliveryType($deliveryType) {
		$this->deliveryType = $deliveryType;
		$this->apiParams["deliveryType"] = $deliveryType;
	}
	
	public function getExpressCompanyCode() {
		return $this->expressCompanyCode;
	}
	
	public function setExpressCompanyCode($expressCompanyCode) {
		$this->expressCompanyCode = $expressCompanyCode;
		$this->apiParams["expressCompanyCode"] = $expressCompanyCode;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}
	
	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getApiMethodName(){
		return 'suning.supply.orderdelivery.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->packageOrderId, 'packageOrderId');
		RequestCheckUtil::checkNotNull($this->deliveryType, 'deliveryType');
		RequestCheckUtil::checkNotNull($this->expressCompanyCode, 'expressCompanyCode');
	}
	
	public function getBizName(){
		return "addOrderDelivery";
	}
	
}

?>