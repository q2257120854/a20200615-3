<?php
/**
 * 苏宁开放平台接口 - 促销服务协议确认函申请
 *
 * @author suning
 * @date   2016-4-19
 */
class PromotionAddRequest  extends SuningRequest{
	
	/**
	 * 供应商编码。供应商编码。
	 */
	private $supplierCode;
	
	/**
	 * 供应商分公司代码。供应商分公司代码。
	 */
	private $supplierBraComp;
	
	/**
	 * 供应商办事处。供应商办事处。分公司对应办事处，分公司人员可以同时选择多个办事处。
	 */
	private $supplierOffice;
	
	/**
	 * 苏宁公司代码。活动区域管理公司代码。
	 */
	private $snCode;
	
	/**
	 * 供应商确认函编号。供应商确认函编号。
	 */
	private $supplierApplicationCode;
	
	/**
	 * 品牌代码。品牌代码。支持多个，逗号隔开。
	 */
	private $productBrand;
	
	/**
	 * 费用预算单号。费用预算单号。
	 */
	private $expenseBudgetCode;
	
	/**
	 * 活动区域。苏宁公司代码。
	 */
	private $areaCopCode;
	
	/**
	 * 活动开始日期。活动开始日期。格式：yyyy-MM-dd。开始日期不能晚于结束日期。
	 */
	private $startDate;
	
	/**
	 * 活动结束日期。活动结束日期。格式：yyyy-MM-dd。开始日期不能晚于结束日期。
	 */
	private $endDate;
	
	/**
	 * 促销活动名称。促销活动名称。不超过300个字符。
	 */
	private $promotActivName;
	
	/**
	 * 促销协议名称。促销协议名称。不超过90个字符。
	 */
	private $promotAgreementName;
	
	/**
	 * 支付总金额。支付总金额。最多允许两位小数。
	 */
	private $paymentLittleMount;
	
	/**
	 * 结算方式。结算方式。1:贵司开出地税发票，我司在约定的支付时间前以 方式支付给贵司（复选框默认值为电汇，选项只有1个）；3: 贵司开出地税发票并在约定的支付时间前从苏宁云商股份有限公司苏宁采购中心 应付我司的货款中扣减。
	 */
	private $settlementType;
	
	/**
	 * 开票日期。开票日期。格式：yyyy-MM-dd。1、支付日期与活动结束时间范围区间必须在0-31天内；2、结算方式为1，且以转款方式支付时，支付日期不可填写。
	 */
	private $invoiceDate;
	
	/**
	 * 支付方式。支付方式。适用于结算方式1。
	 */
	private $payType;
	
	/**
	 * 开票内容。开票内容。1--促销服务费；2--管理费；3--培训费；4--代理费。
	 */
	private $invoiceContent;
	
	/**
	 * 支付日期。支付日期。格式：yyyy-MM-dd。
	 */
	private $payDate;
	
	/**
	 * HTML内容。HTML内容。HTML ENCODE:UTF-8。
	 */
	private $htmlContent;
	
	/**
	 * SIGNATURE 内容。签章密文。SIGNATURE ENCODE:UTF-8。
	 */
	private $signNatureContent;
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getSupplierBraComp() {
		return $this->supplierBraComp;
	}
	
	public function setSupplierBraComp($supplierBraComp) {
		$this->supplierBraComp = $supplierBraComp;
		$this->apiParams["supplierBraComp"] = $supplierBraComp;
	}
	
	public function getSupplierOffice() {
		return $this->supplierOffice;
	}
	
	public function setSupplierOffice($supplierOffice) {
		$this->supplierOffice = $supplierOffice;
		$this->apiParams["supplierOffice"] = $supplierOffice;
	}
	
	public function getSnCode() {
		return $this->snCode;
	}
	
	public function setSnCode($snCode) {
		$this->snCode = $snCode;
		$this->apiParams["snCode"] = $snCode;
	}
	
	public function getSupplierApplicationCode() {
		return $this->supplierApplicationCode;
	}
	
	public function setSupplierApplicationCode($supplierApplicationCode) {
		$this->supplierApplicationCode = $supplierApplicationCode;
		$this->apiParams["supplierApplicationCode"] = $supplierApplicationCode;
	}
	
	public function getProductBrand() {
		return $this->productBrand;
	}
	
