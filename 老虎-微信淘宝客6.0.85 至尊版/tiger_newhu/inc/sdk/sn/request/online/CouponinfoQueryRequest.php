<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-11
 */
class CouponinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $couponList;
	
	/**
	 * 
	 */
	private $mobileNum;
	
	public function getCouponList() {
		return $this->couponList;
	}
	
	public function setCouponList($couponList) {
		$this->couponList = $couponList;
		$arr = array();
		foreach ($couponList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["couponList"] = $arr;
	}
	
	public function getMobileNum() {
		return $this->mobileNum;
	}
	
	public function setMobileNum($mobileNum) {
		$this->mobileNum = $mobileNum;
		$this->apiParams["mobileNum"] = $mobileNum;
	}
	
	public function getApiMethodName(){
		return 'suning.online.couponinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->mobileNum, 'mobileNum');
	}
	
	public function getBizName(){
		return "queryCouponinfo";
	}
	
}

class CouponList {

	private $apiParams = array();
	
	private $couponNumber;
	
	public function getCouponNumber() {
		return $this->couponNumber;
	}

	public function setCouponNumber($couponNumber) {
		$this->couponNumber = $couponNumber;
		$this->apiParams["couponNumber"] = $couponNumber;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>