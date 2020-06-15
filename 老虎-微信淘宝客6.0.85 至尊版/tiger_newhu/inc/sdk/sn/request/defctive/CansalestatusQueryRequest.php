<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class CansalestatusQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $serialNum;
	
	public function getSerialNum() {
		return $this->serialNum;
	}
	
	public function setSerialNum($serialNum) {
		$this->serialNum = $serialNum;
		$this->apiParams["serialNum"] = $serialNum;
	}
	
	public function getApiMethodName(){
		return 'suning.defctive.cansalestatus.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->serialNum, 'serialNum');
	}
	
	public function getBizName(){
		return "queryCansalestatus";
	}
	
}

?>