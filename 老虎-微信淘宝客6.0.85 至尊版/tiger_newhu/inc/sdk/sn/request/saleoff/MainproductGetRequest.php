<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-9
 */
class MainproductGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $correctId;
	
	public function getCorrectId() {
		return $this->correctId;
	}
	
	public function setCorrectId($correctId) {
		$this->correctId = $correctId;
		$this->apiParams["correctId"] = $correctId;
	}
	
	public function getApiMethodName(){
		return 'suning.saleoff.mainproduct.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->correctId, 'correctId');
	}
	
	public function getBizName(){
		return "getMainproduct";
	}
	
}

?>