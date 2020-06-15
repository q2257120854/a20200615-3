<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-29
 */
class InstallmentactQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cmmdtyCodes;
	
	public function getCmmdtyCodes() {
		return $this->cmmdtyCodes;
	}
	
	public function setCmmdtyCodes($cmmdtyCodes) {
		$this->cmmdtyCodes = $cmmdtyCodes;
		$arr = array();
		foreach ($cmmdtyCodes as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtyCodes"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.online.installmentact.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryInstallmentact";
	}
	
}

class CmmdtyCodes {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>