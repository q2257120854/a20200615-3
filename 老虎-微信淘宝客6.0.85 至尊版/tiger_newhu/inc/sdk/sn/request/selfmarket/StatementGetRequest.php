<?php
/**
 * 苏宁开放平台接口 - 返利对账单金额确认
 *
 * @author suning
 * @date   2016-4-19
 */
class StatementGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $confirmHead;
	
	/**
	 * 
	 */
	private $confirmDetail;
	
	public function getConfirmHead() {
		return $this->confirmHead;
	}
	
	public function setConfirmHead($confirmHead) {
		$this->confirmHead = $confirmHead;
		$this->apiParams["confirmHead"] = $confirmHead->getApiParams();
	}
	
	public function getConfirmDetail() {
		return $this->confirmDetail;
	}
	
	public function setConfirmDetail($confirmDetail) {
		$this->confirmDetail = $confirmDetail;
		$arr = array();
		foreach ($confirmDetail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["confirmDetail"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.statement.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->confirmHead, 'confirmHead');
		RequestCheckUtil::checkNotNull($this->confirmDetail, 'confirmDetail');
	}
	
	public function getBizName(){
		return "confirmStatement";
	}
	
}

class ConfirmHead {

	private $apiParams = array();
	
	private $supplierCode;
	
	private $applyCode;
	
	private $modelType;
	
	private $settlementType;
	
	private $settlementDate;
	
	private $comments;
	
	private $allCheckQty;
	
	private $allCheckedAmount;
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApplyCode() {
		return $this->applyCode;
	}

	public function setApplyCode($applyCode) {
		$this->applyCode = $applyCode;
		$this->apiParams["applyCode"] = $applyCode;
	}
	
	public function getModelType() {
		return $this->modelType;
	}

	public function setModelType($modelType) {
		$this->modelType = $modelType;
		$this->apiParams["modelType"] = $modelType;
	}
	
	public function getSettlementType() {
		return $this->settlementType;
	}

	public function setSettlementType($settlementType) {
		$this->settlementType = $settlementType;
		$this->apiParams["settlementType"] = $settlementType;
	}
	
	public function getSettlementDate() {
		return $this->settlementDate;
	}

	public function setSettlementDate($settlementDate) {
		$this->settlementDate = $settlementDate;
		$this->apiParams["settlementDate"] = $settlementDate;
	}
	
	public function getComments() {
		return $this->comments;
	}

	public function setComments($comments) {
		$this->comments = $comments;
		$this->apiParams["comments"] = $comments;
	}
	
	public function getAllCheckQty() {
		return $this->allCheckQty;
	}

	public function setAllCheckQty($allCheckQty) {
		$this->allCheckQty = $allCheckQty;
		$this->apiParams["allCheckQty"] = $allCheckQty;
	}
	
	public function getAllCheckedAmount() {
		return $this->allCheckedAmount;
	}

	public function setAllCheckedAmount($allCheckedAmount) {
		$this->allCheckedAmount = $allCheckedAmount;
		$this->apiParams["allCheckedAmount"] = $allCheckedAmount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ConfirmDetail {

	private $apiParams = array();
	
	private $relatedOrgCode;
	
	private $relatedWareHouse;
	
	private $itemCode;
	
	private $blanceSalesAmount;
	
	private $blanceQty;
	
	private $blanceAmount;
	
	public function getRelatedOrgCode() {
		return $this->relatedOrgCode;
	}

	public function setRelatedOrgCode($relatedOrgCode) {
		$this->relatedOrgCode = $relatedOrgCode;
		$this->apiParams["relatedOrgCode"] = $relatedOrgCode;
	}
	
	public function getRelatedWareHouse() {
		return $this->relatedWareHouse;
	}

	public function setRelatedWareHouse($relatedWareHouse) {
		$this->relatedWareHouse = $relatedWareHouse;
		$this->apiParams["relatedWareHouse"] = $relatedWareHouse;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}

	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getBlanceSalesAmount() {
		return $this->blanceSalesAmount;
	}

	public function setBlanceSalesAmount($blanceSalesAmount) {
		$this->blanceSalesAmount = $blanceSalesAmount;
		$this->apiParams["blanceSalesAmount"] = $blanceSalesAmount;
	}
	
	public function getBlanceQty() {
		return $this->blanceQty;
	}

	public function setBlanceQty($blanceQty) {
		$this->blanceQty = $blanceQty;
		$this->apiParams["blanceQty"] = $blanceQty;
	}
	
	public function getBlanceAmount() {
		return $this->blanceAmount;
	}

	public function setBlanceAmount($blanceAmount) {
		$this->blanceAmount = $blanceAmount;
		$this->apiParams["blanceAmount"] = $blanceAmount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>