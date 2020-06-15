<?php
/**
 * 苏宁开放平台接口 - 订单返券活动修改
 *
 * @author suning
 * @date   2016-1-11
 */
class OrderCouponModifyRequest  extends SuningRequest{
	
	/**
	 * 促销活动ID。创建后返回的促销活动ID
	 */
	private $activityCode;
	
	/**
	 * 活动名称。
	 */
	private $activityName;
	
	/**
	 * 活动开始时间。活动开始时间≥当前日期，当活动状态为进行中时，不可修改。
	 */
	private $startTime;
	
	/**
	 * 活动结束时间。活动开始时间≤券结束时间≤活动开始时间+180天
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $activityProductList;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
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
		return 'suning.custom.ordercoupon.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
	}
	
	public function getBizName(){
		return "modifyOrderCoupon";
	}
	
}

class ActivityProductList {

	private $apiParams = array();
	
	private $productCode;
	
	private $operateType;
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getOperateType() {
		return $this->operateType;
	}

	public function setOperateType($operateType) {
		$this->operateType = $operateType;
		$this->apiParams["operateType"] = $operateType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>