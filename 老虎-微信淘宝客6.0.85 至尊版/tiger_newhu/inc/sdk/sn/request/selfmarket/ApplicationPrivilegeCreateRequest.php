<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-7-18
 */
class ApplicationPrivilegeCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $applyHead;
	
	/**
	 * 
	 */
	private $areaDetail;
	
	/**
	 * 
	 */
	private $itemDetail;
	
	public function getApplyHead() {
		return $this->applyHead;
	}
	
	public function setApplyHead($applyHead) {
		$this->applyHead = $applyHead;
		$this->apiParams["applyHead"] = $applyHead->getApiParams();
	}
	
	public function getAreaDetail() {
		return $this->areaDetail;
	}
	
	public function setAreaDetail($areaDetail) {
		$this->areaDetail = $areaDetail;
		$arr = array();
		foreach ($areaDetail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["areaDetail"] = $arr;
	}
	
	public function getItemDetail() {
		return $this->itemDetail;
	}
	
	public function setItemDetail($itemDetail) {
		$this->itemDetail = $itemDetail;
		$arr = array();
		foreach ($itemDetail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["itemDetail"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.applicationprivilege.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "createApplicationPrivilege";
	}
	
}

class AreaDetail {

	private $apiParams = array();
	
	private $operateAreaCompany;
	
	private $operateAreaShoper;
	
	public function getOperateAreaCompany() {
		return $this->operateAreaCompany;
	}

	public function setOperateAreaCompany($operateAreaCompany) {
		$this->operateAreaCompany = $operateAreaCompany;
		$this->apiParams["operateAreaCompany"] = $operateAreaCompany;
	}
	
	public function getOperateAreaShoper() {
		return $this->operateAreaShoper;
	}

	public function setOperateAreaShoper($operateAreaShoper) {
		$this->operateAreaShoper = $operateAreaShoper;
		$this->apiParams["operateAreaShoper"] = $operateAreaShoper;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ApplyHead {

	private $apiParams = array();
	
	private $actionDescribe;
	
	private $applyLevel;
	
	private $areaCompanyCode;
	
	private $endDate;
	
	private $expenseBudgetCode;
	
	private $htmlContent;
	
	private $invoiceContent;
	
	private $payDate;
	
	private $payType;
	
	private $productBrand;
	
	private $settlementType;
	
	private $snCode;
	
	private $startDate;
	
	private $supplierApplicationCode;
	
	private $supplierCode;
	
	public function getActionDescribe() {
		return $this->actionDescribe;
	}

	public function setActionDescribe($actionDescribe) {
		$this->actionDescribe = $actionDescribe;
		$this->apiParams["actionDescribe"] = $actionDescribe;
	}
	
	public function getApplyLevel() {
		return $this->applyLevel;
	}

	public function setApplyLevel($applyLevel) {
		$this->applyLevel = $applyLevel;
		$this->apiParams["applyLevel"] = $applyLevel;
	}
	
	public function getAreaCompanyCode() {
		return $this->areaCompanyCode;
	}

	public function setAreaCompanyCode($areaCompanyCode) {
		$this->areaCompanyCode = $areaCompanyCode;
		$this->apiParams["areaCompanyCode"] = $areaCompanyCode;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}

	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getExpenseBudgetCode() {
		return $this->expenseBudgetCode;
	}

	public function setExpenseBudgetCode($expenseBudgetCode) {
		$this->expenseBudgetCode = $expenseBudgetCode;
		$this->apiParams["expenseBudgetCode"] = $expenseBudgetCode;
	}
	
	public function getHtmlContent() {
		return $this->htmlContent;
	}

	public function setHtmlContent($htmlContent) {
		$this->htmlContent = $htmlContent;
		$this->apiParams["htmlContent"] = $htmlContent;
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
	
	public function getPayType() {
		return $this->payType;
	}

	public function setPayType($payType) {
		$this->payType = $payType;
		$this->apiParams["payType"] = $payType;
	}
	
	public function getProductBrand() {
		return $this->productBrand;
	}

	public function setProductBrand($productBrand) {
		$this->productBrand = $productBrand;
		$this->apiParams["productBrand"] = $productBrand;
	}
	
	public function getSettlementType() {
		return $this->settlementType;
	}

	public function setSettlementType($settlementType) {
		$this->settlementType = $settlementType;
		$this->apiParams["settlementType"] = $settlementType;
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
	
	public function getSupplierApplicationCode() {
		return $this->supplierApplicationCode;
	}

	public function setSupplierApplicationCode($supplierApplicationCode) {
		$this->supplierApplicationCode = $supplierApplicationCode;
		$this->apiParams["supplierApplicationCode"] = $supplierApplicationCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ItemDetail {

	private $apiParams = array();
	
	private $channel;
	
	private $comments;
	
	private $favoureAmount;
	
	private $itemCode;
	
	private $wareHouse;
	
	private $chargeItem;
	
	public function getChannel() {
		return $this->channel;
	}

	public function setChannel($channel) {
		$this->channel = $channel;
		$this->apiParams["channel"] = $channel;
	}
	
	public function getComments() {
		return $this->comments;
	}

	public function setComments($comments) {
		$this->comments = $comments;
		$this->apiParams["comments"] = $comments;
	}
	
	public function getFavoureAmount() {
		return $this->favoureAmount;
	}

	public function setFavoureAmount($favoureAmount) {
		$this->favoureAmount = $favoureAmount;
		$this->apiParams["favoureAmount"] = $favoureAmount;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}

	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getWareHouse() {
		return $this->wareHouse;
	}

	public function setWareHouse($wareHouse) {
		$this->wareHouse = $wareHouse;
		$this->apiParams["wareHouse"] = $wareHouse;
	}
	
	public function getChargeItem() {
		return $this->chargeItem;
	}

	public function setChargeItem($chargeItem) {
		$this->chargeItem = $chargeItem;
		$this->apiParams["chargeItem"] = $chargeItem;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>