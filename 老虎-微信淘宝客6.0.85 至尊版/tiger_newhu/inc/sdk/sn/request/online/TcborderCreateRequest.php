<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-4-9
 */
class TcborderCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $chanId;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $receiverAddress;
	
	/**
	 * 
	 */
	private $receiverCity;
	
	/**
	 * 
	 */
	private $receiverCounty;
	
	/**
	 * 
	 */
	private $receiverMobile;
	
	/**
	 * 
	 */
	private $receiverName;
	
	/**
	 * 
	 */
	private $receiverNationality;
	
	/**
	 * 
	 */
	private $receiverPhone;
	
	/**
	 * 
	 */
	private $receiverProvince;
	
	/**
	 * 
	 */
	private $receiverStreet;
	
	/**
	 * 
	 */
	private $receiverZip;
	
	/**
	 * 
	 */
	private $tcbOrderItemList;
	
	/**
	 * 
	 */
	private $totalFee;
	
	/**
	 * 
	 */
	private $totalNo;
	
	public function getChanId() {
		return $this->chanId;
	}
	
	public function setChanId($chanId) {
		$this->chanId = $chanId;
		$this->apiParams["chanId"] = $chanId;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getReceiverAddress() {
		return $this->receiverAddress;
	}
	
	public function setReceiverAddress($receiverAddress) {
		$this->receiverAddress = $receiverAddress;
		$this->apiParams["receiverAddress"] = $receiverAddress;
	}
	
	public function getReceiverCity() {
		return $this->receiverCity;
	}
	
	public function setReceiverCity($receiverCity) {
		$this->receiverCity = $receiverCity;
		$this->apiParams["receiverCity"] = $receiverCity;
	}
	
	public function getReceiverCounty() {
		return $this->receiverCounty;
	}
	
	public function setReceiverCounty($receiverCounty) {
		$this->receiverCounty = $receiverCounty;
		$this->apiParams["receiverCounty"] = $receiverCounty;
	}
	
	public function getReceiverMobile() {
		return $this->receiverMobile;
	}
	
	public function setReceiverMobile($receiverMobile) {
		$this->receiverMobile = $receiverMobile;
		$this->apiParams["receiverMobile"] = $receiverMobile;
	}
	
	public function getReceiverName() {
		return $this->receiverName;
	}
	
	public function setReceiverName($receiverName) {
		$this->receiverName = $receiverName;
		$this->apiParams["receiverName"] = $receiverName;
	}
	
	public function getReceiverNationality() {
		return $this->receiverNationality;
	}
	
	public function setReceiverNationality($receiverNationality) {
		$this->receiverNationality = $receiverNationality;
		$this->apiParams["receiverNationality"] = $receiverNationality;
	}
	
	public function getReceiverPhone() {
		return $this->receiverPhone;
	}
	
	public function setReceiverPhone($receiverPhone) {
		$this->receiverPhone = $receiverPhone;
		$this->apiParams["receiverPhone"] = $receiverPhone;
	}
	
	public function getReceiverProvince() {
		return $this->receiverProvince;
	}
	
	public function setReceiverProvince($receiverProvince) {
		$this->receiverProvince = $receiverProvince;
		$this->apiParams["receiverProvince"] = $receiverProvince;
	}
	
	public function getReceiverStreet() {
		return $this->receiverStreet;
	}
	
	public function setReceiverStreet($receiverStreet) {
		$this->receiverStreet = $receiverStreet;
		$this->apiParams["receiverStreet"] = $receiverStreet;
	}
	
	public function getReceiverZip() {
		return $this->receiverZip;
	}
	
	public function setReceiverZip($receiverZip) {
		$this->receiverZip = $receiverZip;
		$this->apiParams["receiverZip"] = $receiverZip;
	}
	
	public function getTcbOrderItemList() {
		return $this->tcbOrderItemList;
	}
	
	public function setTcbOrderItemList($tcbOrderItemList) {
		$this->tcbOrderItemList = $tcbOrderItemList;
		$arr = array();
		foreach ($tcbOrderItemList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["tcbOrderItemList"] = $arr;
	}
	
	public function getTotalFee() {
		return $this->totalFee;
	}
	
	public function setTotalFee($totalFee) {
		$this->totalFee = $totalFee;
		$this->apiParams["totalFee"] = $totalFee;
	}
	
	public function getTotalNo() {
		return $this->totalNo;
	}
	
	public function setTotalNo($totalNo) {
		$this->totalNo = $totalNo;
		$this->apiParams["totalNo"] = $totalNo;
	}
	
	public function getApiMethodName(){
		return 'suning.online.tcborder.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->chanId, 'chanId');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->receiverAddress, 'receiverAddress');
		RequestCheckUtil::checkNotNull($this->receiverCity, 'receiverCity');
		RequestCheckUtil::checkNotNull($this->receiverCounty, 'receiverCounty');
		RequestCheckUtil::checkNotNull($this->receiverMobile, 'receiverMobile');
		RequestCheckUtil::checkNotNull($this->receiverName, 'receiverName');
		RequestCheckUtil::checkNotNull($this->receiverProvince, 'receiverProvince');
		RequestCheckUtil::checkNotNull($this->totalFee, 'totalFee');
		RequestCheckUtil::checkNotNull($this->totalNo, 'totalNo');
	}
	
	public function getBizName(){
		return "createTcborder";
	}
	
}

class TcbOrderItemList {

	private $apiParams = array();
	
	private $orderItemId;
	
	private $orderTotalFee;
	
	private $outerSkuId;
	
	private $postage;
	
	private $price;
	
	private $saleNum;
	
	private $skuId;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getOrderTotalFee() {
		return $this->orderTotalFee;
	}

	public function setOrderTotalFee($orderTotalFee) {
		$this->orderTotalFee = $orderTotalFee;
		$this->apiParams["orderTotalFee"] = $orderTotalFee;
	}
	
	public function getOuterSkuId() {
		return $this->outerSkuId;
	}

	public function setOuterSkuId($outerSkuId) {
		$this->outerSkuId = $outerSkuId;
		$this->apiParams["outerSkuId"] = $outerSkuId;
	}
	
	public function getPostage() {
		return $this->postage;
	}

	public function setPostage($postage) {
		$this->postage = $postage;
		$this->apiParams["postage"] = $postage;
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
	
	public function getSkuId() {
		return $this->skuId;
	}

	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>