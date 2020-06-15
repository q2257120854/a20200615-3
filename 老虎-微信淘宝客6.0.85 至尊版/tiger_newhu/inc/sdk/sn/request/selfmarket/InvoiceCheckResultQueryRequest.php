<?php
/**
 * 苏宁开放平台接口 - 发票预校验查询
 *
 * @author suning
 * @date   2016-4-19
 */
class InvoiceCheckResultQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 供应商代码。
	 */
	private $supplierCode;
	
	/**
	 * 苏宁公司代码。
	 */
	private $snCode;
	
	/**
	 * 校验日期开始时间。校验日期开始时间、校验日期结束时间、发票号码三者必填其一。1）若只输入开始日期，则只查询输入当天的结果；2）若只输入结束日期，则只查询输入当天的结果；3）若输入开始日期和结束日期，开始日期不能大于结束日期且最多不超过60天
	 */
	private $startDate;
	
	/**
	 * 校验日期结算时间。校验日期开始时间、校验日期结束时间、发票号码三者必填其一。1）若只输入开始日期，则只查询输入当天的结果；2）若只输入结束日期，则只查询输入当天的结果；3）若输入开始日期和结束日期，开始日期不能大于结束日期且最多不超过60天
	 */
	private $endDate;
	
	/**
	 * 发票号码。校验日期开始时间、校验日期结束时间、发票号码三者必填其一。
	 */
	private $invoiceNum;
	
	/**
	 * 发票代码。供应商代码+发票号码+发票代码，唯一确定一张发票。
	 */
	private $invoiceCode;
	
	/**
	 * 开票模式。开票模式。1--按供应商发货单开票；2--按苏宁采购订单开票；3--按结算清单开票；4--按红字通知单开票；
	 */
	private $invoiceModel;
	
	
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getSnCode() {
		return $this->snCode;
	}
	
	public function setSnCode($snCode) {
		$this->snCode = $snCode;
		$this->apiParams["snCode"] = $snCode;
	}
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getInvoiceNum() {
		return $this->invoiceNum;
	}
	
	public function setInvoiceNum($invoiceNum) {
		$this->invoiceNum = $invoiceNum;
		$this->apiParams["invoiceNum"] = $invoiceNum;
	}
	
	public function getInvoiceCode() {
		return $this->invoiceCode;
	}
	
	public function setInvoiceCode($invoiceCode) {
		$this->invoiceCode = $invoiceCode;
		$this->apiParams["invoiceCode"] = $invoiceCode;
	}
	
	public function getInvoiceModel() {
		return $this->invoiceModel;
	}
	
	public function setInvoiceModel($invoiceModel) {
		$this->invoiceModel = $invoiceModel;
		$this->apiParams["invoiceModel"] = $invoiceModel;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.invoice.checkresult.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryInvoiceCheckResult";
	}
	
}

?>