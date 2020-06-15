<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-7-12
 */
class DicsingleQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $banktypecode;
	
	/**
	 * 
	 */
	private $operType;
	
	/**
	 * 
	 */
	private $payCode;
	
	public function getBanktypecode() {
		return $this->banktypecode;
	}
	
	public function setBanktypecode($banktypecode) {
		$this->banktypecode = $banktypecode;
		$this->apiParams["banktypecode"] = $banktypecode;
	}
	
	public function getOperType() {
		return $this->operType;
	}
	
	public function setOperType($operType) {
		$this->operType = $operType;
		$this->apiParams["operType"] = $operType;
	}
	
	public function getPayCode() {
		return $this->payCode;
	}
	
	public function setPayCode($payCode) {
		$this->payCode = $payCode;
		$this->apiParams["payCode"] = $payCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.dicsingle.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->operType, 'operType');
	}
	
	public function getBizName(){
		return "queryDicsingle";
	}
	
}

?>