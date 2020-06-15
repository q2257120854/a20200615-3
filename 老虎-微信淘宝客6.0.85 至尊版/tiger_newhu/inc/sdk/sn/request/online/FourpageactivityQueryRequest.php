<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-9
 */
class FourpageactivityQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityRange;
	
	/**
	 * 
	 */
	private $businessSign;
	
	/**
	 * 
	 */
	private $chanId;
	
	/**
	 * 
	 */
	private $city;
	
	/**
	 * 
	 */
	private $cmmdtyCode;
	
	/**
	 * 
	 */
	private $marketingActivityType;
	
	/**
	 * 
	 */
	private $memberNo;
	
	/**
	 * 
	 */
	private $price;
	
	public function getActivityRange() {
		return $this->activityRange;
	}
	
	public function setActivityRange($activityRange) {
		$this->activityRange = $activityRange;
		$this->apiParams["activityRange"] = $activityRange;
	}
	
	public function getBusinessSign() {
		return $this->businessSign;
	}
	
	public function setBusinessSign($businessSign) {
		$this->businessSign = $businessSign;
		$this->apiParams["businessSign"] = $businessSign;
	}
	
	public function getChanId() {
		return $this->chanId;
	}
	
	public function setChanId($chanId) {
		$this->chanId = $chanId;
		$this->apiParams["chanId"] = $chanId;
	}
	
	public function getCity() {
		return $this->city;
	}
	
	public function setCity($city) {
		$this->city = $city;
		$this->apiParams["city"] = $city;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}
	
	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getMarketingActivityType() {
		return $this->marketingActivityType;
	}
	
	public function setMarketingActivityType($marketingActivityType) {
		$this->marketingActivityType = $marketingActivityType;
		$this->apiParams["marketingActivityType"] = $marketingActivityType;
	}
	
	public function getMemberNo() {
		return $this->memberNo;
	}
	
	public function setMemberNo($memberNo) {
		$this->memberNo = $memberNo;
		$this->apiParams["memberNo"] = $memberNo;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getApiMethodName(){
		return 'suning.online.fourpageactivity.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityRange, 'activityRange');
		RequestCheckUtil::checkNotNull($this->businessSign, 'businessSign');
		RequestCheckUtil::checkNotNull($this->chanId, 'chanId');
		RequestCheckUtil::checkNotNull($this->city, 'city');
		RequestCheckUtil::checkNotNull($this->cmmdtyCode, 'cmmdtyCode');
		RequestCheckUtil::checkNotNull($this->marketingActivityType, 'marketingActivityType');
		RequestCheckUtil::checkNotNull($this->memberNo, 'memberNo');
		RequestCheckUtil::checkNotNull($this->price, 'price');
	}
	
	public function getBizName(){
		return "queryFourpageactivity";
	}
	
}

?>