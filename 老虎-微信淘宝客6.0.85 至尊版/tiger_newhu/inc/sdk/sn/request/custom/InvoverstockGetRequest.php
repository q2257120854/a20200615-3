<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-22
 */
class InvoverstockGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $payeeRegisterNo;
	
	/**
	 * 
	 */
	private $platformCoding;
	
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
	
	public function getApiMethodName(){
		return 'suning.custom.invoverstock.get';
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
		return "getInvoverstock";
	}
	
}

?>