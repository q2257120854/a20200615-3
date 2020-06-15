<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-10
 */
class MenulistQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $reqJson;
	
	public function getReqJson() {
		return $this->reqJson;
	}
	
	public function setReqJson($reqJson) {
		$this->reqJson = $reqJson;
		$this->apiParams["reqJson"] = $reqJson;
	}
	
	public function getApiMethodName(){
		return 'suning.market.menulist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->reqJson, 'reqJson');
	}
	
	public function getBizName(){
		return "queryMenulist";
	}
	
}

?>