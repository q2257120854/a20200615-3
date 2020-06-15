<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-11-23
 */
class PromRelateKeywordGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $keyword;
	
	public function getKeyword() {
		return $this->keyword;
	}
	
	public function setKeyword($keyword) {
		$this->keyword = $keyword;
		$this->apiParams["keyword"] = $keyword;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promrelatekeyword.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->keyword, 'keyword');
	}
	
	public function getBizName(){
		return "getPromRelateKeyword";
	}
	
}

?>