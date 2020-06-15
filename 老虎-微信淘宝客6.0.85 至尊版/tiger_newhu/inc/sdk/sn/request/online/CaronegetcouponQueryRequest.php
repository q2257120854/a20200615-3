<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-8
 */
class CaronegetcouponQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $channelId;
	
	/**
	 * 
	 */
	private $city;
	
	/**
	 * 
	 */
	private $memberId;
	
	/**
	 * 
	 */
	private $productList;
	
	public function getChannelId() {
		return $this->channelId;
	}
	
	public function setChannelId($channelId) {
		$this->channelId = $channelId;
		$this->apiParams["channelId"] = $channelId;
	}
	
	public function getCity() {
		return $this->city;
	}
	
	public function setCity($city) {
		$this->city = $city;
		$this->apiParams["city"] = $city;
	}
	
	public function getMemberId() {
		return $this->memberId;
	}
	
	public function setMemberId($memberId) {
		$this->memberId = $memberId;
		$this->apiParams["memberId"] = $memberId;
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
	
	public function getApiMethodName(){
		return 'suning.online.caronegetcoupon.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channelId, 'channelId');
		RequestCheckUtil::checkNotNull($this->city, 'city');
		RequestCheckUtil::checkNotNull($this->memberId, 'memberId');
	}
	
	public function getBizName(){
		return "queryCaronegetcoupon";
	}
	
}

class ProductList {

	private $apiParams = array();
	
	private $businessSign;
	
	private $marketingActivityType;
	
	private $productId;
	
	public function getBusinessSign() {
		return $this->businessSign;
	}

	public function setBusinessSign($businessSign) {
		$this->businessSign = $businessSign;
		$this->apiParams["businessSign"] = $businessSign;
	}
	
	public function getMarketingActivityType() {
		return $this->marketingActivityType;
	}

	public function setMarketingActivityType($marketingActivityType) {
		$this->marketingActivityType = $marketingActivityType;
		$this->apiParams["marketingActivityType"] = $marketingActivityType;
	}
	
	public function getProductId() {
		return $this->productId;
	}

	public function setProductId($productId) {
		$this->productId = $productId;
		$this->apiParams["productId"] = $productId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>