<?php
/**
 * 苏宁开放平台接口 - 展示位使用协议申请
 *
 * @author suning
 * @date   2016-4-19
 */
class ProtocolAddRequest  extends SuningRequest{
	
	/**
	 * 供应商编码。供应商编码。
	 */
	private $supplierCode;
	
	/**
	 * 供应商分公司代码。供应商支社代码。
	 */
	private $supplierBraComp;
	
	/**
	 * 供应商办事处。供应商办事处。支社对应办事处，可以同时输入多个办事处，逗号隔开。
	 */
	private $supplierOffice;
	
	/**
	 * 苏宁公司代码。乙方，费用发生的分公司代码，不允许填5400
	 */
	private $snCode;
	
	/**
	 * 供应商协议编号。供应商协议编号
	 */
	private $supplierApplicationCode;
	
	/**
	 * 费用预算单号。供应商费用预算单号
	 */
	private $expenseBudgetCode;
	
	/**
	 * 活动区域。活动区域。如果活动区域为全国则为5400；如果活动是分区域的，不允许跨大区操作，只能是苏宁一个大区内的公司. 分公司多个的时候分公司别发送文件
	 */
	private $areaCopCode;
	
	/**
	 * 签订日期。年月日
	 */
	private $contractDate;
	
	/**
	 * 合同编号。合同编号
	 */
	private $contractCode;
	
	/**
	 * 城市。城市
	 */
	private $adProtocolCity;
	
	/**
	 * 路。路
	 */
	private $adProtocolRode;
	
	/**
	 * 商场。商场
	 */
	private $adProtocolMarket;
	
	/**
	 * 楼。楼
	 */
	private $adProtocolBuilding;
	
	/**
	 * 面积。面积
	 */
	private $adProtocolArea;
	
	/**
	 * 使用开始日期。开始日期不能大于结束日期
	 */
	private $startDate;
	
	/**
	 * 使用结束日期。开始日期不能大于结束日期
	 */
	private $endDate;
	
	/**
	 * 使用费。小写，最多两位小数,分期合并金额必须等于合并总金额
	 */
	private $paymentLittleMount;
	
	/**
	 * 第一次支付金额。最多两位小数
	 */
	private $firstMonthAmount;
	
	/**
	 * 第二次支付月份。整数
	 */
	private $secondPayMonth;
	
	/**
	 * 第二次支付金额。最多两位小数
	 */
	private $nextMonthAmount;
	
	/**
	 * 第三次支付月份。整数
	 */
	private $lastPayMonth;
	
	/**
	 * 第三次支付金额。最多两位小数
	 */
	private $lastMonthAmount;
	
	/**
	 * 结算方式。1--电汇；3--从苏宁云商股份有限公司苏宁采购中心应付甲方的货款中扣减；；
	 */
	private $settlementType;
	
	/**
	 * 其它约定。不超过400字符
	 */
	private $otherProtocol;
	
	/**
	 * HTML内容。HTML内容。HTML ENCODE:UTF-8
	 */
	private $htmlContent;
	