	public function setProductBrand($productBrand) {
		$this->productBrand = $productBrand;
		$this->apiParams["productBrand"] = $productBrand;
	}
	
	public function getExpenseBudgetCode() {
		return $this->expenseBudgetCode;
	}
	
	public function setExpenseBudgetCode($expenseBudgetCode) {
		$this->expenseBudgetCode = $expenseBudgetCode;
		$this->apiParams["expenseBudgetCode"] = $expenseBudgetCode;
	}
	
	public function getAreaCopCode() {
		return $this->areaCopCode;
	}
	
	public function setAreaCopCode($areaCopCode) {
		$this->areaCopCode = $areaCopCode;
		$this->apiParams["areaCopCode"] = $areaCopCode;
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
	
	public function getPromotActivName() {
		return $this->promotActivName;
	}
	
	public function setPromotActivName($promotActivName) {
		$this->promotActivName = $promotActivName;
		$this->apiParams["promotActivName"] = $promotActivName;
	}
	
	public function getPromotAgreementName() {
		return $this->promotAgreementName;
	}
	
	public function setPromotAgreementName($promotAgreementName) {
		$this->promotAgreementName = $promotAgreementName;
		$this->apiParams["promotAgreementName"] = $promotAgreementName;
	}
	
	public function getPaymentLittleMount() {
		return $this->paymentLittleMount;
	}
	
	public function setPaymentLittleMount($paymentLittleMount) {
		$this->paymentLittleMount = $paymentLittleMount;
		$this->apiParams["paymentLittleMount"] = $paymentLittleMount;
	}
	
	public function getSettlementType() {
		return $this->settlementType;
	}
	
	public function setSettlementType($settlementType) {
		$this->settlementType = $settlementType;
		$this->apiParams["settlementType"] = $settlementType;
	}
	
	public function getInvoiceDate() {
		return $this->invoiceDate;
	}
	
	public function setInvoiceDate($invoiceDate) {
		$this->invoiceDate = $invoiceDate;
		$this->apiParams["invoiceDate"] = $invoiceDate;
	}
	
	public function getPayType() {
		return $this->payType;
	}
	
	public function setPayType($payType) {
		$this->payType = $payType;
		$this->apiParams["payType"] = $payType;
	}
	
	public function getInvoiceContent() {
		return $this->invoiceContent;
	}
	
	public function setInvoiceContent($invoiceContent) {
		$this->invoiceContent = $invoiceContent;
		$this->apiParams["invoiceContent"] = $invoiceContent;
	}
	
	public function getPayDate() {
		return $this->payDate;
	}
	
	public function setPayDate($payDate) {
		$this->payDate = $payDate;
		$this->apiParams["payDate"] = $payDate;
	}
	
	public function getHtmlContent() {
		return $this->htmlContent;
	}
	
	public function setHtmlContent($htmlContent) {
		$this->htmlContent = $htmlContent;
		$this->apiParams["htmlContent"] = $htmlContent;
	}
	
	public function getSignNatureContent() {
		return $this->signNatureContent;
	}
	
	public function setSignNatureContent($signNatureContent) {
		$this->signNatureContent = $signNatureContent;
		$this->apiParams["signNatureContent"] = $signNatureContent;
	}
	
	public function getApiMethodName(){
		return 'suning.application.promotion.apply';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
		RequestCheckUtil::checkNotNull($this->snCode, 'snCode');
		RequestCheckUtil::checkNotNull($this->supplierApplicationCode, 'supplierApplicationCode');
		RequestCheckUtil::checkNotNull($this->productBrand, 'productBrand');
		RequestCheckUtil::checkNotNull($this->areaCopCode, 'areaCopCode');
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->promotActivName, 'promotActivName');
		RequestCheckUtil::checkNotNull($this->paymentLittleMount, 'paymentLittleMount');
		RequestCheckUtil::checkNotNull($this->settlementType, 'settlementType');
		RequestCheckUtil::checkNotNull($this->invoiceContent, 'invoiceContent');
		RequestCheckUtil::checkNotNull($this->payDate, 'payDate');
		RequestCheckUtil::checkNotNull($this->htmlContent, 'htmlContent');
	}
	
	public function getBizName(){
		return "applyPromotionApplication";
	}
	
}

?>