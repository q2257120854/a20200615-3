<?php
/**
 * 苏宁开放平台接口 - 销售补差确认函申请
 *
 * @author suning
 * @date   2016-4-19
 */
class BalanceApplyAddRequest  extends SuningRequest{
	
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
		return 'suning.application.balance.apply';
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
		return "applyBalanceApplication";
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
	
	private $startDate;
	
	private $endDate;
	
	private $discountLittleMount;
	
	private $settlementType;
	
	private $payType;
	
	private $invoiceDate;
	
	private $invoiceContent;
	
	private $payDate;
	
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
	
	public function getDiscountLittleMount() {
		return $this->discountLittleMount;
	}

	public function setDiscountLittleMount($discountLittleMount) {
		$this->discountLittleMount = $discountLittleMount;
		$this->apiParams["discountLittleMount"] = $discountLittleMount;
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
	
	public function getInvoiceDate() {
		return $this->invoiceDate;
	}

	public function setInvoiceDate($invoiceDate) {
		$this->invoiceDate = $invoiceDate;
		$this->apiParams["invoiceDate"] = $invoiceDate;
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
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ApplyDetail {

	private $apiParams = array();
	
	private $invoiceCode;
	
	private $lineItem;
	
	private $expStartDate;
	
	private $expEndDate;
	
	private $relationCompCode;
	
	private $expDetail;
	
	private $settlementAmount;
	
	public function getInvoiceCode() {
		return $this->invoiceCode;
	}

	public function setInvoiceCode($invoiceCode) {
		$this->invoiceCode = $invoiceCode;
		$this->apiParams["invoiceCode"] = $invoiceCode;
	}
	
	public function getLineItem() {
		return $this->lineItem;
	}

	public function setLineItem($lineItem) {
		$this->lineItem = $lineItem;
		$this->apiParams["lineItem"] = $lineItem;
	}
	
	public function getExpStartDate() {
		return $this->expStartDate;
	}

	public function setExpStartDate($expStartDate) {
		$this->expStartDate = $expStartDate;
		$this->apiParams["expStartDate"] = $expStartDate;
	}
	
	public function getExpEndDate() {
		return $this->expEndDate;
	}

	public function setExpEndDate($expEndDate) {
		$this->expEndDate = $expEndDate;
		$this->apiParams["expEndDate"] = $expEndDate;
	}
	
	public function getRelationCompCode() {
		return $this->relationCompCode;
	}

	public function setRelationCompCode($relationCompCode) {
		$this->relationCompCode = $relationCompCode;
		$this->apiParams["relationCompCode"] = $relationCompCode;
	}
	
	public function getExpDetail() {
		return $this->expDetail;
	}

	public function setExpDetail($expDetail) {
		$this->expDetail = $expDetail;
		$this->apiParams["expDetail"] = $expDetail;
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