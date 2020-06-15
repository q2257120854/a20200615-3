<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-15
 */
class PptvvideoAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $omsList;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getOmsList() {
		return $this->omsList;
	}
	
	public function setOmsList($omsList) {
		$this->omsList = $omsList;
		$arr = array();
		foreach ($omsList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["omsList"] = $arr;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.pptvvideo.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "addPptvvideo";
	}
	
}

class OmsList {

	private $apiParams = array();
	
	private $endTime;
	
	private $orderLineNumber;
	
	private $startTime;
	
	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getOrderLineNumber() {
		return $this->orderLineNumber;
	}

	public function setOrderLineNumber($orderLineNumber) {
		$this->orderLineNumber = $orderLineNumber;
		$this->apiParams["orderLineNumber"] = $orderLineNumber;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>