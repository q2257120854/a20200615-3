<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-24
 */
class ReserveInfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $actionId;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	/**
	 * 
	 */
	private $partnumber;
	
	/**
	 * 
	 */
	private $beginTime;
	
	public function getActionId() {
		return $this->actionId;
	}
	
	public function setActionId($actionId) {
		$this->actionId = $actionId;
		$this->apiParams["actionId"] = $actionId;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getPartnumber() {
		return $this->partnumber;
	}
	
	public function setPartnumber($partnumber) {
		$this->partnumber = $partnumber;
		$this->apiParams["partnumber"] = $partnumber;
	}
	
	public function getBeginTime() {
		return $this->beginTime;
	}
	
	public function setBeginTime($beginTime) {
		$this->beginTime = $beginTime;
		$this->apiParams["beginTime"] = $beginTime;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.reserve.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->actionId, 'actionId');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
		RequestCheckUtil::checkNotNull($this->partnumber, 'partnumber');
		RequestCheckUtil::checkNotNull($this->beginTime, 'beginTime');
	}
	
	public function getBizName(){
		return "queryReserveInfo";
	}
	
}

?>