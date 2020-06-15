<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-25
 */
class BtborderbysupplymodeCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $creator;
	
	/**
	 * 
	 */
	private $orderDelivery;
	
	/**
	 * 
	 */
	private $orderItems;
	
	/**
	 * 
	 */
	private $remark;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $submitType;
	
	/**
	 * 
	 */
	private $supplyMode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getCreator() {
		return $this->creator;
	}
	
	public function setCreator($creator) {
		$this->creator = $creator;
		$this->apiParams["creator"] = $creator;
	}
	
	public function getOrderDelivery() {
		return $this->orderDelivery;
	}
	
	public function setOrderDelivery($orderDelivery) {
		$this->orderDelivery = $orderDelivery;
		$this->apiParams["orderDelivery"] = $orderDelivery->getApiParams();
	}
	
	public function getOrderItems() {
		return $this->orderItems;
	}
	
	public function setOrderItems($orderItems) {
		$this->orderItems = $orderItems;
		$arr = array();
		foreach ($orderItems as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItems"] = $arr;
	}
	
	public function getRemark() {
		return $this->remark;
	}
	
	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getSubmitType() {
		return $this->submitType;
	}
	
	public function setSubmitType($submitType) {
		$this->submitType = $submitType;
		$this->apiParams["submitType"] = $submitType;
	}
	
	public function getSupplyMode() {
		return $this->supplyMode;
	}
	
	public function setSupplyMode($supplyMode) {
		$this->supplyMode = $supplyMode;
		$this->apiParams["supplyMode"] = $supplyMode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.btborderbysupplymode.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->creator, 'creator');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
		RequestCheckUtil::checkNotNull($this->submitType, 'submitType');
		RequestCheckUtil::checkNotNull($this->supplyMode, 'supplyMode');
	}
	
	public function getBizName(){
		return "createBtborderbysupplymode";
	}
	
}

class OrderDelivery {

	private $apiParams = array();
	
	private $receiverCity;
	
	private $receiverDetailAddress;
	
	private $receiverDistrict;
	
	private $receiverMobile;
	
	private $receiverName;
	
	private $receiverProvince;
	
	private $receiverTelephone;
	
	private $receiverTown;
	
	public function getReceiverCity() {
		return $this->receiverCity;
	}

	public function setReceiverCity($receiverCity) {
		$this->receiverCity = $receiverCity;
		$this->apiParams["receiverCity"] = $receiverCity;
	}
	
	public function getReceiverDetailAddress() {
		return $this->receiverDetailAddress;
	}

	public function setReceiverDetailAddress($receiverDetailAddress) {
		$this->receiverDetailAddress = $receiverDetailAddress;
		$this->apiParams["receiverDetailAddress"] = $receiverDetailAddress;
	}
	
	public function getReceiverDistrict() {
		return $this->receiverDistrict;
	}

	public function setReceiverDistrict($receiverDistrict) {
		$this->receiverDistrict = $receiverDistrict;
		$this->apiParams["receiverDistrict"] = $receiverDistrict;
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
	
	public function getReceiverProvince() {
		return $this->receiverProvince;
	}

	public function setReceiverProvince($receiverProvince) {
		$this->receiverProvince = $receiverProvince;
		$this->apiParams["receiverProvince"] = $receiverProvince;
	}
	
	public function getReceiverTelephone() {
		return $this->receiverTelephone;
	}

	public function setReceiverTelephone($receiverTelephone) {
		$this->receiverTelephone = $receiverTelephone;
		$this->apiParams["receiverTelephone"] = $receiverTelephone;
	}
	
	public function getReceiverTown() {
		return $this->receiverTown;
	}

	public function setReceiverTown($receiverTown) {
		$this->receiverTown = $receiverTown;
		$this->apiParams["receiverTown"] = $receiverTown;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class OrderItems {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	private $freight;
	
	private $quantity;
	
	private $supplierCode;
	
	private $unitPrice;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getFreight() {
		return $this->freight;
	}

	public function setFreight($freight) {
		$this->freight = $freight;
		$this->apiParams["freight"] = $freight;
	}
	
	public function getQuantity() {
		return $this->quantity;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
		$this->apiParams["quantity"] = $quantity;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getUnitPrice() {
		return $this->unitPrice;
	}

	public function setUnitPrice($unitPrice) {
		$this->unitPrice = $unitPrice;
		$this->apiParams["unitPrice"] = $unitPrice;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>