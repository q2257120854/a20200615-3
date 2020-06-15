<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-4-12
 */
class SNServiceAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $awardFee;
	
	/**
	 * 
	 */
	private $basicFee;
	
	/**
	 * 
	 */
	private $chargbakCode;
	
	/**
	 * 
	 */
	private $chargbakReson;
	
	/**
	 * 
	 */
	private $custName;
	
	/**
	 * 
	 */
	private $inputFee;
	
	/**
	 * 
	 */
	private $installedId;
	
	/**
	 * 
	 */
	private $itemGuId;
	
	/**
	 * 
	 */
	private $longDistanceFee;
	
	/**
	 * 
	 */
	private $orderStatus;
	
	/**
	 * 
	 */
	private $otherFee;
	
	/**
	 * 
	 */
	private $recordGuId;
	
	/**
	 * 
	 */
	private $settlementId;
	
	/**
	 * 
	 */
	private $srvOrdId;
	
	/**
	 * 
	 */
	private $srvOrdType;
	
	/**
	 * 
	 */
	private $telNoFir;
	
	/**
	 * 
	 */
	private $telNoSec;
	
	/**
	 * 
	 */
	private $verifyCode;
	
	/**
	 * 
	 */
	private $verifyMsg;
	
	public function getAwardFee() {
		return $this->awardFee;
	}
	
	public function setAwardFee($awardFee) {
		$this->awardFee = $awardFee;
		$this->apiParams["awardFee"] = $awardFee;
	}
	
	public function getBasicFee() {
		return $this->basicFee;
	}
	
	public function setBasicFee($basicFee) {
		$this->basicFee = $basicFee;
		$this->apiParams["basicFee"] = $basicFee;
	}
	
	public function getChargbakCode() {
		return $this->chargbakCode;
	}
	
	public function setChargbakCode($chargbakCode) {
		$this->chargbakCode = $chargbakCode;
		$this->apiParams["chargbakCode"] = $chargbakCode;
	}
	
	public function getChargbakReson() {
		return $this->chargbakReson;
	}
	
	public function setChargbakReson($chargbakReson) {
		$this->chargbakReson = $chargbakReson;
		$this->apiParams["chargbakReson"] = $chargbakReson;
	}
	
	public function getCustName() {
		return $this->custName;
	}
	
	public function setCustName($custName) {
		$this->custName = $custName;
		$this->apiParams["custName"] = $custName;
	}
	
	public function getInputFee() {
		return $this->inputFee;
	}
	
	public function setInputFee($inputFee) {
		$this->inputFee = $inputFee;
		$this->apiParams["inputFee"] = $inputFee;
	}
	
	public function getInstalledId() {
		return $this->installedId;
	}
	
	public function setInstalledId($installedId) {
		$this->installedId = $installedId;
		$this->apiParams["installedId"] = $installedId;
	}
	
	public function getItemGuId() {
		return $this->itemGuId;
	}
	
	public function setItemGuId($itemGuId) {
		$this->itemGuId = $itemGuId;
		$this->apiParams["itemGuId"] = $itemGuId;
	}
	
	public function getLongDistanceFee() {
		return $this->longDistanceFee;
	}
	
	public function setLongDistanceFee($longDistanceFee) {
		$this->longDistanceFee = $longDistanceFee;
		$this->apiParams["longDistanceFee"] = $longDistanceFee;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	public function getOtherFee() {
		return $this->otherFee;
	}
	
	public function setOtherFee($otherFee) {
		$this->otherFee = $otherFee;
		$this->apiParams["otherFee"] = $otherFee;
	}
	
	public function getRecordGuId() {
		return $this->recordGuId;
	}
	
	public function setRecordGuId($recordGuId) {
		$this->recordGuId = $recordGuId;
		$this->apiParams["recordGuId"] = $recordGuId;
	}
	
	public function getSettlementId() {
		return $this->settlementId;
	}
	
	public function setSettlementId($settlementId) {
		$this->settlementId = $settlementId;
		$this->apiParams["settlementId"] = $settlementId;
	}
	
	public function getSrvOrdId() {
		return $this->srvOrdId;
	}
	
	public function setSrvOrdId($srvOrdId) {
		$this->srvOrdId = $srvOrdId;
		$this->apiParams["srvOrdId"] = $srvOrdId;
	}
	
	public function getSrvOrdType() {
		return $this->srvOrdType;
	}
	
	public function setSrvOrdType($srvOrdType) {
		$this->srvOrdType = $srvOrdType;
		$this->apiParams["srvOrdType"] = $srvOrdType;
	}
	
	public function getTelNoFir() {
		return $this->telNoFir;
	}
	
	public function setTelNoFir($telNoFir) {
		$this->telNoFir = $telNoFir;
		$this->apiParams["telNoFir"] = $telNoFir;
	}
	
	public function getTelNoSec() {
		return $this->telNoSec;
	}
	
	public function setTelNoSec($telNoSec) {
		$this->telNoSec = $telNoSec;
		$this->apiParams["telNoSec"] = $telNoSec;
	}
	
	public function getVerifyCode() {
		return $this->verifyCode;
	}
	
	public function setVerifyCode($verifyCode) {
		$this->verifyCode = $verifyCode;
		$this->apiParams["verifyCode"] = $verifyCode;
	}
	
	public function getVerifyMsg() {
		return $this->verifyMsg;
	}
	
	public function setVerifyMsg($verifyMsg) {
		$this->verifyMsg = $verifyMsg;
		$this->apiParams["verifyMsg"] = $verifyMsg;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.snservice.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->installedId, 'installedId');
		RequestCheckUtil::checkNotNull($this->itemGuId, 'itemGuId');
		RequestCheckUtil::checkNotNull($this->orderStatus, 'orderStatus');
		RequestCheckUtil::checkNotNull($this->recordGuId, 'recordGuId');
		RequestCheckUtil::checkNotNull($this->srvOrdId, 'srvOrdId');
		RequestCheckUtil::checkNotNull($this->srvOrdType, 'srvOrdType');
	}
	
	public function getBizName(){
		return "snserviceadd";
	}
	
}

?>