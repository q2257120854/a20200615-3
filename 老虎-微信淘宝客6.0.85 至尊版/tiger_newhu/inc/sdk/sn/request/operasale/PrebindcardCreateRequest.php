<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-28
 */
class PrebindcardCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $systemNo;
	
	/**
	 * 
	 */
	private $transactionID;
	
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
	private $regionCode;
	
	/**
	 * 
	 */
	private $countyCode;
	
	/**
	 * 
	 */
	private $channelCode;
	
	/**
	 * 
	 */
	private $phoneNumber;
	
	/**
	 * 
	 */
	private $custName;
	
	/**
	 * 
	 */
	private $idType;
	
	/**
	 * 
	 */
	private $idCardNum;
	
	/**
	 * 
	 */
	private $address;
	
	/**
	 * 
	 */
	private $contractPhone;
	
	public function getSystemNo() {
		return $this->systemNo;
	}
	
	public function setSystemNo($systemNo) {
		$this->systemNo = $systemNo;
		$this->apiParams["systemNo"] = $systemNo;
	}
	
	public function getTransactionID() {
		return $this->transactionID;
	}
	
	public function setTransactionID($transactionID) {
		$this->transactionID = $transactionID;
		$this->apiParams["transactionID"] = $transactionID;
	}
	
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
	
	public function getRegionCode() {
		return $this->regionCode;
	}
	
	public function setRegionCode($regionCode) {
		$this->regionCode = $regionCode;
		$this->apiParams["regionCode"] = $regionCode;
	}
	
	public function getCountyCode() {
		return $this->countyCode;
	}
	
	public function setCountyCode($countyCode) {
		$this->countyCode = $countyCode;
		$this->apiParams["countyCode"] = $countyCode;
	}
	
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		$this->apiParams["channelCode"] = $channelCode;
	}
	
	public function getPhoneNumber() {
		return $this->phoneNumber;
	}
	
	public function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $phoneNumber;
		$this->apiParams["phoneNumber"] = $phoneNumber;
	}
	
	public function getCustName() {
		return $this->custName;
	}
	
	public function setCustName($custName) {
		$this->custName = $custName;
		$this->apiParams["custName"] = $custName;
	}
	
	public function getIdType() {
		return $this->idType;
	}
	
	public function setIdType($idType) {
		$this->idType = $idType;
		$this->apiParams["idType"] = $idType;
	}
	
	public function getIdCardNum() {
		return $this->idCardNum;
	}
	
	public function setIdCardNum($idCardNum) {
		$this->idCardNum = $idCardNum;
		$this->apiParams["idCardNum"] = $idCardNum;
	}
	
	public function getAddress() {
		return $this->address;
	}
	
	public function setAddress($address) {
		$this->address = $address;
		$this->apiParams["address"] = $address;
	}
	
	public function getContractPhone() {
		return $this->contractPhone;
	}
	
	public function setContractPhone($contractPhone) {
		$this->contractPhone = $contractPhone;
		$this->apiParams["contractPhone"] = $contractPhone;
	}
	
	public function getApiMethodName(){
		return 'suning.operasale.prebindcard.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->systemNo, 'systemNo');
		RequestCheckUtil::checkNotNull($this->transactionID, 'transactionID');
		RequestCheckUtil::checkNotNull($this->opId, 'opId');
		RequestCheckUtil::checkNotNull($this->orgId, 'orgId');
		RequestCheckUtil::checkNotNull($this->regionCode, 'regionCode');
		RequestCheckUtil::checkNotNull($this->countyCode, 'countyCode');
		RequestCheckUtil::checkNotNull($this->channelCode, 'channelCode');
		RequestCheckUtil::checkNotNull($this->phoneNumber, 'phoneNumber');
		RequestCheckUtil::checkNotNull($this->custName, 'custName');
		RequestCheckUtil::checkNotNull($this->idType, 'idType');
		RequestCheckUtil::checkNotNull($this->idCardNum, 'idCardNum');
		RequestCheckUtil::checkNotNull($this->address, 'address');
	}
	
	public function getBizName(){
		return "createPrebindcard";
	}
	
}

?>