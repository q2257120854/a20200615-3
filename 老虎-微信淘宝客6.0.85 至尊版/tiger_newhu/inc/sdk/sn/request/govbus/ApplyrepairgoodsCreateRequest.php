<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-6-25
 */
class ApplyrepairgoodsCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $address;
	
	/**
	 * 
	 */
	private $cityId;
	
	/**
	 * 
	 */
	private $countyId;
	
	/**
	 * 
	 */
	private $mobPhoneNum;
	
	/**
	 * 
	 */
	private $num;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $orderMemo;
	
	/**
	 * 
	 */
	private $phoneNum;
	
	/**
	 * 
	 */
	private $provinceId;
	
	/**
	 * 
	 */
	private $receiverName;
	
	/**
	 * 
	 */
	private $serviceTime;
	
	/**
	 * 
	 */
	private $skuId;
	
	/**
	 * 
	 */
	private $srvMemo;
	
	/**
	 * 
	 */
	private $townId;
	
	public function getAddress() {
		return $this->address;
	}
	
	public function setAddress($address) {
		$this->address = $address;
		$this->apiParams["address"] = $address;
	}
	
	public function getCityId() {
		return $this->cityId;
	}
	
	public function setCityId($cityId) {
		$this->cityId = $cityId;
		$this->apiParams["cityId"] = $cityId;
	}
	
	public function getCountyId() {
		return $this->countyId;
	}
	
	public function setCountyId($countyId) {
		$this->countyId = $countyId;
		$this->apiParams["countyId"] = $countyId;
	}
	
	public function getMobPhoneNum() {
		return $this->mobPhoneNum;
	}
	
	public function setMobPhoneNum($mobPhoneNum) {
		$this->mobPhoneNum = $mobPhoneNum;
		$this->apiParams["mobPhoneNum"] = $mobPhoneNum;
	}
	
	public function getNum() {
		return $this->num;
	}
	
	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getOrderMemo() {
		return $this->orderMemo;
	}
	
	public function setOrderMemo($orderMemo) {
		$this->orderMemo = $orderMemo;
		$this->apiParams["orderMemo"] = $orderMemo;
	}
	
	public function getPhoneNum() {
		return $this->phoneNum;
	}
	
	public function setPhoneNum($phoneNum) {
		$this->phoneNum = $phoneNum;
		$this->apiParams["phoneNum"] = $phoneNum;
	}
	
	public function getProvinceId() {
		return $this->provinceId;
	}
	
	public function setProvinceId($provinceId) {
		$this->provinceId = $provinceId;
		$this->apiParams["provinceId"] = $provinceId;
	}
	
	public function getReceiverName() {
		return $this->receiverName;
	}
	
	public function setReceiverName($receiverName) {
		$this->receiverName = $receiverName;
		$this->apiParams["receiverName"] = $receiverName;
	}
	
	public function getServiceTime() {
		return $this->serviceTime;
	}
	
	public function setServiceTime($serviceTime) {
		$this->serviceTime = $serviceTime;
		$this->apiParams["serviceTime"] = $serviceTime;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}
	
	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getSrvMemo() {
		return $this->srvMemo;
	}
	
	public function setSrvMemo($srvMemo) {
		$this->srvMemo = $srvMemo;
		$this->apiParams["srvMemo"] = $srvMemo;
	}
	
	public function getTownId() {
		return $this->townId;
	}
	
	public function setTownId($townId) {
		$this->townId = $townId;
		$this->apiParams["townId"] = $townId;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.applyrepairgoods.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->address, 'address');
		RequestCheckUtil::checkNotNull($this->cityId, 'cityId');
		RequestCheckUtil::checkNotNull($this->countyId, 'countyId');
		RequestCheckUtil::checkNotNull($this->mobPhoneNum, 'mobPhoneNum');
		RequestCheckUtil::checkNotNull($this->num, 'num');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->orderMemo, 'orderMemo');
		RequestCheckUtil::checkNotNull($this->provinceId, 'provinceId');
		RequestCheckUtil::checkNotNull($this->receiverName, 'receiverName');
		RequestCheckUtil::checkNotNull($this->serviceTime, 'serviceTime');
		RequestCheckUtil::checkNotNull($this->skuId, 'skuId');
	}
	
	public function getBizName(){
		return "createApplyrepairgoods";
	}
	
}

?>