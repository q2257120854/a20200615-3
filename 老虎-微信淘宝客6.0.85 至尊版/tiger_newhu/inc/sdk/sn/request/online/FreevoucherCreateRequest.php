<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-10
 */
class FreevoucherCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityId;
	
	/**
	 * 
	 */
	private $activitySecretKey;
	
	/**
	 * 
	 */
	private $chanId;
	
	/**
	 * 
	 */
	private $city;
	
	/**
	 * 
	 */
	private $couponAmount;
	
	/**
	 * 
	 */
	private $couponGetSource;
	
	/**
	 * 
	 */
	private $memberNo;
	
	/**
	 * 
	 */
	private $mobileNum;
	
	/**
	 * 
	 */
	private $operateType;
	
	/**
	 * 
	 */
	private $orderId;
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getActivitySecretKey() {
		return $this->activitySecretKey;
	}
	
	public function setActivitySecretKey($activitySecretKey) {
		$this->activitySecretKey = $activitySecretKey;
		$this->apiParams["activitySecretKey"] = $activitySecretKey;
	}
	
	public function getChanId() {
		return $this->chanId;
	}
	
	public function setChanId($chanId) {
		$this->chanId = $chanId;
		$this->apiParams["chanId"] = $chanId;
	}
	
	public function getCity() {
		return $this->city;
	}
	
	public function setCity($city) {
		$this->city = $city;
		$this->apiParams["city"] = $city;
	}
	
	public function getCouponAmount() {
		return $this->couponAmount;
	}
	
	public function setCouponAmount($couponAmount) {
		$this->couponAmount = $couponAmount;
		$this->apiParams["couponAmount"] = $couponAmount;
	}
	
	public function getCouponGetSource() {
		return $this->couponGetSource;
	}
	
	public function setCouponGetSource($couponGetSource) {
		$this->couponGetSource = $couponGetSource;
		$this->apiParams["couponGetSource"] = $couponGetSource;
	}
	
	public function getMemberNo() {
		return $this->memberNo;
	}
	
	public function setMemberNo($memberNo) {
		$this->memberNo = $memberNo;
		$this->apiParams["memberNo"] = $memberNo;
	}
	
	public function getMobileNum() {
		return $this->mobileNum;
	}
	
	public function setMobileNum($mobileNum) {
		$this->mobileNum = $mobileNum;
		$this->apiParams["mobileNum"] = $mobileNum;
	}
	
	public function getOperateType() {
		return $this->operateType;
	}
	
	public function setOperateType($operateType) {
		$this->operateType = $operateType;
		$this->apiParams["operateType"] = $operateType;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getApiMethodName(){
		return 'suning.online.freevoucher.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
		RequestCheckUtil::checkNotNull($this->activitySecretKey, 'activitySecretKey');
		RequestCheckUtil::checkNotNull($this->chanId, 'chanId');
		RequestCheckUtil::checkNotNull($this->couponGetSource, 'couponGetSource');
		RequestCheckUtil::checkNotNull($this->mobileNum, 'mobileNum');
		RequestCheckUtil::checkNotNull($this->operateType, 'operateType');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "createFreevoucher";
	}
	
}

?>