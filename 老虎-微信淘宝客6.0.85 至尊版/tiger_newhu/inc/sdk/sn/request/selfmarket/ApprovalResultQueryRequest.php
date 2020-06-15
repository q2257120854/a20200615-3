<?php
/**
 * 苏宁开放平台接口 - 获取审批结果
 *
 * @author suning
 * @date   2016-4-19
 */
class ApprovalResultQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 供应商编码。供应商编码
	 */
	private $supplierCode;
	
	/**
	 * 获取类型。获取类型。1--获取单个对账单审批结果、 2--获取合并对账单审批结果
	 */
	private $type;
	
	/**
	 * 对账单号。若获取类型为1，此处特指单个对账单号；若获取类型为2，此处特指供应商的合并对账单号；对账单号为一个组合、对账单开始日期、对账单结束日期、订单类型为一个组合，两个组合必填一个
	 */
	private $applyCode;
	
	/**
	 * 对账开始日期。对账开始日期。单个对账单专用。跨度不超过30天。对账单号为一个组合、对账单开始日期、对账单结束日期、订单类型为一个组合，两个组合必填一个
	 */
	private $createStartDate;
	
	/**
	 * 对账结束日期。对账结束日期。单个对账单专用。跨度不超过30天。对账单号为一个组合、对账单开始日期、对账单结束日期、订单类型为一个组合，两个组合必填一个
	 */
	private $createEndDate;
	
	/**
	 * 订单类型。订单类型。单个对账单专用。1--优惠单、 2--库存补差、 3--销售奖励 、4--费用返利对账单、5--包销机超标补差、6--特价机超标补差、7--退货库存补差、8--销售提成。对账单号为一个组合、对账单开始日期、对账单结束日期、订单类型为一个组合，两个组合必填一个
	 */
	private $modelType;
	
	
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getApplyCode() {
		return $this->applyCode;
	}
	
	public function setApplyCode($applyCode) {
		$this->applyCode = $applyCode;
		$this->apiParams["applyCode"] = $applyCode;
	}
	
	public function getCreateStartDate() {
		return $this->createStartDate;
	}
	
	public function setCreateStartDate($createStartDate) {
		$this->createStartDate = $createStartDate;
		$this->apiParams["createStartDate"] = $createStartDate;
	}
	
	public function getCreateEndDate() {
		return $this->createEndDate;
	}
	
	public function setCreateEndDate($createEndDate) {
		$this->createEndDate = $createEndDate;
		$this->apiParams["createEndDate"] = $createEndDate;
	}
	
	public function getModelType() {
		return $this->modelType;
	}
	
	public function setModelType($modelType) {
		$this->modelType = $modelType;
		$this->apiParams["modelType"] = $modelType;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.approvalresult.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->type, 'type');
	}
	
	public function getBizName(){
		return "queryApprovalResult";
	}
	
}

?>