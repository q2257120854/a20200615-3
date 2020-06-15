<?php
/**
 * 苏宁开放平台接口 - 获取返利对账单
 *
 * @author suning
 * @date   2016-4-19
 */
class StatementQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 供应商代码。供应商编码。
	 */
	private $supplierCode;
	
	/**
	 * 对账开始日期。对账开始日期。跨度不超过30天。对账单开始日期、对账单结束日期、订单类型为一个组合、苏宁活动函编号为一个组合，两个组合必填一个。
	 */
	private $createStartDate;
	
	/**
	 * 对账结束日期。对账结束日期。跨度不超过30天。对账单开始日期、对账单结束日期、订单类型为一个组合、苏宁活动函编号为一个组合，两个组合必填一个。
	 */
	private $createEndDate;
	
	/**
	 * 订单类型。订单类型。1--优惠单、 2--库存补差、 3--销售奖励 、4--费用返利对账单、5--包销机超标补差、6--特价机超标补差、7--退货库存补差、8--销售提成。对账单开始日期、对账单结束日期、订单类型为一个组合、苏宁活动函编号为一个组合，两个组合必填一个。
	 */
	private $modelType;
	
	/**
	 * 苏宁活动函编号。苏宁活动函编号。苏宁对账单号为一个组合、对账单开始日期、对账单结束日期、订单类型为一个组合、苏宁活动函编号为一个组合，两个组合必填一个。
	 */
	private $applicationCode;
	
	
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
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
	
	public function getApplicationCode() {
		return $this->applicationCode;
	}
	
	public function setApplicationCode($applicationCode) {
		$this->applicationCode = $applicationCode;
		$this->apiParams["applicationCode"] = $applicationCode;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.statement.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryStatement";
	}
	
}

?>