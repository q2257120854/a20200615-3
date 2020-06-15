<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-8
 */
class GuacouponCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $activityPattern;
	
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
	private $couponType;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $peopleActivityTimesLimit;
	
	/**
	 * 
	 */
	private $productScope;
	
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
	private $showRegion;
	
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
	
	public function getActivityPattern() {
		return $this->activityPattern;
	}
	
	public function setActivityPattern($activityPattern) {
		$this->activityPattern = $activityPattern;
		$this->apiParams["activityPattern"] = $activityPattern;
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
	
	public function getCouponType() {
		return $this->couponType;
	}
	
	public function setCouponType($couponType) {
		$this->couponType = $couponType;
		$this->apiParams["couponType"] = $couponType;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getPeopleActivityTimesLimit() {
		return $this->peopleActivityTimesLimit;
	}
	
	public function setPeopleActivityTimesLimit($peopleActivityTimesLimit) {
		$this->peopleActivityTimesLimit = $peopleActivityTimesLimit;
		$this->apiParams["peopleActivityTimesLimit"] = $peopleActivityTimesLimit;
	}
	
	public function getProductScope() {
		return $this->productScope;
	}
	
	public function setProductScope($productScope) {
		$this->productScope = $productScope;
		$this->apiParams["productScope"] = $productScope;
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
	
	public function getShowRegion() {
		return $this->showRegion;
	}
	
	public function setShowRegion($showRegion) {
		$this->showRegion = $showRegion;
		$this->apiParams["showRegion"] = $showRegion;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.guacoupon.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->activityPattern, 'activityPattern');
		RequestCheckUtil::checkNotNull($this->activityTimesLimit, 'activityTimesLimit');
		RequestCheckUtil::checkNotNull($this->assignedRole, 'assignedRole');
		RequestCheckUtil::checkNotNull($this->couponType, 'couponType');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->peopleActivityTimesLimit, 'peopleActivityTimesLimit');
		RequestCheckUtil::checkNotNull($this->productScope, 'productScope');
		RequestCheckUtil::checkNotNull($this->rewardAmount, 'rewardAmount');
		RequestCheckUtil::checkNotNull($this->shopCode, 'shopCode');
		RequestCheckUtil::checkNotNull($this->showRegion, 'showRegion');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
	}
	
	public function getBizName(){
		return "createGuacoupon";
	}
	
}

?>