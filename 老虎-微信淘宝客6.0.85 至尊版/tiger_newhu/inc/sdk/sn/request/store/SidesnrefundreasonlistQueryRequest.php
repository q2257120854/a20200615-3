<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SidesnrefundreasonlistQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $queryType;
	
	/**
	 * 
	 */
	private $reasonType;
	
	public function getQueryType() {
		return $this->queryType;
	}
	
	public function setQueryType($queryType) {
		$this->queryType = $queryType;
		$this->apiParams["queryType"] = $queryType;
	}
	
	public function getReasonType() {
		return $this->reasonType;
	}
	
	public function setReasonType($reasonType) {
		$this->reasonType = $reasonType;
		$this->apiParams["reasonType"] = $reasonType;
	}
	
	public function getApiMethodName(){
		return 'suning.store.sidesnrefundreasonlist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->queryType, 'queryType');
	}
	
	public function getBizName(){
		return "querySidesnrefundreasonlist";
	}
	
}

?>