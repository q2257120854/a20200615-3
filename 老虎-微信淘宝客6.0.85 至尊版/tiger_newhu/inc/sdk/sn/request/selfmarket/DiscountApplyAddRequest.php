<?php
/**
 * 苏宁开放平台接口 - 商业折让对账单申请
 *
 * @author suning
 * @date   2016-4-19
 */
class DiscountApplyAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $applyHead;
	
	/**
	 * 
	 */
	private $applyDetail;
	
	public function getApplyHead() {
		return $this->applyHead;
	}
	
	public function setApplyHead($applyHead) {
		$this->applyHead = $applyHead;
		$this->apiParams["applyHead"] = $applyHead->getApiParams();
	}
	
	public function getApplyDetail() {
		return $this->applyDetail;
	}
	
	public function setApplyDetail($applyDetail) {
		$this->applyDetail = $applyDetail;
		$arr = array();
		foreach ($applyDetail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["applyDetail"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.application.discount.apply';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->applyHead, 'applyHead');
		RequestCheckUtil::checkNotNull($this->applyDetail, 'applyDetail');
	}
	
	public function getBizName(){
		return "applyDiscountApplication";
	}
	
}

class ApplyHead {

	private $apiParams = array();
	
	private $supplierCode;
	
	private $supplierBraComp;
	
	private $supplierOffice;
	
	private $snCode;
	
	private $supplierApplicationCode;
	
	private $productBrand;
	
	private $expenseBudgetCode;
	
	private $areaCopCode;
	
	private $actionLettersCode;
	
	private $chargeBudgetCode;
	
	private $startDate;
	
	private $endDate;
	
	private $actionLettersContent;
	
	private $contractContent;
	
	private $paymentLittleMount;
	
	private $settlementType;
	
	private $payType;
	
	private $payDate;
	
	private $invoiceContent;
	
	private $htmlContent;
	
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
	
	public function getActionLettersCode() {
		return $this->actionLettersCode;
	}

	public function setActionLettersCode($actionLettersCode) {
		$this->actionLettersCode = $actionLettersCode;
		$this->apiParams["actionLettersCode"] = $actionLettersCode;
	}
	
	public function getChargeBudgetCode() {
		return $this->chargeBudgetCode;
	}

	public function setChargeBudgetCode($chargeBudgetCode) {
		$this->chargeBudgetCode = $chargeBudgetCode;
		$this->apiParams["chargeBudgetCode"] = $chargeBudgetCode;
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
	
	public function getActionLettersContent() {
		return $this->actionLettersContent;
	}

	public function setActionLettersContent($actionLettersContent) {
		$this->actionLettersContent = $actionLettersContent;
		$this->apiParams["actionLettersContent"] = $actionLettersContent;
	}
	
	public function getContractContent() {
		return $this->contractContent;
	}

	public function setContractContent($contractContent) {
		$this->contractContent = $contractContent;
		$this->apiParams["contractContent"] = $contractContent;
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
		$this->payDate= $payDate;
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
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ApplyDetail {

	private $apiParams = array();
	
	private $chargeItem;
	
	private $itemCode;
	
	private $wareNumber;
	
	private $onePrice;
	
	private $salesAmount;
	
	private $agioRate;
	
	private $settlementAmount;
	
	public function getChargeItem() {
		return $this->chargeItem;
	}

	public function setChargeItem($chargeItem) {
		$this->chargeItem = $chargeItem;
		$this->apiParams["chargeItem"] = $chargeItem;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}

	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getWareNumber() {
		return $this->wareNumber;
	}

	public function setWareNumber($wareNumber) {
		$this->wareNumber = $wareNumber;
		$this->apiParams["wareNumber"] = $wareNumber;
	}
	
	public function getOnePrice() {
		return $this->onePrice;
	}

	public function setOnePrice($onePrice) {
		$this->onePrice = $onePrice;
		$this->apiParams["onePrice"] = $onePrice;
	}
	
	public function getSalesAmount() {
		return $this->salesAmount;
	}

	public function setSalesAmount($salesAmount) {
		$this->salesAmount = $salesAmount;
		$this->apiParams["salesAmount"] = $salesAmount;
	}
	
	public function getAgioRate() {
		return $this->agioRate;
	}

	public function setAgioRate($agioRate) {
		$this->agioRate = $agioRate;
		$this->apiParams["agioRate"] = $agioRate;
	}
	
	public function getSettlementAmount() {
		return $this->settlementAmount;
	}

	public function setSettlementAmount($settlementAmount) {
		$this->settlementAmount = $settlementAmount;
		$this->apiParams["settlementAmount"] = $settlementAmount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>