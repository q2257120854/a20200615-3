<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-22
 */
class InvmacinfoGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $extensionNumber;
	
	/**
	 * 
	 */
	private $payeeRegisterNo;
	
	/**
	 * 
	 */
	private $platformCoding;
	
	/**
	 * 
	 */
	private $taxClearState;
	
	/**
	 * 
	 */
	private $taxCopyState;
	
	public function getExtensionNumber() {
		return $this->extensionNumber;
	}
	
	public function setExtensionNumber($extensionNumber) {
		$this->extensionNumber = $extensionNumber;
		$this->apiParams["extensionNumber"] = $extensionNumber;
	}
	
	public function getPayeeRegisterNo() {
		return $this->payeeRegisterNo;
	}
	
	public function setPayeeRegisterNo($payeeRegisterNo) {
		$this->payeeRegisterNo = $payeeRegisterNo;
		$this->apiParams["payeeRegisterNo"] = $payeeRegisterNo;
	}
	
	public function getPlatformCoding() {
		return $this->platformCoding;
	}
	
	public function setPlatformCoding($platformCoding) {
		$this->platformCoding = $platformCoding;
		$this->apiParams["platformCoding"] = $platformCoding;
	}
	
	public function getTaxClearState() {
		return $this->taxClearState;
	}
	
	public function setTaxClearState($taxClearState) {
		$this->taxClearState = $taxClearState;
		$this->apiParams["taxClearState"] = $taxClearState;
	}
	
	public function getTaxCopyState() {
		return $this->taxCopyState;
	}
	
	public function setTaxCopyState($taxCopyState) {
		$this->taxCopyState = $taxCopyState;
		$this->apiParams["taxCopyState"] = $taxCopyState;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.invmacinfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->payeeRegisterNo, 'payeeRegisterNo');
		RequestCheckUtil::checkNotNull($this->platformCoding, 'platformCoding');
	}
	
	public function getBizName(){
		return "getInvmacinfo";
	}
	
}

?>