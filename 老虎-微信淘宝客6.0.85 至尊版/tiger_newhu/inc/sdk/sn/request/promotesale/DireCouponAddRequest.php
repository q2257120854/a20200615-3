<?php
/**
 * 苏宁开放平台接口 - 定向发券活动创建
 *
 * @author suning
 * @date   2015-12-14
 */
class DireCouponAddRequest  extends SuningRequest{
	
	/**
	 * 活动名称。
	 */
	private $activityName;
	
	/**
	 * 券面额。只能输入1~1000的整数
	 */
	private $rewardAmount;
	
	/**
	 * 限制使用订单金额。只能输入1-999999999之间的整数
	 */
	private $baseAmount;
	
	/**
	 * 券有效期开始时间。只能选择到天；券开始时间≥当前日期
	 */
	private $startTime;
	
	/**
	 * 券有效期结束时间。只能选择到天；券开始时间≤券结束时间≤券开始时间+180天
	 */
	private $endTime;
	
	/**
	 * 使用渠道。1：网站2：移动终端可以多选，逗号隔开
	 */
	private $channelInfo;
	
	/**
	 * 是否指定商品。1：全店铺:2：部分商品
	 */
	private $isAssign;
	
	/**
	 * 
	 */
	private $productList;
	
	/**
	 * 
	 */
	private $custnumList;
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
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
	
	public function getIsAssign() {
		return $this->isAssign;
	}
	
	public function setIsAssign($isAssign) {
		$this->isAssign = $isAssign;
		$this->apiParams["isAssign"] = $isAssign;
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
	
	public function getCustnumList() {
		return $this->custnumList;
	}
	
	public function setCustnumList($custnumList) {
		$this->custnumList = $custnumList;
		$arr = array();
		foreach ($custnumList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["custnumList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.direcoupon.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->rewardAmount, 'rewardAmount');
		RequestCheckUtil::checkNotNull($this->baseAmount, 'baseAmount');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->channelInfo, 'channelInfo');
		RequestCheckUtil::checkNotNull($this->isAssign, 'isAssign');
		RequestCheckUtil::checkNotNull($this->productList, 'productList');
		RequestCheckUtil::checkNotNull($this->custnumList, 'custnumList');
	}
	
	public function getBizName(){
		return "addDireCoupon";
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

class CustnumList {

	private $apiParams = array();
	
	private $custnum;
	
	public function getCustnum() {
		return $this->custnum;
	}

	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>