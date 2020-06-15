<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-6-4
 */
class RejectedQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $beginTime;
	
	/**
	 * 
	 */
	private $dealStatus;
	
	/**
	 * 
	 */
	private $endTime;
	
	
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getBeginTime() {
		return $this->beginTime;
	}
	
	public function setBeginTime($beginTime) {
		$this->beginTime = $beginTime;
		$this->apiParams["beginTime"] = $beginTime;
	}
	
	public function getDealStatus() {
		return $this->dealStatus;
	}
	
	public function setDealStatus($dealStatus) {
		$this->dealStatus = $dealStatus;
		$this->apiParams["dealStatus"] = $dealStatus;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.rejected.query';
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
		return "queryRejected";
	}
	
}

?>