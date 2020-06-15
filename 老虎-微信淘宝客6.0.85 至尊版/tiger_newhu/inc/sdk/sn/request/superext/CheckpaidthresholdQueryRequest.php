<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-18
 */
class CheckpaidthresholdQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appCode;
	
	/**
	 * 
	 */
	private $businessSource;
	
	/**
	 * 
	 */
	private $extSystemId;
	
	/**
	 * 
	 */
	private $mixCustNum;
	
	/**
	 * 
	 */
	private $mobileNum;
	
	/**
	 * 
	 */
	private $packageId;
	
	public function getAppCode() {
		return $this->appCode;
	}
	
	public function setAppCode($appCode) {
		$this->appCode = $appCode;
		$this->apiParams["appCode"] = $appCode;
	}
	
	public function getBusinessSource() {
		return $this->businessSource;
	}
	
	public function setBusinessSource($businessSource) {
		$this->businessSource = $businessSource;
		$this->apiParams["businessSource"] = $businessSource;
	}
	
	public function getExtSystemId() {
		return $this->extSystemId;
	}
	
	public function setExtSystemId($extSystemId) {
		$this->extSystemId = $extSystemId;
		$this->apiParams["extSystemId"] = $extSystemId;
	}
	
	public function getMixCustNum() {
		return $this->mixCustNum;
	}
	
	public function setMixCustNum($mixCustNum) {
		$this->mixCustNum = $mixCustNum;
		$this->apiParams["mixCustNum"] = $mixCustNum;
	}
	
	public function getMobileNum() {
		return $this->mobileNum;
	}
	
	public function setMobileNum($mobileNum) {
		$this->mobileNum = $mobileNum;
		$this->apiParams["mobileNum"] = $mobileNum;
	}
	
	public function getPackageId() {
		return $this->packageId;
	}
	
	public function setPackageId($packageId) {
		$this->packageId = $packageId;
		$this->apiParams["packageId"] = $packageId;
	}
	
	public function getApiMethodName(){
		return 'suning.superext.checkpaidthreshold.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appCode, 'appCode');
		RequestCheckUtil::checkNotNull($this->extSystemId, 'extSystemId');
	}
	
	public function getBizName(){
		return "queryCheckpaidthreshold";
	}
	
}

?>