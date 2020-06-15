<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-8-24
 */
class MobileCouponModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $operation;
	
	/**
	 * 
	 */
	private $couponId;
	
	/**
	 * 
	 */
	private $couponName;
	
	/**
	 * 
	 */
	private $couponInfo;
	
	public function getOperation() {
		return $this->operation;
	}
	
	public function setOperation($operation) {
		$this->operation = $operation;
		$this->apiParams["operation"] = $operation;
	}
	
	public function getCouponId() {
		return $this->couponId;
	}
	
	public function setCouponId($couponId) {
		$this->couponId = $couponId;
		$this->apiParams["couponId"] = $couponId;
	}
	
	public function getCouponName() {
		return $this->couponName;
	}
	
	public function setCouponName($couponName) {
		$this->couponName = $couponName;
		$this->apiParams["couponName"] = $couponName;
	}
	
	public function getCouponInfo() {
		return $this->couponInfo;
	}
	
	public function setCouponInfo($couponInfo) {
		$this->couponInfo = $couponInfo;
		$arr = array();
		foreach ($couponInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["couponInfo"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.mobilecoupon.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->couponId, 'couponId');
	}
	
	public function getBizName(){
		return "modifyMobileCoupon";
	}
	
}

class CouponInfo {

	private $apiParams = array();
	
	private $couponLink;
	
	private $couponPicUrl;
	
	public function getCouponLink() {
		return $this->couponLink;
	}

	public function setCouponLink($couponLink) {
		$this->couponLink = $couponLink;
		$this->apiParams["couponLink"] = $couponLink;
	}
	
	public function getCouponPicUrl() {
		return $this->couponPicUrl;
	}

	public function setCouponPicUrl($couponPicUrl) {
		$this->couponPicUrl = $couponPicUrl;
		$this->apiParams["couponPicUrl"] = $couponPicUrl;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>