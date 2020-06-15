<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class MembervatinvoiceregisterCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $channelCode;
	
	/**
	 * 
	 */
	private $merchantCustNo;
	
	/**
	 * 
	 */
	private $regAddr;
	
	/**
	 * 
	 */
	private $regBankAccount;
	
	/**
	 * 
	 */
	private $regBankName;
	
	/**
	 * 
	 */
	private $regCompanyName;
	
	/**
	 * 
	 */
	private $regPhone;
	
	/**
	 * 
	 */
	private $submitFlag;
	
	/**
	 * 
	 */
	private $taxationRegNo;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		$this->apiParams["channelCode"] = $channelCode;
	}
	
	public function getMerchantCustNo() {
		return $this->merchantCustNo;
	}
	
	public function setMerchantCustNo($merchantCustNo) {
		$this->merchantCustNo = $merchantCustNo;
		$this->apiParams["merchantCustNo"] = $merchantCustNo;
	}
	
	public function getRegAddr() {
		return $this->regAddr;
	}
	
	public function setRegAddr($regAddr) {
		$this->regAddr = $regAddr;
		$this->apiParams["regAddr"] = $regAddr;
	}
	
	public function getRegBankAccount() {
		return $this->regBankAccount;
	}
	
	public function setRegBankAccount($regBankAccount) {
		$this->regBankAccount = $regBankAccount;
		$this->apiParams["regBankAccount"] = $regBankAccount;
	}
	
	public function getRegBankName() {
		return $this->regBankName;
	}
	
	public function setRegBankName($regBankName) {
		$this->regBankName = $regBankName;
		$this->apiParams["regBankName"] = $regBankName;
	}
	
	public function getRegCompanyName() {
		return $this->regCompanyName;
	}
	
	public function setRegCompanyName($regCompanyName) {
		$this->regCompanyName = $regCompanyName;
		$this->apiParams["regCompanyName"] = $regCompanyName;
	}
	
	public function getRegPhone() {
		return $this->regPhone;
	}
	
	public function setRegPhone($regPhone) {
		$this->regPhone = $regPhone;
		$this->apiParams["regPhone"] = $regPhone;
	}
	
	public function getSubmitFlag() {
		return $this->submitFlag;
	}
	
	public function setSubmitFlag($submitFlag) {
		$this->submitFlag = $submitFlag;
		$this->apiParams["submitFlag"] = $submitFlag;
	}
	
	public function getTaxationRegNo() {
		return $this->taxationRegNo;
	}
	
	public function setTaxationRegNo($taxationRegNo) {
		$this->taxationRegNo = $taxationRegNo;
		$this->apiParams["taxationRegNo"] = $taxationRegNo;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.membervatinvoiceregister.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->regAddr, 'regAddr');
		RequestCheckUtil::checkNotNull($this->regBankAccount, 'regBankAccount');
		RequestCheckUtil::checkNotNull($this->regBankName, 'regBankName');
		RequestCheckUtil::checkNotNull($this->regCompanyName, 'regCompanyName');
		RequestCheckUtil::checkNotNull($this->regPhone, 'regPhone');
		RequestCheckUtil::checkNotNull($this->submitFlag, 'submitFlag');
		RequestCheckUtil::checkNotNull($this->taxationRegNo, 'taxationRegNo');
	}
	
	public function getBizName(){
		return "createMembervatinvoiceregister";
	}
	
}

?>