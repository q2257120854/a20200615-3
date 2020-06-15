<?php
/**
 * 苏宁开放平台接口 - 订单优惠活动创建
 *
 * @author suning
 * @date   2016-6-21
 */
class OrderCouponAddRequest  extends SuningRequest{
	
	/**
	 * 活动名称
	 */
	private $activityName;
	
	/**
	 * 活动开始时间。结束时间 > 开始时间 >= 当前时间+系统处理时间（此处为10分钟）
	 */
	private $startTime;
	
	/**
	 * 活动结束时间。活动开始时间≤活动结束时间≤活动开始时间+180天
	 */
	private $endTime;
	
	/**
	 * 活动渠道。31-PC、32-移动、34-电销渠道。可以多选，用英文逗号隔开
	 */
	private $channelInfo;
	
	/**
	 * 活动商品类型。参与活动商品的类型，，1，代表全店铺商品；2，代表指定商品；3排除某部分商品
	 */
	private $activityProductType;
	
	/**
	 * 券使用商品类型。返券能够买的商品集合，1，代表全店铺商品；2，代表指定商品；3排除某部分商品
	 */
	private $couponProductType;
	
	/**
	 * 返券总量类型。1，不超过多少元；2，不超过多少张
	 */
	private $returnCouponType;
	
	/**
	 * 返券总量阀值（元/张）。返券总金额，不得超过 999999999元/返券总张数，不得超过 999999999张
	 */
	private $returnCouponValue;
	
	/**
	 * 活动限制类型。1，限制；2，不限制，当优惠方式为2，订单返券，必填
	 */
	private $activityLimit;
	
	/**
	 * 用户限制总次数。限制用户参加活动的总次数。当活动类型为1时，总次数和每天次数必填其一
	 */
	private $activityTimesLimit;
	
	/**
	 * 用户每天限制的次数。限制用户每天参加活动的次数。当活动类型为1时，总次数和每天次数必填其一
	 */
	private $peopleActivityTimesLimit;
	
	/**
	 * 券有效天数。只能到天，最多30天，当优惠方式为2，订单返券，必填
	 */
	private $effectDays;
	
	/**
	 * 优惠维度。1，订单金额；2，件数
	 */
	private $baseQuantifierType;
	
	/**
	 * 优惠方式。当优惠维度为1时，优惠方式可以为1，订单直降；2，订单返券；3、订单包邮；当优惠维度为2时，优惠方式可以为，3、订单包邮；4、订单打折；5、订单减件
	 */
	private $rewardType;
	
	/**
	 * 不包邮区域。省份代码，可以从城市代码获取接口里面获取，如有多个英文逗号隔开。
	 */
	private $areaCode;
	
	/**
	 * 是否上不封顶。当优惠方式为1，订单直降时，且优惠层级为1时，必填。1代表是，2代表否。
	 */
	private $booleanCap;
	
	/**
	 * 
	 */
	private $rewardList;
	
	/**
	 * 
	 */
	private $couponProductList;
	
	/**
	 * 
	 */
	private $activityProductList;
	
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
	
	public function getChannelInfo() {
		return $this->channelInfo;
	}
	
	public function setChannelInfo($channelInfo) {
		$this->channelInfo = $channelInfo;
		$this->apiParams["channelInfo"] = $channelInfo;
	}
	
	public function getActivityProductType() {
		return $this->activityProductType;
	}
	
	public function setActivityProductType($activityProductType) {
		$this->activityProductType = $activityProductType;
		$this->apiParams["activityProductType"] = $activityProductType;
	}
	
	public function getCouponProductType() {
		return $this->couponProductType;
	}
	
	public function setCouponProductType($couponProductType) {
		$this->couponProductType = $couponProductType;
		$this->apiParams["couponProductType"] = $couponProductType;
	}
	
	public function getReturnCouponType() {
		return $this->returnCouponType;
	}
	
	public function setReturnCouponType($returnCouponType) {
		$this->returnCouponType = $returnCouponType;
		$this->apiParams["returnCouponType"] = $returnCouponType;
	}
	
	public function getReturnCouponValue() {
		return $this->returnCouponValue;
	}
	
	public function setReturnCouponValue($returnCouponValue) {
		$this->returnCouponValue = $returnCouponValue;
		$this->apiParams["returnCouponValue"] = $returnCouponValue;
	}
	
	public function getActivityLimit() {
		return $this->activityLimit;
	}
	
	public function setActivityLimit($activityLimit) {
		$this->activityLimit = $activityLimit;
		$this->apiParams["activityLimit"] = $activityLimit;
	}
	
	public function getActivityTimesLimit() {
		return $this->activityTimesLimit;
	}
	
	public function setActivityTimesLimit($activityTimesLimit) {
		$this->activityTimesLimit = $activityTimesLimit;
		$this->apiParams["activityTimesLimit"] = $activityTimesLimit;
	}
	
	public function getPeopleActivityTimesLimit() {
		return $this->peopleActivityTimesLimit;
	}
	
	public function setPeopleActivityTimesLimit($peopleActivityTimesLimit) {
		$this->peopleActivityTimesLimit = $peopleActivityTimesLimit;
		$this->apiParams["peopleActivityTimesLimit"] = $peopleActivityTimesLimit;
	}
	
