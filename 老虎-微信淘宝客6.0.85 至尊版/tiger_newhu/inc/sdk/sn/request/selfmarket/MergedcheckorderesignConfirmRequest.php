<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-5-29
 */
class MergedcheckorderesignConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $head;
	
	/**
	 * 
	 */
	private $checkOrderList;
	
	public function getHead() {
		return $this->head;
	}
	
	public function setHead($head) {
		$this->head = $head;
		$this->apiParams["head"] = $head->getApiParams();
	}
	
	public function getCheckOrderList() {
		return $this->checkOrderList;
	}
	
	public function setCheckOrderList($checkOrderList) {
		$this->checkOrderList = $checkOrderList;
		$arr = array();
		foreach ($checkOrderList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["checkOrderList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.mergedcheckorderesign.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "confirmMergedcheckorderesign";
	}
	
}

class CheckOrderList {

	private $apiParams = array();
	
	private $applicationCode;
	
	private $applyCode;
	
	public function getApplicationCode() {
		return $this->applicationCode;
	}

	public function setApplicationCode($applicationCode) {
		$this->applicationCode = $applicationCode;
		$this->apiParams["applicationCode"] = $applicationCode;
	}
	
	public function getApplyCode() {
		return $this->applyCode;
	}

	public function setApplyCode($applyCode) {
		$this->applyCode = $applyCode;
		$this->apiParams["applyCode"] = $applyCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class Head {

	private $apiParams = array();
	
	private $comments;
	
	private $htmlContent;
	
	private $modelType;
	
	private $settlementDate;
	
	private $settlementType;
	
	private $signDate;
	
	private $signNatureContent;
	
	private $supplierCheckOrderCode;
	
	private $supplierCode;
	
	public function getComments() {
		return $this->comments;
	}

	public function setComments($comments) {
		$this->comments = $comments;
		$this->apiParams["comments"] = $comments;
	}
	
	public function getHtmlContent() {
		return $this->htmlContent;
	}

	public function setHtmlContent($htmlContent) {
		$this->htmlContent = $htmlContent;
		$this->apiParams["htmlContent"] = $htmlContent;
	}
	
	public function getModelType() {
		return $this->modelType;
	}

	public function setModelType($modelType) {
		$this->modelType = $modelType;
		$this->apiParams["modelType"] = $modelType;
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
	
	public function getSignDate() {
		return $this->signDate;
	}

	public function setSignDate($signDate) {
		$this->signDate = $signDate;
		$this->apiParams["signDate"] = $signDate;
	}
	
	public function getSignNatureContent() {
		return $this->signNatureContent;
	}

	public function setSignNatureContent($signNatureContent) {
		$this->signNatureContent = $signNatureContent;
		$this->apiParams["signNatureContent"] = $signNatureContent;
	}
	
	public function getSupplierCheckOrderCode() {
		return $this->supplierCheckOrderCode;
	}

	public function setSupplierCheckOrderCode($supplierCheckOrderCode) {
		$this->supplierCheckOrderCode = $supplierCheckOrderCode;
		$this->apiParams["supplierCheckOrderCode"] = $supplierCheckOrderCode;
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