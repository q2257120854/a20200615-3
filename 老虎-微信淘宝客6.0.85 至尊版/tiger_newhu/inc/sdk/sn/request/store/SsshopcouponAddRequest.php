<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SsshopcouponAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityEndTime;
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $activityStartTime;
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $baseAmount;
	
	/**
	 * 
	 */
	private $baseQuantifierType;
	
	/**
	 * 
	 */
	private $circulation;
	
	/**
	 * 
	 */
	private $couponType;
	
	/**
	 * 
	 */
	private $denomination;
	
	/**
	 * 
	 */
	private $dynamicDistanceTimeDelay;
	
	/**
	 * 
	 */
	private $dynamicTime;
	
	/**
	 * 
	 */
	private $effectiveEndTime;
	
	/**
	 * 
	 */
	private $effectiveStartTime;
	
	/**
	 * 
	 */
	private $grantCountEveryday;
	
	/**
	 * 
	 */
	private $limitCollarCount;
	
	/**
	 * 
	 */
	private $limitCollarEveyDay;
	
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
	private $useChannelStr;
	
	/**
	 * 
	 */
	private $validityType;
	
	/**
	 * 
	 */
	private $voucheObject;
	
	public function getActivityEndTime() {
		return $this->activityEndTime;
	}
	
	public function setActivityEndTime($activityEndTime) {
		$this->activityEndTime = $activityEndTime;
		$this->apiParams["activityEndTime"] = $activityEndTime;
	}
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getActivityStartTime() {
		return $this->activityStartTime;
	}
	
	public function setActivityStartTime($activityStartTime) {
		$this->activityStartTime = $activityStartTime;
		$this->apiParams["activityStartTime"] = $activityStartTime;
	}
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	public function getBaseAmount() {
		return $this->baseAmount;
	}
	
	public function setBaseAmount($baseAmount) {
		$this->baseAmount = $baseAmount;
		$this->apiParams["baseAmount"] = $baseAmount;
	}
	
	public function getBaseQuantifierType() {
		return $this->baseQuantifierType;
	}
	
	public function setBaseQuantifierType($baseQuantifierType) {
		$this->baseQuantifierType = $baseQuantifierType;
		$this->apiParams["baseQuantifierType"] = $baseQuantifierType;
	}
	
	public function getCirculation() {
		return $this->circulation;
	}
	
	public function setCirculation($circulation) {
		$this->circulation = $circulation;
		$this->apiParams["circulation"] = $circulation;
	}
	
	public function getCouponType() {
		return $this->couponType;
	}
	
	public function setCouponType($couponType) {
		$this->couponType = $couponType;
		$this->apiParams["couponType"] = $couponType;
	}
	
	public function getDenomination() {
		return $this->denomination;
	}
	
	public function setDenomination($denomination) {
		$this->denomination = $denomination;
		$this->apiParams["denomination"] = $denomination;
	}
	
	public function getDynamicDistanceTimeDelay() {
		return $this->dynamicDistanceTimeDelay;
	}
	
	public function setDynamicDistanceTimeDelay($dynamicDistanceTimeDelay) {
		$this->dynamicDistanceTimeDelay = $dynamicDistanceTimeDelay;
		$this->apiParams["dynamicDistanceTimeDelay"] = $dynamicDistanceTimeDelay;
	}
	
	public function getDynamicTime() {
		return $this->dynamicTime;
	}
	
	public function setDynamicTime($dynamicTime) {
		$this->dynamicTime = $dynamicTime;
		$this->apiParams["dynamicTime"] = $dynamicTime;
	}
	
	public function getEffectiveEndTime() {
		return $this->effectiveEndTime;
	}
	
	public function setEffectiveEndTime($effectiveEndTime) {
		$this->effectiveEndTime = $effectiveEndTime;
		$this->apiParams["effectiveEndTime"] = $effectiveEndTime;
	}
	
	public function getEffectiveStartTime() {
		return $this->effectiveStartTime;
	}
	
	public function setEffectiveStartTime($effectiveStartTime) {
		$this->effectiveStartTime = $effectiveStartTime;
		$this->apiParams["effectiveStartTime"] = $effectiveStartTime;
	}
	
	public function getGrantCountEveryday() {
		return $this->grantCountEveryday;
	}
	
	public function setGrantCountEveryday($grantCountEveryday) {
		$this->grantCountEveryday = $grantCountEveryday;
		$this->apiParams["grantCountEveryday"] = $grantCountEveryday;
	}
	
	public function getLimitCollarCount() {
		return $this->limitCollarCount;
	}
	
	public function setLimitCollarCount($limitCollarCount) {
		$this->limitCollarCount = $limitCollarCount;
		$this->apiParams["limitCollarCount"] = $limitCollarCount;
	}
	
	public function getLimitCollarEveyDay() {
		return $this->limitCollarEveyDay;
	}
	
	public function setLimitCollarEveyDay($limitCollarEveyDay) {
		$this->limitCollarEveyDay = $limitCollarEveyDay;
		$this->apiParams["limitCollarEveyDay"] = $limitCollarEveyDay;
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
	
	public function getUseChannelStr() {
		return $this->useChannelStr;
	}
	
	public function setUseChannelStr($useChannelStr) {
		$this->useChannelStr = $useChannelStr;
		$this->apiParams["useChannelStr"] = $useChannelStr;
	}
	
	public function getValidityType() {
		return $this->validityType;
	}
	
	public function setValidityType($validityType) {
		$this->validityType = $validityType;
		$this->apiParams["validityType"] = $validityType;
	}
	
	public function getVoucheObject() {
		return $this->voucheObject;
	}
	
	public function setVoucheObject($voucheObject) {
		$this->voucheObject = $voucheObject;
		$this->apiParams["voucheObject"] = $voucheObject;
	}
	
	public function getApiMethodName(){
		return 'suning.store.ssshopcoupon.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityEndTime, 'activityEndTime');
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->activityStartTime, 'activityStartTime');
		RequestCheckUtil::checkNotNull($this->baseAmount, 'baseAmount');
		RequestCheckUtil::checkNotNull($this->baseQuantifierType, 'baseQuantifierType');
		RequestCheckUtil::checkNotNull($this->circulation, 'circulation');
		RequestCheckUtil::checkNotNull($this->couponType, 'couponType');
		RequestCheckUtil::checkNotNull($this->denomination, 'denomination');
		RequestCheckUtil::checkNotNull($this->effectiveEndTime, 'effectiveEndTime');
		RequestCheckUtil::checkNotNull($this->effectiveStartTime, 'effectiveStartTime');
		RequestCheckUtil::checkNotNull($this->limitCollarCount, 'limitCollarCount');
		RequestCheckUtil::checkNotNull($this->limitCollarEveyDay, 'limitCollarEveyDay');
		RequestCheckUtil::checkNotNull($this->showRegion, 'showRegion');
		RequestCheckUtil::checkNotNull($this->useChannelStr, 'useChannelStr');
		RequestCheckUtil::checkNotNull($this->validityType, 'validityType');
		RequestCheckUtil::checkNotNull($this->voucheObject, 'voucheObject');
	}
	
	public function getBizName(){
		return "addSsshopcoupon";
	}
	
}

?>