<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-28
 */
class WritecarddataGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $opId;
	
	/**
	 * 
	 */
	private $orgId;
	
	/**
	 * 
	 */
	private $phoneNumber;
	
	/**
	 * 
	 */
	private $iccidKey;
	
	public function getOpId() {
		return $this->opId;
	}
	
	public function setOpId($opId) {
		$this->opId = $opId;
		$this->apiParams["opId"] = $opId;
	}
	
	public function getOrgId() {
		return $this->orgId;
	}
	
	public function setOrgId($orgId) {
		$this->orgId = $orgId;
		$this->apiParams["orgId"] = $orgId;
	}
	
	public function getPhoneNumber() {
		return $this->phoneNumber;
	}
	
	public function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $phoneNumber;
		$this->apiParams["phoneNumber"] = $phoneNumber;
	}
	
	public function getIccidKey() {
		return $this->iccidKey;
	}
	
	public function setIccidKey($iccidKey) {
		$this->iccidKey = $iccidKey;
		$this->apiParams["iccidKey"] = $iccidKey;
	}
	
	public function getApiMethodName(){
		return 'suning.operasale.writecarddata.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->phoneNumber, 'phoneNumber');
	}
	
	public function getBizName(){
		return "getWritecarddata";
	}
	
}

?>