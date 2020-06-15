<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-4-24
 */
class ResultAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $expressKey;
	
	/**
	 * 
	 */
	private $failReason;
	
	/**
	 * 
	 */
	private $freight;
	
	/**
	 * 
	 */
	private $pickupMan;
	
	/**
	 * 
	 */
	private $pickupManContact;
	
	/**
	 * 
	 */
	private $pickupNetwork;
	
	/**
	 * 
	 */
	private $pickupNetworkContact;
	
	/**
	 * 
	 */
	private $pickupState;
	
	/**
	 * 
	 */
	private $pickupTime;
	
	/**
	 * 
	 */
	private $pushType;
	
	/**
	 * 
	 */
	private $returnOrderId;
	
	/**
	 * 
	 */
	private $signupState;
	
	/**
	 * 
	 */
	private $signupTime;
	
	/**
	 * 
	 */
	private $waybillNo;
	
	/**
	 * 
	 */
	private $weight;
	
	public function getExpressKey() {
		return $this->expressKey;
	}
	
	public function setExpressKey($expressKey) {
		$this->expressKey = $expressKey;
		$this->apiParams["expressKey"] = $expressKey;
	}
	
	public function getFailReason() {
		return $this->failReason;
	}
	
	public function setFailReason($failReason) {
		$this->failReason = $failReason;
		$this->apiParams["failReason"] = $failReason;
	}
	
	public function getFreight() {
		return $this->freight;
	}
	
	public function setFreight($freight) {
		$this->freight = $freight;
		$this->apiParams["freight"] = $freight;
	}
	
	public function getPickupMan() {
		return $this->pickupMan;
	}
	
	public function setPickupMan($pickupMan) {
		$this->pickupMan = $pickupMan;
		$this->apiParams["pickupMan"] = $pickupMan;
	}
	
	public function getPickupManContact() {
		return $this->pickupManContact;
	}
	
	public function setPickupManContact($pickupManContact) {
		$this->pickupManContact = $pickupManContact;
		$this->apiParams["pickupManContact"] = $pickupManContact;
	}
	
	public function getPickupNetwork() {
		return $this->pickupNetwork;
	}
	
	public function setPickupNetwork($pickupNetwork) {
		$this->pickupNetwork = $pickupNetwork;
		$this->apiParams["pickupNetwork"] = $pickupNetwork;
	}
	
	public function getPickupNetworkContact() {
		return $this->pickupNetworkContact;
	}
	
	public function setPickupNetworkContact($pickupNetworkContact) {
		$this->pickupNetworkContact = $pickupNetworkContact;
		$this->apiParams["pickupNetworkContact"] = $pickupNetworkContact;
	}
	
	public function getPickupState() {
		return $this->pickupState;
	}
	
	public function setPickupState($pickupState) {
		$this->pickupState = $pickupState;
		$this->apiParams["pickupState"] = $pickupState;
	}
	
	public function getPickupTime() {
		return $this->pickupTime;
	}
	
	public function setPickupTime($pickupTime) {
		$this->pickupTime = $pickupTime;
		$this->apiParams["pickupTime"] = $pickupTime;
	}
	
	public function getPushType() {
		return $this->pushType;
	}
	
	public function setPushType($pushType) {
		$this->pushType = $pushType;
		$this->apiParams["pushType"] = $pushType;
	}
	
	public function getReturnOrderId() {
		return $this->returnOrderId;
	}
	
	public function setReturnOrderId($returnOrderId) {
		$this->returnOrderId = $returnOrderId;
		$this->apiParams["returnOrderId"] = $returnOrderId;
	}
	
	public function getSignupState() {
		return $this->signupState;
	}
	
	public function setSignupState($signupState) {
		$this->signupState = $signupState;
		$this->apiParams["signupState"] = $signupState;
	}
	
	public function getSignupTime() {
		return $this->signupTime;
	}
	
	public function setSignupTime($signupTime) {
		$this->signupTime = $signupTime;
		$this->apiParams["signupTime"] = $signupTime;
	}
	
	public function getWaybillNo() {
		return $this->waybillNo;
	}
	
	public function setWaybillNo($waybillNo) {
		$this->waybillNo = $waybillNo;
		$this->apiParams["waybillNo"] = $waybillNo;
	}
	
	public function getWeight() {
		return $this->weight;
	}
	
	public function setWeight($weight) {
		$this->weight = $weight;
		$this->apiParams["weight"] = $weight;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.result.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->expressKey, 'expressKey');
		RequestCheckUtil::checkNotNull($this->pushType, 'pushType');
		RequestCheckUtil::checkNotNull($this->returnOrderId, 'returnOrderId');
	}
	
	public function getBizName(){
		return "addResult";
	}
	
}

?>