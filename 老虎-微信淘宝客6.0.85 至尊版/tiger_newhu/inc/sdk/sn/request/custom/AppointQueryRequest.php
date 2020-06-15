<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class AppointQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $actionId;
	
	/**
	 * 
	 */
	private $partNumber;
	
	/**
	 * 
	 */
	private $vendorId;
	
	public function getActionId() {
		return $this->actionId;
	}
	
	public function setActionId($actionId) {
		$this->actionId = $actionId;
		$this->apiParams["actionId"] = $actionId;
	}
	
	public function getPartNumber() {
		return $this->partNumber;
	}
	
	public function setPartNumber($partNumber) {
		$this->partNumber = $partNumber;
		$this->apiParams["partNumber"] = $partNumber;
	}
	
	public function getVendorId() {
		return $this->vendorId;
	}
	
	public function setVendorId($vendorId) {
		$this->vendorId = $vendorId;
		$this->apiParams["vendorId"] = $vendorId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.appoint.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->actionId, 'actionId');
		RequestCheckUtil::checkNotNull($this->partNumber, 'partNumber');
		RequestCheckUtil::checkNotNull($this->vendorId, 'vendorId');
	}
	
	public function getBizName(){
		return "queryAppoint";
	}
	
}

?>