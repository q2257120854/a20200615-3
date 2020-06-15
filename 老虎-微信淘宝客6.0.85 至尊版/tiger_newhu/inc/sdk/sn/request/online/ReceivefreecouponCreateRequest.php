<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-22
 */
class ReceivefreecouponCreateRequest  extends SuningRequest{
	
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
	private $operateType;
	
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
	
	public function getOperateType() {
		return $this->operateType;
	}
	
	public function setOperateType($operateType) {
		$this->operateType = $operateType;
		$this->apiParams["operateType"] = $operateType;
	}
	
	public function getApiMethodName(){
		return 'suning.online.receivefreecoupon.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
		RequestCheckUtil::checkNotNull($this->activitySecretKey, 'activitySecretKey');
		RequestCheckUtil::checkNotNull($this->chanId, 'chanId');
		RequestCheckUtil::checkNotNull($this->city, 'city');
		RequestCheckUtil::checkNotNull($this->couponGetSource, 'couponGetSource');
		RequestCheckUtil::checkNotNull($this->memberNo, 'memberNo');
		RequestCheckUtil::checkNotNull($this->operateType, 'operateType');
	}
	
	public function getBizName(){
		return "createReceivefreecoupon";
	}
	
}

?>