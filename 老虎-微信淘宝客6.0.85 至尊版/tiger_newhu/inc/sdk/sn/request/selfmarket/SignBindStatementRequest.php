<?php
/**
 * 苏宁开放平台接口 - 合并对账签章
 *
 * @author suning
 * @date   2016-4-19
 */
class SignBindStatementRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $signHead;
	
	/**
	 * 
	 */
	private $signDetail;
	
	public function getSignHead() {
		return $this->signHead;
	}
	
	public function setSignHead($signHead) {
		$this->signHead = $signHead;
		$this->apiParams["signHead"] = $signHead->getApiParams();
	}
	
	public function getSignDetail() {
		return $this->signDetail;
	}
	
	public function setSignDetail($signDetail) {
		$this->signDetail = $signDetail;
		$arr = array();
		foreach ($signDetail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["signDetail"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.bindstatement.sign';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->signHead, 'signHead');
		RequestCheckUtil::checkNotNull($this->signDetail, 'signDetail');
	}
	
	public function getBizName(){
		return "signBindStatement";
	}
	
}

class SignHead {

	private $apiParams = array();
	
	private $supplierCheckOrderCode;
	
	private $modelType;
	
	private $supplierCode;
	
	private $supplierName;
	
	private $applyFeed;
	
	private $settlementType;
	
	private $settlementDate;
	
	private $comments;
	
	private $signDate;
	
	private $htmlContent;
	
	private $signNatureContent;
	
	public function getSupplierCheckOrderCode() {
		return $this->supplierCheckOrderCode;
	}

	public function setSupplierCheckOrderCode($supplierCheckOrderCode) {
		$this->supplierCheckOrderCode = $supplierCheckOrderCode;
		$this->apiParams["supplierCheckOrderCode"] = $supplierCheckOrderCode;
	}
	
	public function getModelType() {
		return $this->modelType;
	}

	public function setModelType($modelType) {
		$this->modelType = $modelType;
		$this->apiParams["modelType"] = $modelType;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getSupplierName() {
		return $this->supplierName;
	}

	public function setSupplierName($supplierName) {
		$this->supplierName = $supplierName;
		$this->apiParams["supplierName"] = $supplierName;
	}
	
	public function getApplyFeed() {
		return $this->applyFeed;
	}

	public function setApplyFeed($applyFeed) {
		$this->applyFeed = $applyFeed;
		$this->apiParams["applyFeed"] = $applyFeed;
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
	
	public function getSignDate() {
		return $this->signDate;
	}

	public function setSignDate($signDate) {
		$this->signDate = $signDate;
		$this->apiParams["signDate"] = $signDate;
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

class SignDetail {

	private $apiParams = array();
	
	private $applyCode;
	
	private $applicationCode;
	
	public function getApplyCode() {
		return $this->applyCode;
	}

	public function setApplyCode($applyCode) {
		$this->applyCode = $applyCode;
		$this->apiParams["applyCode"] = $applyCode;
	}
	
	public function getApplicationCode() {
		return $this->applicationCode;
	}

	public function setApplicationCode($applicationCode) {
		$this->applicationCode = $applicationCode;
		$this->apiParams["applicationCode"] = $applicationCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>