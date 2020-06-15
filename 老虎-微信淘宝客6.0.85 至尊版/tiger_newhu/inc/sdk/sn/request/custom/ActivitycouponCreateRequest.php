<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-9-26
 */
class ActivitycouponCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $activityTimesLimit;
	
	/**
	 * 
	 */
	private $assignedRole;
	
	/**
	 * 
	 */
	private $baseAmount;
	
	/**
	 * 
	 */
	private $couponType;
	
	/**
	 * 
	 */
	private $effectEndTime;
	
	/**
	 * 
	 */
	private $effectStartTime;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $rewardAmount;
	
	/**
	 * 
	 */
	private $shopCode;
	
	/**
	 * 
	 */
	private $startTime;
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getActivityTimesLimit() {
		return $this->activityTimesLimit;
	}
	
	public function setActivityTimesLimit($activityTimesLimit) {
		$this->activityTimesLimit = $activityTimesLimit;
		$this->apiParams["activityTimesLimit"] = $activityTimesLimit;
	}
	
	public function getAssignedRole() {
		return $this->assignedRole;
	}
	
	public function setAssignedRole($assignedRole) {
		$this->assignedRole = $assignedRole;
		$this->apiParams["assignedRole"] = $assignedRole;
	}
	
	public function getBaseAmount() {
		return $this->baseAmount;
	}
	
	public function setBaseAmount($baseAmount) {
		$this->baseAmount = $baseAmount;
		$this->apiParams["baseAmount"] = $baseAmount;
	}
	
	public function getCouponType() {
		return $this->couponType;
	}
	
	public function setCouponType($couponType) {
		$this->couponType = $couponType;
		$this->apiParams["couponType"] = $couponType;
	}
	
	public function getEffectEndTime() {
		return $this->effectEndTime;
	}
	
	public function setEffectEndTime($effectEndTime) {
		$this->effectEndTime = $effectEndTime;
		$this->apiParams["effectEndTime"] = $effectEndTime;
	}
	
	public function getEffectStartTime() {
		return $this->effectStartTime;
	}
	
	public function setEffectStartTime($effectStartTime) {
		$this->effectStartTime = $effectStartTime;
		$this->apiParams["effectStartTime"] = $effectStartTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getRewardAmount() {
		return $this->rewardAmount;
	}
	
	public function setRewardAmount($rewardAmount) {
		$this->rewardAmount = $rewardAmount;
		$this->apiParams["rewardAmount"] = $rewardAmount;
	}
	
	public function getShopCode() {
		return $this->shopCode;
	}
	
	public function setShopCode($shopCode) {
		$this->shopCode = $shopCode;
		$this->apiParams["shopCode"] = $shopCode;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.activitycoupon.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->activityTimesLimit, 'activityTimesLimit');
		RequestCheckUtil::checkNotNull($this->assignedRole, 'assignedRole');
		RequestCheckUtil::checkNotNull($this->baseAmount, 'baseAmount');
		RequestCheckUtil::checkNotNull($this->couponType, 'couponType');
		RequestCheckUtil::checkNotNull($this->effectEndTime, 'effectEndTime');
		RequestCheckUtil::checkNotNull($this->effectStartTime, 'effectStartTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->rewardAmount, 'rewardAmount');
		RequestCheckUtil::checkNotNull($this->shopCode, 'shopCode');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
	}
	
	public function getBizName(){
		return "createActivitycoupon";
	}
	
}

?>