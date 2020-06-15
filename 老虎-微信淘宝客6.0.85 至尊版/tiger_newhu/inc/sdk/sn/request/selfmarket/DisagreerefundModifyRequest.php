<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-29
 */
class DisagreerefundModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $fileName;
	
	/**
	 * 
	 */
	private $notReason;
	
	/**
	 * 
	 */
	private $omsOrderItemNo;
	
	/**
	 * 
	 */
	private $picProof;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getFileName() {
		return $this->fileName;
	}
	
	public function setFileName($fileName) {
		$this->fileName = $fileName;
		$this->apiParams["fileName"] = $fileName;
	}
	
	public function getNotReason() {
		return $this->notReason;
	}
	
	public function setNotReason($notReason) {
		$this->notReason = $notReason;
		$this->apiParams["notReason"] = $notReason;
	}
	
	public function getOmsOrderItemNo() {
		return $this->omsOrderItemNo;
	}
	
	public function setOmsOrderItemNo($omsOrderItemNo) {
		$this->omsOrderItemNo = $omsOrderItemNo;
		$this->apiParams["omsOrderItemNo"] = $omsOrderItemNo;
	}
	
	public function getPicProof() {
		return $this->picProof;
	}
	
	public function setPicProof($picProof) {
		$this->picProof = $picProof;
		$this->apiParams["picProof"] = $picProof;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.disagreerefund.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->notReason, 'notReason');
		RequestCheckUtil::checkNotNull($this->omsOrderItemNo, 'omsOrderItemNo');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "modifyDisagreerefund";
	}
	
}

?>