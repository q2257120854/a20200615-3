<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-28
 */
class ExchangegoodsdeliveryUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $supplierCode;
	
	/**
	 * 
	 */
	private $exchangeNo;
	
	/**
	 * 
	 */
	private $sign;
	
	/**
	 * 
	 */
	private $expressCompCode;
	
	/**
	 * 
	 */
	private $expressNo;
	
	/**
	 * 
	 */
	private $sender;
	
	/**
	 * 
	 */
	private $senderTel;
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getExchangeNo() {
		return $this->exchangeNo;
	}
	
	public function setExchangeNo($exchangeNo) {
		$this->exchangeNo = $exchangeNo;
		$this->apiParams["exchangeNo"] = $exchangeNo;
	}
	
	public function getSign() {
		return $this->sign;
	}
	
	public function setSign($sign) {
		$this->sign = $sign;
		$this->apiParams["sign"] = $sign;
	}
	
	public function getExpressCompCode() {
		return $this->expressCompCode;
	}
	
	public function setExpressCompCode($expressCompCode) {
		$this->expressCompCode = $expressCompCode;
		$this->apiParams["expressCompCode"] = $expressCompCode;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}
	
	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getSender() {
		return $this->sender;
	}
	
	public function setSender($sender) {
		$this->sender = $sender;
		$this->apiParams["sender"] = $sender;
	}
	
	public function getSenderTel() {
		return $this->senderTel;
	}
	
	public function setSenderTel($senderTel) {
		$this->senderTel = $senderTel;
		$this->apiParams["senderTel"] = $senderTel;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.exchangegoodsdelivery.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
		RequestCheckUtil::checkNotNull($this->exchangeNo, 'exchangeNo');
		RequestCheckUtil::checkNotNull($this->sign, 'sign');
	}
	
	public function getBizName(){
		return "updateExchangegoodsdelivery";
	}
	
}

?>