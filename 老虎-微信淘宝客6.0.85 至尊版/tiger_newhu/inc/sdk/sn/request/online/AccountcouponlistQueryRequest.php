<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-8
 */
class AccountcouponlistQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $chanId;
	
	/**
	 * 
	 */
	private $couponStatus;
	
	/**
	 * 
	 */
	private $couponType;
	
	/**
	 * 
	 */
	private $memberId;
	
	/**
	 * 
	 */
	private $page;
	
	/**
	 * 
	 */
	private $perpageNumber;
	
	/**
	 * 
	 */
	private $timeRange;
	
	/**
	 * 
	 */
	private $timeType;
	
	public function getChanId() {
		return $this->chanId;
	}
	
	public function setChanId($chanId) {
		$this->chanId = $chanId;
		$this->apiParams["chanId"] = $chanId;
	}
	
	public function getCouponStatus() {
		return $this->couponStatus;
	}
	
	public function setCouponStatus($couponStatus) {
		$this->couponStatus = $couponStatus;
		$this->apiParams["couponStatus"] = $couponStatus;
	}
	
	public function getCouponType() {
		return $this->couponType;
	}
	
	public function setCouponType($couponType) {
		$this->couponType = $couponType;
		$this->apiParams["couponType"] = $couponType;
	}
	
	public function getMemberId() {
		return $this->memberId;
	}
	
	public function setMemberId($memberId) {
		$this->memberId = $memberId;
		$this->apiParams["memberId"] = $memberId;
	}
	
	public function getPage() {
		return $this->page;
	}
	
	public function setPage($page) {
		$this->page = $page;
		$this->apiParams["page"] = $page;
	}
	
	public function getPerpageNumber() {
		return $this->perpageNumber;
	}
	
	public function setPerpageNumber($perpageNumber) {
		$this->perpageNumber = $perpageNumber;
		$this->apiParams["perpageNumber"] = $perpageNumber;
	}
	
	public function getTimeRange() {
		return $this->timeRange;
	}
	
	public function setTimeRange($timeRange) {
		$this->timeRange = $timeRange;
		$this->apiParams["timeRange"] = $timeRange;
	}
	
	public function getTimeType() {
		return $this->timeType;
	}
	
	public function setTimeType($timeType) {
		$this->timeType = $timeType;
		$this->apiParams["timeType"] = $timeType;
	}
	
	public function getApiMethodName(){
		return 'suning.online.accountcouponlist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->chanId, 'chanId');
		RequestCheckUtil::checkNotNull($this->couponStatus, 'couponStatus');
		RequestCheckUtil::checkNotNull($this->couponType, 'couponType');
		RequestCheckUtil::checkNotNull($this->memberId, 'memberId');
		RequestCheckUtil::checkNotNull($this->page, 'page');
		RequestCheckUtil::checkNotNull($this->perpageNumber, 'perpageNumber');
		RequestCheckUtil::checkNotNull($this->timeRange, 'timeRange');
		RequestCheckUtil::checkNotNull($this->timeType, 'timeType');
	}
	
	public function getBizName(){
		return "queryAccountcouponlist";
	}
	
}

?>