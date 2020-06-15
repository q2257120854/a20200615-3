<?php
/**
 * 苏宁开放平台接口 - 店铺优惠券活动新增
 *
 * @author suning
 * @date   2015-10-14
 */
class ShopCouponAddRequest  extends SuningRequest{
	
	/**
	 * 活动名称。不超过32个字符
	 */
	private $activityName;
	
	/**
	 * 活动开始时间。即返券开始时间，不得早于系统当前时间
	 */
	private $startTime;
	
	/**
	 * 活动结束时间。即返券结束时间，不得早于开始时间，时间跨度180天
	 */
	private $endTime;
	
	/**
	 * 活动方式。1：顾客领取
	 */
	private $activityPattern;
	
	/**
	 * 展示区域。1：四级和聚合页展示
	 */
	private $showRegion;
	
	/**
	 * 发行量。券张数，1~999999999
	 */
	private $activityTimesLimit;
	
	/**
	 * 领券对象。选项：0不限、1仅限苏宁员工
	 */
	private $assignedRole;
	
	/**
	 * 券面额。1~1000的整数
	 */
	private $rewardAmount;
	
	/**
	 * 券类型。1：店铺易券
	 */
	private $couponType;
	
	/**
	 * 使用金额。券类型1：订单满X元使用，X为1~999999999（9个9）之间的金额；
	 */
	private $baseAmount;
	
	/**
	 * 每人限领。0代表不限、1、2、3、4、5
	 */
	private $peopleActivityTimesLimit;
	
	/**
	 * 券生效日期。精确到天；
	 */
	private $effectStartTime;
	
	/**
	 * 券失效日期。精确到天；
	 */
	private $effectEndTime;
	
	/**
	 * 用券渠道。1代表PC，2代表移动端，3PC和移动端
	 */
	private $channelInfo;
	
	/**
	 * 商品活动范围类型。1全店铺；2部分商品，最少添加1个商品（SKU），最多添加500个商品（SKU）；3全店铺排除部分商品
	 */
	private $productRange;
	
	/**
	 * 
	 */
	private $productList;
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getActivityPattern() {
		return $this->activityPattern;
	}
	
	public function setActivityPattern($activityPattern) {
		$this->activityPattern = $activityPattern;
		$this->apiParams["activityPattern"] = $activityPattern;
	}
	
	public function getShowRegion() {
		return $this->showRegion;
	}
	
	public function setShowRegion($showRegion) {
		$this->showRegion = $showRegion;
		$this->apiParams["showRegion"] = $showRegion;
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
	
	public function getRewardAmount() {
		return $this->rewardAmount;
	}
	
	public function setRewardAmount($rewardAmount) {
		$this->rewardAmount = $rewardAmount;
		$this->apiParams["rewardAmount"] = $rewardAmount;
	}
	
	public function getCouponType() {
		return $this->couponType;
	}
	
	public function setCouponType($couponType) {
		$this->couponType = $couponType;
		$this->apiParams["couponType"] = $couponType;
	}
	
	public function getBaseAmount() {
		return $this->baseAmount;
	}
	
	public function setBaseAmount($baseAmount) {
		$this->baseAmount = $baseAmount;
		$this->apiParams["baseAmount"] = $baseAmount;
	}
	
	public function getPeopleActivityTimesLimit() {
		return $this->peopleActivityTimesLimit;
	}
	
	public function setPeopleActivityTimesLimit($peopleActivityTimesLimit) {
		$this->peopleActivityTimesLimit = $peopleActivityTimesLimit;
		$this->apiParams["peopleActivityTimesLimit"] = $peopleActivityTimesLimit;
	}
	
	public function getEffectStartTime() {
		return $this->effectStartTime;
	}
	
	public function setEffectStartTime($effectStartTime) {
		$this->effectStartTime = $effectStartTime;
		$this->apiParams["effectStartTime"] = $effectStartTime;
	}
	
	public function getEffectEndTime() {
		return $this->effectEndTime;
	}
	
	public function setEffectEndTime($effectEndTime) {
		$this->effectEndTime = $effectEndTime;
		$this->apiParams["effectEndTime"] = $effectEndTime;
	}
	
	public function getChannelInfo() {
		return $this->channelInfo;
	}
	
	public function setChannelInfo($channelInfo) {
		$this->channelInfo = $channelInfo;
		$this->apiParams["channelInfo"] = $channelInfo;
	}
	
	public function getProductRange() {
		return $this->productRange;
	}
	
	public function setProductRange($productRange) {
		$this->productRange = $productRange;
		$this->apiParams["productRange"] = $productRange;
	}
	
	public function getProductList() {
		return $this->productList;
	}
	
	public function setProductList($productList) {
		$this->productList = $productList;
		$arr = array();
		foreach ($productList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["productList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.shopcoupon.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->activityPattern, 'activityPattern');
		RequestCheckUtil::checkNotNull($this->showRegion, 'showRegion');
		RequestCheckUtil::checkNotNull($this->activityTimesLimit, 'activityTimesLimit');
		RequestCheckUtil::checkNotNull($this->assignedRole, 'assignedRole');
		RequestCheckUtil::checkNotNull($this->rewardAmount, 'rewardAmount');
		RequestCheckUtil::checkNotNull($this->couponType, 'couponType');
		RequestCheckUtil::checkNotNull($this->baseAmount, 'baseAmount');
		RequestCheckUtil::checkNotNull($this->peopleActivityTimesLimit, 'peopleActivityTimesLimit');
		RequestCheckUtil::checkNotNull($this->effectStartTime, 'effectStartTime');
		RequestCheckUtil::checkNotNull($this->effectEndTime, 'effectEndTime');
		RequestCheckUtil::checkNotNull($this->channelInfo, 'channelInfo');
		RequestCheckUtil::checkNotNull($this->productRange, 'productRange');
		RequestCheckUtil::checkNotNull($this->productList, 'productList');
	}
	
	public function getBizName(){
		return "addShopCoupon";
	}
	
}

class ProductList {

	private $apiParams = array();
	
	private $productCode;
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>