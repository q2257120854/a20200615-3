<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-29
 */
class AgreerejectedModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $agreeMemo;
	
	/**
	 * 
	 */
	private $backinDate;
	
	/**
	 * 
	 */
	private $getBackPerson;
	
	/**
	 * 
	 */
	private $getBackPersonTel;
	
	/**
	 * 
	 */
	private $omsOrderItemNo;
	
	/**
	 * 
	 */
	private $returnBackType;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	/**
	 * 
	 */
	private $wareHouseCode;
	
	public function getAgreeMemo() {
		return $this->agreeMemo;
	}
	
	public function setAgreeMemo($agreeMemo) {
		$this->agreeMemo = $agreeMemo;
		$this->apiParams["agreeMemo"] = $agreeMemo;
	}
	
	public function getBackinDate() {
		return $this->backinDate;
	}
	
	public function setBackinDate($backinDate) {
		$this->backinDate = $backinDate;
		$this->apiParams["backinDate"] = $backinDate;
	}
	
	public function getGetBackPerson() {
		return $this->getBackPerson;
	}
	
	public function setGetBackPerson($getBackPerson) {
		$this->getBackPerson = $getBackPerson;
		$this->apiParams["getBackPerson"] = $getBackPerson;
	}
	
	public function getGetBackPersonTel() {
		return $this->getBackPersonTel;
	}
	
	public function setGetBackPersonTel($getBackPersonTel) {
		$this->getBackPersonTel = $getBackPersonTel;
		$this->apiParams["getBackPersonTel"] = $getBackPersonTel;
	}
	
	public function getOmsOrderItemNo() {
		return $this->omsOrderItemNo;
	}
	
	public function setOmsOrderItemNo($omsOrderItemNo) {
		$this->omsOrderItemNo = $omsOrderItemNo;
		$this->apiParams["omsOrderItemNo"] = $omsOrderItemNo;
	}
	
	public function getReturnBackType() {
		return $this->returnBackType;
	}
	
	public function setReturnBackType($returnBackType) {
		$this->returnBackType = $returnBackType;
		$this->apiParams["returnBackType"] = $returnBackType;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getWareHouseCode() {
		return $this->wareHouseCode;
	}
	
	public function setWareHouseCode($wareHouseCode) {
		$this->wareHouseCode = $wareHouseCode;
		$this->apiParams["wareHouseCode"] = $wareHouseCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.agreerejected.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->omsOrderItemNo, 'omsOrderItemNo');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "modifyAgreerejected";
	}
	
}

?>