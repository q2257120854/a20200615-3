<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-28
 */
class WritecardresultAddRequest  extends SuningRequest{
	
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
	private $resultCode;
	
	/**
	 * 
	 */
	private $resultResc;
	
	/**
	 * 
	 */
	private $iccid;
	
	/**
	 * 
	 */
	private $imsi;
	
	/**
	 * 
	 */
	private $transId;
	
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
	
	public function getResultCode() {
		return $this->resultCode;
	}
	
	public function setResultCode($resultCode) {
		$this->resultCode = $resultCode;
		$this->apiParams["resultCode"] = $resultCode;
	}
	
	public function getResultResc() {
		return $this->resultResc;
	}
	
	public function setResultResc($resultResc) {
		$this->resultResc = $resultResc;
		$this->apiParams["resultResc"] = $resultResc;
	}
	
	public function getIccid() {
		return $this->iccid;
	}
	
	public function setIccid($iccid) {
		$this->iccid = $iccid;
		$this->apiParams["iccid"] = $iccid;
	}
	
	public function getImsi() {
		return $this->imsi;
	}
	
	public function setImsi($imsi) {
		$this->imsi = $imsi;
		$this->apiParams["imsi"] = $imsi;
	}
	
	public function getTransId() {
		return $this->transId;
	}
	
	public function setTransId($transId) {
		$this->transId = $transId;
		$this->apiParams["transId"] = $transId;
	}
	
	public function getApiMethodName(){
		return 'suning.operasale.writecardresult.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->phoneNumber, 'phoneNumber');
		RequestCheckUtil::checkNotNull($this->resultCode, 'resultCode');
		RequestCheckUtil::checkNotNull($this->iccid, 'iccid');
		RequestCheckUtil::checkNotNull($this->imsi, 'imsi');
		RequestCheckUtil::checkNotNull($this->transId, 'transId');
	}
	
	public function getBizName(){
		return "addWritecardresult";
	}
	
}

?>