<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-29
 */
class AgreeexchangeUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $backinDate;
	
	/**
	 * 
	 */
	private $exchangeNo;
	
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
	private $memo;
	
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
	
	public function getBackinDate() {
		return $this->backinDate;
	}
	
	public function setBackinDate($backinDate) {
		$this->backinDate = $backinDate;
		$this->apiParams["backinDate"] = $backinDate;
	}
	
	public function getExchangeNo() {
		return $this->exchangeNo;
	}
	
	public function setExchangeNo($exchangeNo) {
		$this->exchangeNo = $exchangeNo;
		$this->apiParams["exchangeNo"] = $exchangeNo;
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
	
	public function getMemo() {
		return $this->memo;
	}
	
	public function setMemo($memo) {
		$this->memo = $memo;
		$this->apiParams["memo"] = $memo;
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
		return 'suning.selfmarket.agreeexchange.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->exchangeNo, 'exchangeNo');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "updateAgreeexchange";
	}
	
}

?>