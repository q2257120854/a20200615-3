<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-10
 */
class SigninvoiceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $parameter;
	
	/**
	 * 
	 */
	private $confirmType;
	
	public function getParameter() {
		return $this->parameter;
	}
	
	public function setParameter($parameter) {
		$this->parameter = $parameter;
		$this->apiParams["parameter"] = $parameter;
	}
	
	public function getConfirmType() {
		return $this->confirmType;
	}
	
	public function setConfirmType($confirmType) {
		$this->confirmType = $confirmType;
		$this->apiParams["confirmType"] = $confirmType;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.signinvoice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->parameter, 'parameter');
		RequestCheckUtil::checkNotNull($this->confirmType, 'confirmType');
	}
	
	public function getBizName(){
		return "querySigninvoice";
	}
	
}

?>