<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-8-24
 */
class MobileCouponAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $couponName;
	
	/**
	 * 
	 */
	private $couponInfo;
	
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
		return 'suning.custom.mobilecoupon.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->couponName, 'couponName');
	}
	
	public function getBizName(){
		return "addMobileCoupon";
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