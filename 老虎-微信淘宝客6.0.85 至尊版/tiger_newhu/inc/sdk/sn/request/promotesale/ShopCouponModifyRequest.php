<?php
/**
 * 苏宁开放平台接口 - 店铺优惠券活动修改
 *
 * @author suning
 * @date   2015-10-14
 */
class ShopCouponModifyRequest  extends SuningRequest{
	
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
	 * 促销活动ID。促销活动ID
	 */
	private $activityCode;
	
	/**
	 * 发行量。券张数，1~999999999
	 */
	private $activityTimesLimit;
	
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
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getActivityTimesLimit() {
		return $this->activityTimesLimit;
	}
	
	public function setActivityTimesLimit($activityTimesLimit) {
		$this->activityTimesLimit = $activityTimesLimit;
		$this->apiParams["activityTimesLimit"] = $activityTimesLimit;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.shopcoupon.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
	}
	
	public function getBizName(){
		return "modifyShopCoupon";
	}
	
}

?>