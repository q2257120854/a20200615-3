<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-22
 */
class CarttwoactandcouponConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cartTwoNo;
	
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
	private $couponUsedList;
	
	/**
	 * 
	 */
	private $mainProductList;
	
	/**
	 * 
	 */
	private $memberNo;
	
	public function getCartTwoNo() {
		return $this->cartTwoNo;
	}
	
	public function setCartTwoNo($cartTwoNo) {
		$this->cartTwoNo = $cartTwoNo;
		$this->apiParams["cartTwoNo"] = $cartTwoNo;
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
	
	public function getCouponUsedList() {
		return $this->couponUsedList;
	}
	
	public function setCouponUsedList($couponUsedList) {
		$this->couponUsedList = $couponUsedList;
		$arr = array();
		foreach ($couponUsedList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["couponUsedList"] = $arr;
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
		return 'suning.online.carttwoactandcoupon.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cartTwoNo, 'cartTwoNo');
		RequestCheckUtil::checkNotNull($this->chanId, 'chanId');
		RequestCheckUtil::checkNotNull($this->city, 'city');
		RequestCheckUtil::checkNotNull($this->memberNo, 'memberNo');
	}
	
	public function getBizName(){
		return "confirmCarttwoactandcoupon";
	}
	
}

class CouponUsedList {

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

class MainProductList {

	private $apiParams = array();
	
	private $businessSign;
	
	private $cmmdtyCode;
	
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