	/**
	 * SIGNATURE 内容。签章密文。SIGNATURE ENCODE:UTF-8
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
	
	public function getContractDate() {
		return $this->contractDate;
	}
	
	public function setContractDate($contractDate) {
		$this->contractDate = $contractDate;
		$this->apiParams["contractDate"] = $contractDate;
	}
	
	public function getContractCode() {
		return $this->contractCode;
	}
	
	public function setContractCode($contractCode) {
		$this->contractCode = $contractCode;
		$this->apiParams["contractCode"] = $contractCode;
	}
	
	public function getAdProtocolCity() {
		return $this->adProtocolCity;
	}
	
	public function setAdProtocolCity($adProtocolCity) {
		$this->adProtocolCity = $adProtocolCity;
		$this->apiParams["adProtocolCity"] = $adProtocolCity;
	}
	
	public function getAdProtocolRode() {
		return $this->adProtocolRode;
	}
	
	public function setAdProtocolRode($adProtocolRode) {
		$this->adProtocolRode = $adProtocolRode;
		$this->apiParams["adProtocolRode"] = $adProtocolRode;
	}
	
	public function getAdProtocolMarket() {
		return $this->adProtocolMarket;
	}
	
	public function setAdProtocolMarket($adProtocolMarket) {
		$this->adProtocolMarket = $adProtocolMarket;
		$this->apiParams["adProtocolMarket"] = $adProtocolMarket;
	}
	
	public function getAdProtocolBuilding() {
		return $this->adProtocolBuilding;
	}
	
	public function setAdProtocolBuilding($adProtocolBuilding) {
		$this->adProtocolBuilding = $adProtocolBuilding;
		$this->apiParams["adProtocolBuilding"] = $adProtocolBuilding;
	}
	
	public function getAdProtocolArea() {
		return $this->adProtocolArea;
	}
	
	public function setAdProtocolArea($adProtocolArea) {
		$this->adProtocolArea = $adProtocolArea;
		$this->apiParams["adProtocolArea"] = $adProtocolArea;
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
	
	public function getPaymentLittleMount() {
		return $this->paymentLittleMount;
	}
	
	public function setPaymentLittleMount($paymentLittleMount) {
		$this->paymentLittleMount = $paymentLittleMount;
		$this->apiParams["paymentLittleMount"] = $paymentLittleMount;
	}
	
	public function getFirstMonthAmount() {
		return $this->firstMonthAmount;
	}
	
	public function setFirstMonthAmount($firstMonthAmount) {
		$this->firstMonthAmount = $firstMonthAmount;
		$this->apiParams["firstMonthAmount"] = $firstMonthAmount;
	}
	
	public function getSecondPayMonth() {
		return $this->secondPayMonth;
	}
	
	public function setSecondPayMonth($secondPayMonth) {
		$this->secondPayMonth = $secondPayMonth;
		$this->apiParams["secondPayMonth"] = $secondPayMonth;
	}
	
	public function getNextMonthAmount() {
		return $this->nextMonthAmount;
	}
	
	public function setNextMonthAmount($nextMonthAmount) {
		$this->nextMonthAmount = $nextMonthAmount;
		$this->apiParams["nextMonthAmount"] = $nextMonthAmount;
	}
	
	public function getLastPayMonth() {
		return $this->lastPayMonth;
	}
	
	public function setLastPayMonth($lastPayMonth) {
		$this->lastPayMonth = $lastPayMonth;
		$this->apiParams["lastPayMonth"] = $lastPayMonth;
	}
	
	public function getLastMonthAmount() {
		return $this->lastMonthAmount;
	}
	
	public function setLastMonthAmount($lastMonthAmount) {
		$this->lastMonthAmount = $lastMonthAmount;
		$this->apiParams["lastMonthAmount"] = $lastMonthAmount;
	}
	
	public function getSettlementType() {
		return $this->settlementType;
	}
	
	public function setSettlementType($settlementType) {
		$this->settlementType = $settlementType;
		$this->apiParams["settlementType"] = $settlementType;
	}
	
	public function getOtherProtocol() {
		return $this->otherProtocol;
	}
	
	public function setOtherProtocol($otherProtocol) {
		$this->otherProtocol = $otherProtocol;
		$this->apiParams["otherProtocol"] = $otherProtocol;
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
		return 'suning.application.protocol.apply';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
		RequestCheckUtil::checkNotNull($this->snCode, 'snCode');
		RequestCheckUtil::checkNotNull($this->supplierApplicationCode, 'supplierApplicationCode');
		RequestCheckUtil::checkNotNull($this->areaCopCode, 'areaCopCode');
		RequestCheckUtil::checkNotNull($this->adProtocolCity, 'adProtocolCity');
		RequestCheckUtil::checkNotNull($this->adProtocolRode, 'adProtocolRode');
		RequestCheckUtil::checkNotNull($this->adProtocolMarket, 'adProtocolMarket');
		RequestCheckUtil::checkNotNull($this->adProtocolBuilding, 'adProtocolBuilding');
		RequestCheckUtil::checkNotNull($this->adProtocolArea, 'adProtocolArea');
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->paymentLittleMount, 'paymentLittleMount');
		RequestCheckUtil::checkNotNull($this->settlementType, 'settlementType');
		RequestCheckUtil::checkNotNull($this->htmlContent, 'htmlContent');
	}
	
	public function getBizName(){
		return "applyProtocolApplication";
	}
	
}

?>