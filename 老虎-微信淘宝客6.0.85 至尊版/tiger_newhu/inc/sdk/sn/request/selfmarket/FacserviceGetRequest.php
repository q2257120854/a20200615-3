<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-4-12
 */
class FacserviceGetRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $itemGuId;
	
	
	
	/**
	 * 
	 */
	private $recordGuId;
	
	/**
	 * 
	 */
	private $srvOrdId;
	
	/**
	 * 
	 */
	private $startTime;
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getItemGuId() {
		return $this->itemGuId;
	}
	
	public function setItemGuId($itemGuId) {
		$this->itemGuId = $itemGuId;
		$this->apiParams["itemGuId"] = $itemGuId;
	}
	
	
	
	public function getRecordGuId() {
		return $this->recordGuId;
	}
	
	public function setRecordGuId($recordGuId) {
		$this->recordGuId = $recordGuId;
		$this->apiParams["recordGuId"] = $recordGuId;
	}
	
	public function getSrvOrdId() {
		return $this->srvOrdId;
	}
	
	public function setSrvOrdId($srvOrdId) {
		$this->srvOrdId = $srvOrdId;
		$this->apiParams["srvOrdId"] = $srvOrdId;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.facservice.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
	}
	
	public function getBizName(){
		return "facserviceget";
	}
	
}

?>