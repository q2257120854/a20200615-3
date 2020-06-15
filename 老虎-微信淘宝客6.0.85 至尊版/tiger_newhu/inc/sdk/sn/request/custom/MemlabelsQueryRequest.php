<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-9-26
 */
class MemlabelsQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $laberCodes;
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getLaberCodes() {
		return $this->laberCodes;
	}
	
	public function setLaberCodes($laberCodes) {
		$this->laberCodes = $laberCodes;
		$this->apiParams["laberCodes"] = $laberCodes;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.memlabels.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
	}
	
	public function getBizName(){
		return "queryMemlabels";
	}
	
}

?>