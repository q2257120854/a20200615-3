<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-7
 */
class ReservefpsQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $uuid;
	
	/**
	 * 
	 */
	private $outOrderId;
	
	public function getUuid() {
		return $this->uuid;
	}
	
	public function setUuid($uuid) {
		$this->uuid = $uuid;
		$this->apiParams["uuid"] = $uuid;
	}
	
	public function getOutOrderId() {
		return $this->outOrderId;
	}
	
	public function setOutOrderId($outOrderId) {
		$this->outOrderId = $outOrderId;
		$this->apiParams["outOrderId"] = $outOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.reservefps.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->uuid, 'uuid');
		RequestCheckUtil::checkNotNull($this->outOrderId, 'outOrderId');
	}
	
	public function getBizName(){
		return "queryReservefps";
	}
	
}

?>