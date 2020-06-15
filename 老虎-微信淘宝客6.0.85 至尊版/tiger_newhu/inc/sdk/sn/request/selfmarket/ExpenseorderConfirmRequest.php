<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-5-29
 */
class ExpenseorderConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $detail;
	
	/**
	 * 
	 */
	private $head;
	
	public function getDetail() {
		return $this->detail;
	}
	
	public function setDetail($detail) {
		$this->detail = $detail;
		$arr = array();
		foreach ($detail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["detail"] = $arr;
	}
	
	public function getHead() {
		return $this->head;
	}
	
	public function setHead($head) {
		$this->head = $head;
		$this->apiParams["head"] = $head->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.expenseorder.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "confirmExpenseorder";
	}
	
}

class Detail {

	private $apiParams = array();
	
	private $blanceAmount;
	
	private $blanceQty;
	
	private $blanceSalesAmount;
	
	private $itemCode;
	
	private $relatedShop;
	
	private $relatedWareHouse;
	
	public function getBlanceAmount() {
		return $this->blanceAmount;
	}

	public function setBlanceAmount($blanceAmount) {
		$this->blanceAmount = $blanceAmount;
		$this->apiParams["blanceAmount"] = $blanceAmount;
	}
	
	public function getBlanceQty() {
		return $this->blanceQty;
	}

	public function setBlanceQty($blanceQty) {
		$this->blanceQty = $blanceQty;
		$this->apiParams["blanceQty"] = $blanceQty;
	}
	
	public function getBlanceSalesAmount() {
		return $this->blanceSalesAmount;
	}

	public function setBlanceSalesAmount($blanceSalesAmount) {
		$this->blanceSalesAmount = $blanceSalesAmount;
		$this->apiParams["blanceSalesAmount"] = $blanceSalesAmount;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}

	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getRelatedShop() {
		return $this->relatedShop;
	}

	public function setRelatedShop($relatedShop) {
		$this->relatedShop = $relatedShop;
		$this->apiParams["relatedShop"] = $relatedShop;
	}
	
	public function getRelatedWareHouse() {
		return $this->relatedWareHouse;
	}

	public function setRelatedWareHouse($relatedWareHouse) {
		$this->relatedWareHouse = $relatedWareHouse;
		$this->apiParams["relatedWareHouse"] = $relatedWareHouse;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class Head {

	private $apiParams = array();
	
	private $applyCode;
	
	private $comments;
	
	private $modelType;
	
	private $operateType;
	
	private $settlementDate;
	
	private $settlementType;
	
	private $supplierCheckAmount;
	
	private $supplierCheckQty;
	
	private $supplierCode;
	
	public function getApplyCode() {
		return $this->applyCode;
	}

	public function setApplyCode($applyCode) {
		$this->applyCode = $applyCode;
		$this->apiParams["applyCode"] = $applyCode;
	}
	
	public function getComments() {
		return $this->comments;
	}

	public function setComments($comments) {
		$this->comments = $comments;
		$this->apiParams["comments"] = $comments;
	}
	
	public function getModelType() {
		return $this->modelType;
	}

	public function setModelType($modelType) {
		$this->modelType = $modelType;
		$this->apiParams["modelType"] = $modelType;
	}
	
	public function getOperateType() {
		return $this->operateType;
	}

	public function setOperateType($operateType) {
		$this->operateType = $operateType;
		$this->apiParams["operateType"] = $operateType;
	}
	
	public function getSettlementDate() {
		return $this->settlementDate;
	}

	public function setSettlementDate($settlementDate) {
		$this->settlementDate = $settlementDate;
		$this->apiParams["settlementDate"] = $settlementDate;
	}
	
	public function getSettlementType() {
		return $this->settlementType;
	}

	public function setSettlementType($settlementType) {
		$this->settlementType = $settlementType;
		$this->apiParams["settlementType"] = $settlementType;
	}
	
	public function getSupplierCheckAmount() {
		return $this->supplierCheckAmount;
	}

	public function setSupplierCheckAmount($supplierCheckAmount) {
		$this->supplierCheckAmount = $supplierCheckAmount;
		$this->apiParams["supplierCheckAmount"] = $supplierCheckAmount;
	}
	
	public function getSupplierCheckQty() {
		return $this->supplierCheckQty;
	}

	public function setSupplierCheckQty($supplierCheckQty) {
		$this->supplierCheckQty = $supplierCheckQty;
		$this->apiParams["supplierCheckQty"] = $supplierCheckQty;
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

?>