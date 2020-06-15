<?php
/**
 * 苏宁开放平台接口 - 苏宁电子承兑合同签章回传
 *
 * @author suning
 * @date   2015-1-16
 */
class SignContractHandleRequest  extends SuningRequest{
	
	/**
	 * 合同编号
	 */
	private $contractCode;
	
	/**
	 * 供应商编码
	 */
	private $supplierCode;
	
	/**
	 * 电子合同文本。html文档utf-8编码base64加密数据。
	 */
	private $contractText;
	
	/**
	 * 签章内容。签章密文。
	 */
	private $signText;
	
	public function getContractCode() {
		return $this->contractCode;
	}
	
	public function setContractCode($contractCode) {
		$this->contractCode = $contractCode;
		$this->apiParams["contractCode"] = $contractCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getContractText() {
		return $this->contractText;
	}
	
	public function setContractText($contractText) {
		$this->contractText = $contractText;
		$this->apiParams["contractText"] = $contractText;
	}
	
	public function getSignText() {
		return $this->signText;
	}
	
	public function setSignText($signText) {
		$this->signText = $signText;
		$this->apiParams["signText"] = $signText;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.signcontract.handle';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->contractCode, 'contractCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
		RequestCheckUtil::checkNotNull($this->contractText, 'contractText');
	}
	
	public function getBizName(){
		return "handleSignContract";
	}
	
}

?>