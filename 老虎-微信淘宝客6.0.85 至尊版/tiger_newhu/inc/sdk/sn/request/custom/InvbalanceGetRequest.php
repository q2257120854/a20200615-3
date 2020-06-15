<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-22
 */
class InvbalanceGetRequest  extends SuningRequest{
	
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
	private $queryType;
	
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
	
	public function getQueryType() {
		return $this->queryType;
	}
	
	public function setQueryType($queryType) {
		$this->queryType = $queryType;
		$this->apiParams["queryType"] = $queryType;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.invbalance.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->payeeRegisterNo, 'payeeRegisterNo');
		RequestCheckUtil::checkNotNull($this->platformCoding, 'platformCoding');
		RequestCheckUtil::checkNotNull($this->queryType, 'queryType');
	}
	
	public function getBizName(){
		return "getInvbalance";
	}
	
}

?>