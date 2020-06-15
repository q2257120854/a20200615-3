<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-4-28
 */
class PaidsuperAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $amount;
	
	/**
	 * 
	 */
	private $appCode;
	
	/**
	 * 
	 */
	private $externalOrderNo;
	
	/**
	 * 
	 */
	private $externalUid;
	
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
	private $payTime;
	
	/**
	 * 
	 */
	private $payType;
	
	/**
	 * 
	 */
	private $settlementAmount;
	
	public function getAmount() {
		return $this->amount;
	}
	
	public function setAmount($amount) {
		$this->amount = $amount;
		$this->apiParams["amount"] = $amount;
	}
	
	public function getAppCode() {
		return $this->appCode;
	}
	
	public function setAppCode($appCode) {
		$this->appCode = $appCode;
		$this->apiParams["appCode"] = $appCode;
	}
	
	public function getExternalOrderNo() {
		return $this->externalOrderNo;
	}
	
	public function setExternalOrderNo($externalOrderNo) {
		$this->externalOrderNo = $externalOrderNo;
		$this->apiParams["externalOrderNo"] = $externalOrderNo;
	}
	
	public function getExternalUid() {
		return $this->externalUid;
	}
	
	public function setExternalUid($externalUid) {
		$this->externalUid = $externalUid;
		$this->apiParams["externalUid"] = $externalUid;
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
	
	public function getPayTime() {
		return $this->payTime;
	}
	
	public function setPayTime($payTime) {
		$this->payTime = $payTime;
		$this->apiParams["payTime"] = $payTime;
	}
	
	public function getPayType() {
		return $this->payType;
	}
	
	public function setPayType($payType) {
		$this->payType = $payType;
		$this->apiParams["payType"] = $payType;
	}
	
	public function getSettlementAmount() {
		return $this->settlementAmount;
	}
	
	public function setSettlementAmount($settlementAmount) {
		$this->settlementAmount = $settlementAmount;
		$this->apiParams["settlementAmount"] = $settlementAmount;
	}
	
	public function getApiMethodName(){
		return 'suning.superext.paidsuper.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->amount, 'amount');
		RequestCheckUtil::checkNotNull($this->appCode, 'appCode');
		RequestCheckUtil::checkNotNull($this->externalOrderNo, 'externalOrderNo');
		RequestCheckUtil::checkNotNull($this->externalUid, 'externalUid');
		RequestCheckUtil::checkNotNull($this->extSystemId, 'extSystemId');
		RequestCheckUtil::checkNotNull($this->mobileNum, 'mobileNum');
		RequestCheckUtil::checkNotNull($this->payTime, 'payTime');
		RequestCheckUtil::checkNotNull($this->payType, 'payType');
		RequestCheckUtil::checkNotNull($this->settlementAmount, 'settlementAmount');
	}
	
	public function getBizName(){
		return "addPaidsuper";
	}
	
}

?>