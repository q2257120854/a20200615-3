<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class CansalechangeQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $beginTime;
	
	/**
	 * 
	 */
	private $endTime;
	
	public function getBeginTime() {
		return $this->beginTime;
	}
	
	public function setBeginTime($beginTime) {
		$this->beginTime = $beginTime;
		$this->apiParams["beginTime"] = $beginTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getApiMethodName(){
		return 'suning.defctive.cansalechange.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->beginTime, 'beginTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
	}
	
	public function getBizName(){
		return "queryCansalechange";
	}
	
}

?>