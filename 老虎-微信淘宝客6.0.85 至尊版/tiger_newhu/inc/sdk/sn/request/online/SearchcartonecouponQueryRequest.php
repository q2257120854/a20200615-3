<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-8
 */
class SearchcartonecouponQueryRequest  extends SuningRequest{
	
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
	private $mainProductList;
	
	/**
	 * 
	 */
	private $memberNo;
	
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
	
	public function getMainProductList() {
		return $this->mainProductList;
	}
	
	public function setMainProductList($mainProductList) {
		$this->mainProductList = $mainProductList;
		$arr = array();
		foreach ($mainProductList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["mainProductList"] = $arr;
	}
	
	public function getMemberNo() {
		return $this->memberNo;
	}
	
	public function setMemberNo($memberNo) {
		$this->memberNo = $memberNo;
		$this->apiParams["memberNo"] = $memberNo;
	}
	
	public function getApiMethodName(){
		return 'suning.online.searchcartonecoupon.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->chanId, 'chanId');
		RequestCheckUtil::checkNotNull($this->city, 'city');
		RequestCheckUtil::checkNotNull($this->memberNo, 'memberNo');
	}
	
	public function getBizName(){
		return "querySearchcartonecoupon";
	}
	
}

class DiscountList {

	private $apiParams = array();
	
	private $activityType;
	
	private $discount;
	
	public function getActivityType() {
		return $this->activityType;
	}

	public function setActivityType($activityType) {
		$this->activityType = $activityType;
		$this->apiParams["activityType"] = $activityType;
	}
	
	public function getDiscount() {
		return $this->discount;
	}

	public function setDiscount($discount) {
		$this->discount = $discount;
		$this->apiParams["discount"] = $discount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class MainProductList {

	private $apiParams = array();
	
	private $businessSign;
	
	private $cmmdtyCode;
	
	private $discountList;
	
	private $itemId;
	
	private $marketingActivityType;
	
	private $price;
	
	private $saleNum;
	
	public function getBusinessSign() {
		return $this->businessSign;
	}

	public function setBusinessSign($businessSign) {
		$this->businessSign = $businessSign;
		$this->apiParams["businessSign"] = $businessSign;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getDiscountList() {
		return $this->discountList;
	}

	public function setDiscountList($discountList) {
		$this->discountList = $discountList;
		$arr = array();
		foreach ($discountList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["discountList"] = $arr;
	}
	
	public function getItemId() {
		return $this->itemId;
	}

	public function setItemId($itemId) {
		$this->itemId = $itemId;
		$this->apiParams["itemId"] = $itemId;
	}
	
	public function getMarketingActivityType() {
		return $this->marketingActivityType;
	}

	public function setMarketingActivityType($marketingActivityType) {
		$this->marketingActivityType = $marketingActivityType;
		$this->apiParams["marketingActivityType"] = $marketingActivityType;
	}
	
	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getSaleNum() {
		return $this->saleNum;
	}

	public function setSaleNum($saleNum) {
		$this->saleNum = $saleNum;
		$this->apiParams["saleNum"] = $saleNum;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>