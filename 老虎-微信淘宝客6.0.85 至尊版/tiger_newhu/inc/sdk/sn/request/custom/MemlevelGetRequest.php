<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-28
 */
class MemlevelGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $memCode;
	
	public function getMemCode() {
		return $this->memCode;
	}
	
	public function setMemCode($memCode) {
		$this->memCode = $memCode;
		$this->apiParams["memCode"] = $memCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.memlevel.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->memCode, 'memCode');
	}
	
	public function getBizName(){
		return "getMemlevel";
	}
	
}

?>