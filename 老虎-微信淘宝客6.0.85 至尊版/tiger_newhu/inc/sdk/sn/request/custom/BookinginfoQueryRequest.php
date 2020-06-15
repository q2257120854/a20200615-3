<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-12
 */
class BookinginfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $actionId;
	
	/**
	 * 
	 */
	private $snUnionId;
	
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
	
	public function getApiMethodName(){
		return 'suning.custom.bookinginfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->actionId, 'actionId');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
	}
	
	public function getBizName(){
		return "queryBookinginfo";
	}
	
}

?>