	public function getEffectDays() {
		return $this->effectDays;
	}
	
	public function setEffectDays($effectDays) {
		$this->effectDays = $effectDays;
		$this->apiParams["effectDays"] = $effectDays;
	}
	
	public function getBaseQuantifierType() {
		return $this->baseQuantifierType;
	}
	
	public function setBaseQuantifierType($baseQuantifierType) {
		$this->baseQuantifierType = $baseQuantifierType;
		$this->apiParams["baseQuantifierType"] = $baseQuantifierType;
	}
	
	public function getRewardType() {
		return $this->rewardType;
	}
	
	public function setRewardType($rewardType) {
		$this->rewardType = $rewardType;
		$this->apiParams["rewardType"] = $rewardType;
	}
	
	public function getAreaCode() {
		return $this->areaCode;
	}
	
	public function setAreaCode($areaCode) {
		$this->areaCode = $areaCode;
		$this->apiParams["areaCode"] = $areaCode;
	}
	
	public function getBooleanCap() {
		return $this->booleanCap;
	}
	
	public function setBooleanCap($booleanCap) {
		$this->booleanCap = $booleanCap;
		$this->apiParams["booleanCap"] = $booleanCap;
	}
	
	public function getRewardList() {
		return $this->rewardList;
	}
	
	public function setRewardList($rewardList) {
		$this->rewardList = $rewardList;
		$arr = array();
		foreach ($rewardList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["rewardList"] = $arr;
	}
	
	public function getCouponProductList() {
		return $this->couponProductList;
	}
	
	public function setCouponProductList($couponProductList) {
		$this->couponProductList = $couponProductList;
		$arr = array();
		foreach ($couponProductList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["couponProductList"] = $arr;
	}
	
	public function getActivityProductList() {
		return $this->activityProductList;
	}
	
	public function setActivityProductList($activityProductList) {
		$this->activityProductList = $activityProductList;
		$arr = array();
		foreach ($activityProductList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["activityProductList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.ordercoupon.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->channelInfo, 'channelInfo');
		RequestCheckUtil::checkNotNull($this->activityProductType, 'activityProductType');
		RequestCheckUtil::checkNotNull($this->couponProductType, 'couponProductType');
		RequestCheckUtil::checkNotNull($this->returnCouponType, 'returnCouponType');
		RequestCheckUtil::checkNotNull($this->baseQuantifierType, 'baseQuantifierType');
		RequestCheckUtil::checkNotNull($this->rewardType, 'rewardType');
	}
	
	public function getBizName(){
		return "addOrderCoupon";
	}
	
}

class RewardList {

	private $apiParams = array();
	
	private $floor;
	
	private $discountValue;
	
	private $rewardAmount;
	
	private $baseAmount;
	
	private $discountThreshold;
	
	private $cutAmount;
	
	private $reduceLimit;
	
	public function getFloor() {
		return $this->floor;
	}

	public function setFloor($floor) {
		$this->floor = $floor;
		$this->apiParams["floor"] = $floor;
	}
	
	public function getDiscountValue() {
		return $this->discountValue;
	}

	public function setDiscountValue($discountValue) {
		$this->discountValue = $discountValue;
		$this->apiParams["discountValue"] = $discountValue;
	}
	
	public function getRewardAmount() {
		return $this->rewardAmount;
	}

	public function setRewardAmount($rewardAmount) {
		$this->rewardAmount = $rewardAmount;
		$this->apiParams["rewardAmount"] = $rewardAmount;
	}
	
	public function getBaseAmount() {
		return $this->baseAmount;
	}

	public function setBaseAmount($baseAmount) {
		$this->baseAmount = $baseAmount;
		$this->apiParams["baseAmount"] = $baseAmount;
	}
	
	public function getDiscountThreshold() {
		return $this->discountThreshold;
	}

	public function setDiscountThreshold($discountThreshold) {
		$this->discountThreshold = $discountThreshold;
		$this->apiParams["discountThreshold"] = $discountThreshold;
	}
	
	public function getCutAmount() {
		return $this->cutAmount;
	}

	public function setCutAmount($cutAmount) {
		$this->cutAmount = $cutAmount;
		$this->apiParams["cutAmount"] = $cutAmount;
	}
	
	public function getReduceLimit() {
		return $this->reduceLimit;
	}

	public function setReduceLimit($reduceLimit) {
		$this->reduceLimit = $reduceLimit;
		$this->apiParams["reduceLimit"] = $reduceLimit;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class CouponProductList {

	private $apiParams = array();
	
	private $couponProductCode;
	
	public function getCouponProductCode() {
		return $this->couponProductCode;
	}

	public function setCouponProductCode($couponProductCode) {
		$this->couponProductCode = $couponProductCode;
		$this->apiParams["couponProductCode"] = $couponProductCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ActivityProductList {

	private $apiParams = array();
	
	private $activityProductCode;
	
	public function getActivityProductCode() {
		return $this->activityProductCode;
	}

	public function setActivityProductCode($activityProductCode) {
		$this->activityProductCode = $activityProductCode;
		$this->apiParams["activityProductCode"] = $activityProductCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>