<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-28
 */
class JsydbtborderpayReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $companyPayMoney;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $payBankAccount;
	
	/**
	 * 
	 */
	private $payBankName;
	
	/**
	 * 
	 */
	private $payBankNo;
	
	/**
	 * 
	 */
	private $token;
	
	public function getCompanyPayMoney() {
		return $this->companyPayMoney;
	}
	
	public function setCompanyPayMoney($companyPayMoney) {
		$this->companyPayMoney = $companyPayMoney;
		$this->apiParams["companyPayMoney"] = $companyPayMoney;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getPayBankAccount() {
		return $this->payBankAccount;
	}
	
	public function setPayBankAccount($payBankAccount) {
		$this->payBankAccount = $payBankAccount;
		$this->apiParams["payBankAccount"] = $payBankAccount;
	}
	
	public function getPayBankName() {
		return $this->payBankName;
	}
	
	public function setPayBankName($payBankName) {
		$this->payBankName = $payBankName;
		$this->apiParams["payBankName"] = $payBankName;
	}
	
	public function getPayBankNo() {
		return $this->payBankNo;
	}
	
	public function setPayBankNo($payBankNo) {
		$this->payBankNo = $payBankNo;
		$this->apiParams["payBankNo"] = $payBankNo;
	}
	
	public function getToken() {
		return $this->token;
	}
	
	public function setToken($token) {
		$this->token = $token;
		$this->apiParams["token"] = $token;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.jsydbtborderpay.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->companyPayMoney, 'companyPayMoney');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->payBankAccount, 'payBankAccount');
		RequestCheckUtil::checkNotNull($this->payBankNo, 'payBankNo');
		RequestCheckUtil::checkNotNull($this->token, 'token');
	}
	
	public function getBizName(){
		return "receiveJsydbtborderpay";
	}
	
}

?>