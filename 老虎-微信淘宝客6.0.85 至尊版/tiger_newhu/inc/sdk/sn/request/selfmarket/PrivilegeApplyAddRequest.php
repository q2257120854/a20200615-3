<?php
/**
 * 苏宁开放平台接口 - 优惠单活动函申请
 *
 * @author suning
 * @date   2016-4-19
 */
class PrivilegeApplyAddRequest  extends SuningRequest{
	
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
		return 'suning.application.privilege.apply';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->applyHead, 'applyHead');
		RequestCheckUtil::checkNotNull($this->areaDetail, 'areaDetail');
		RequestCheckUtil::checkNotNull($this->itemDetail, 'itemDetail');
	}
	
	public function getBizName(){
		return "applyPrivilegeApplication";
	}
	
}

class ApplyHead {

	private $apiParams = array();
	
	private $supplierCode;
	
	private $supplierBraComp;
	
	private $supplierOffice;
	
	private $snCode;
	
	private $productBrand;
	
	private $expenseBudgetCode;
	
	private $areaCopCode;
	
	private $supplierApplicationCode;
	
	private $startDate;
	
	private $endDate;
	
	private $applyLevel;
	
	private $actionDescribe;
	
	private $settlementType;
	
	private $payType;
	
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
	
	public function getSupplierApplicationCode() {
		return $this->supplierApplicationCode;
	}

	public function setSupplierApplicationCode($supplierApplicationCode) {
		$this->supplierApplicationCode = $supplierApplicationCode;
		$this->apiParams["supplierApplicationCode"] = $supplierApplicationCode;
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
	
	public function getApplyLevel() {
		return $this->applyLevel;
	}

	public function setApplyLevel($applyLevel) {
		$this->applyLevel = $applyLevel;
		$this->apiParams["applyLevel"] = $applyLevel;
	}
	
	public function getActionDescribe() {
		return $this->actionDescribe;
	}

	public function setActionDescribe($actionDescribe) {
		$this->actionDescribe = $actionDescribe;
		$this->apiParams["actionDescribe"] = $actionDescribe;
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

class ItemDetail {

	private $apiParams = array();
	
	private $wareHouse;
	
	private $channel;
	
	private $itemCode;
	
	private $chargeItem;
	
	private $favoureAmount;
	
	private $comments;
	
	public function getWareHouse() {
		return $this->wareHouse;
	}

	public function setWareHouse($wareHouse) {
		$this->wareHouse = $wareHouse;
		$this->apiParams["wareHouse"] = $wareHouse;
	}
	
	public function getChannel() {
		return $this->channel;
	}

	public function setChannel($channel) {
		$this->channel = $channel;
		$this->apiParams["channel"] = $channel;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}

	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getChargeItem() {
		return $this->chargeItem;
	}

	public function setChargeItem($chargeItem) {
		$this->chargeItem = $chargeItem;
		$this->apiParams["chargeItem"] = $chargeItem;
	}
	
	public function getFavoureAmount() {
		return $this->favoureAmount;
	}

	public function setFavoureAmount($favoureAmount) {
		$this->favoureAmount = $favoureAmount;
		$this->apiParams["favoureAmount"] = $favoureAmount;
	}
	
	public function getComments() {
		return $this->comments;
	}

	public function setComments($comments) {
		$this->comments = $comments;
		$this->apiParams["comments"] = $comments;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>