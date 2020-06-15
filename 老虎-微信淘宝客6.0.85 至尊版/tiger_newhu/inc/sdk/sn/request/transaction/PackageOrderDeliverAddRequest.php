<?php
/**
 * 苏宁开放平台接口 - 订单发货(包裹单号发货)
 *
 * @author suning
 * @date   2015-10-28
 */
class PackageOrderDeliverAddRequest  extends SuningRequest{
	
	/**
	 * 合并包裹单号。合并包裹单号
	 */
	private $packageOrderId;
	
	/**
	 * 发货方式。02：商家保税区发货；03：苏宁保税区发货；
	 */
	private $deliveryType;
	
	/**
	 * 物流公司编码。物流公司编码，可以通过获取物流公司代码（查询所有）获取
	 */
	private $expressCompanyCode;
	
	/**
	 * 运单号。运单号
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
		return 'suning.custom.packageorderdeliver.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->packageOrderId, 'packageOrderId');
		RequestCheckUtil::checkNotNull($this->deliveryType, 'deliveryType');
	}
	
	public function getBizName(){
		return "addPackageOrderDeliver";
	}
	
}

?>