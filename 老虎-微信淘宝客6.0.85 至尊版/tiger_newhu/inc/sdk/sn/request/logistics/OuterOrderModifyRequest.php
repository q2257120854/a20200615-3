<?php
/**
 * 苏宁开放平台接口 - 外部订单修改接口
 *
 * @author suning
 * @date   2015-8-5
 */
class OuterOrderModifyRequest  extends SuningRequest{
	
	/**
	 * 外部系统。字母或数字
	 */
	private $oriSys;
	
	/**
	 * 
	 */
	private $orderItems;
	
	public function getOriSys() {
		return $this->oriSys;
	}
	
	public function setOriSys($oriSys) {
		$this->oriSys = $oriSys;
		$this->apiParams["oriSys"] = $oriSys;
	}
	
	public function getOrderItems() {
		return $this->orderItems;
	}
	
	public function setOrderItems($orderItems) {
		$this->orderItems = $orderItems;
		$this->apiParams["orderItems"] = $orderItems->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.logistics.outerorder.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderItems, 'orderItems');
	}
	
	public function getBizName(){
		return "modifyOuterOrder";
	}
	
}

class OrderItems {

	private $apiParams = array();
	
	private $orderItem;
	
	public function getOrderItem() {
		return $this->orderItem;
	}

	public function setOrderItem($orderItem) {
		$this->orderItem = $orderItem;
		$arr = array();
		foreach ($orderItem as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItem"] = $arr;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class OrderItem {

	private $apiParams = array();
	
	private $logisticsOrderId;
	
	private $changeReason;
	
	private $changeFlag;
	
	private $pickupDate;
	
	private $pickupTime;
	
	private $expectDate;
	
	private $expectTime;
	
	private $cashonDeliveryType;
	
	private $cashonDeliveryValue;
	
	private $changeDateTime;
	
	private $crossItems;
	
	private $orderPartners;
	
	public function getLogisticsOrderId() {
		return $this->logisticsOrderId;
	}

	public function setLogisticsOrderId($logisticsOrderId) {
		$this->logisticsOrderId = $logisticsOrderId;
		$this->apiParams["logisticsOrderId"] = $logisticsOrderId;
	}
	
	public function getChangeReason() {
		return $this->changeReason;
	}

	public function setChangeReason($changeReason) {
		$this->changeReason = $changeReason;
		$this->apiParams["changeReason"] = $changeReason;
	}
	
	public function getChangeFlag() {
		return $this->changeFlag;
	}

	public function setChangeFlag($changeFlag) {
		$this->changeFlag = $changeFlag;
		$this->apiParams["changeFlag"] = $changeFlag;
	}
	
	public function getPickupDate() {
		return $this->pickupDate;
	}

	public function setPickupDate($pickupDate) {
		$this->pickupDate = $pickupDate;
		$this->apiParams["pickupDate"] = $pickupDate;
	}
	
	public function getPickupTime() {
		return $this->pickupTime;
	}

	public function setPickupTime($pickupTime) {
		$this->pickupTime = $pickupTime;
		$this->apiParams["pickupTime"] = $pickupTime;
	}
	
	public function getExpectDate() {
		return $this->expectDate;
	}

	public function setExpectDate($expectDate) {
		$this->expectDate = $expectDate;
		$this->apiParams["expectDate"] = $expectDate;
	}
	
	public function getExpectTime() {
		return $this->expectTime;
	}

	public function setExpectTime($expectTime) {
		$this->expectTime = $expectTime;
		$this->apiParams["expectTime"] = $expectTime;
	}
	
	public function getCashonDeliveryType() {
		return $this->cashonDeliveryType;
	}

	public function setCashonDeliveryType($cashonDeliveryType) {
		$this->cashonDeliveryType = $cashonDeliveryType;
		$this->apiParams["cashonDeliveryType"] = $cashonDeliveryType;
	}
	
	public function getCashonDeliveryValue() {
		return $this->cashonDeliveryValue;
	}

	public function setCashonDeliveryValue($cashonDeliveryValue) {
		$this->cashonDeliveryValue = $cashonDeliveryValue;
		$this->apiParams["cashonDeliveryValue"] = $cashonDeliveryValue;
	}
	
	public function getChangeDateTime() {
		return $this->changeDateTime;
	}

	public function setChangeDateTime($changeDateTime) {
		$this->changeDateTime = $changeDateTime;
		$this->apiParams["changeDateTime"] = $changeDateTime;
	}
	
	public function getCrossItems() {
		return $this->crossItems;
	}

	public function setCrossItems($crossItems) {
		$this->crossItems = $crossItems;
		$this->apiParams["crossItems"] = $crossItems->getApiParams();
	}
	
	public function getOrderPartners() {
		return $this->orderPartners;
	}

	public function setOrderPartners($orderPartners) {
		$this->orderPartners = $orderPartners;
		$this->apiParams["orderPartners"] = $orderPartners->getApiParams();
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class CrossItems {

	private $apiParams = array();
	
	private $crossItem;
	
	public function getCrossItem() {
		return $this->crossItem;
	}

	public function setCrossItem($crossItem) {
		$this->crossItem = $crossItem;
		$arr = array();
		foreach ($crossItem as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["crossItem"] = $arr;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class CrossItem {

	private $apiParams = array();
	
	private $itemNumber;
	
	private $deliNumber;
	
	private $deliUnit;
	
	private $volume;
	
	private $volumeUnit;
	
	private $crossWeight;
	
	private $weightUnit;
	
	private $remarks;
	
	public function getItemNumber() {
		return $this->itemNumber;
	}

	public function setItemNumber($itemNumber) {
		$this->itemNumber = $itemNumber;
		$this->apiParams["itemNumber"] = $itemNumber;
	}
	
	public function getDeliNumber() {
		return $this->deliNumber;
	}

	public function setDeliNumber($deliNumber) {
		$this->deliNumber = $deliNumber;
		$this->apiParams["deliNumber"] = $deliNumber;
	}
	
	public function getDeliUnit() {
		return $this->deliUnit;
	}

	public function setDeliUnit($deliUnit) {
		$this->deliUnit = $deliUnit;
		$this->apiParams["deliUnit"] = $deliUnit;
	}
	
	public function getVolume() {
		return $this->volume;
	}

	public function setVolume($volume) {
		$this->volume = $volume;
		$this->apiParams["volume"] = $volume;
	}
	
	public function getVolumeUnit() {
		return $this->volumeUnit;
	}

	public function setVolumeUnit($volumeUnit) {
		$this->volumeUnit = $volumeUnit;
		$this->apiParams["volumeUnit"] = $volumeUnit;
	}
	
	public function getCrossWeight() {
		return $this->crossWeight;
	}

	public function setCrossWeight($crossWeight) {
		$this->crossWeight = $crossWeight;
		$this->apiParams["crossWeight"] = $crossWeight;
	}
	
	public function getWeightUnit() {
		return $this->weightUnit;
	}

	public function setWeightUnit($weightUnit) {
		$this->weightUnit = $weightUnit;
		$this->apiParams["weightUnit"] = $weightUnit;
	}
	
	public function getRemarks() {
		return $this->remarks;
	}

	public function setRemarks($remarks) {
		$this->remarks = $remarks;
		$this->apiParams["remarks"] = $remarks;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class OrderPartners {

	private $apiParams = array();
	
	private $orderPartner;
	
	public function getOrderPartner() {
		return $this->orderPartner;
	}

	public function setOrderPartner($orderPartner) {
		$this->orderPartner = $orderPartner;
		$arr = array();
		foreach ($orderPartner as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderPartner"] = $arr;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class OrderPartner {

	private $apiParams = array();
	
	private $itemNumber;
	
	private $customerType;
	
	private $customerId;
	
	private $name;
	
	private $address1;
	
	private $address2;
	
	private $zipCode;
	
	private $province;
	
	private $city;
	
	private $district;
	
	private $town;
	
	private $region;
	
	private $fixedlineTelephone;
	
	private $mobilePhone;
	
	private $email;
	
	private $transportationZone;
	
	public function getItemNumber() {
		return $this->itemNumber;
	}

	public function setItemNumber($itemNumber) {
		$this->itemNumber = $itemNumber;
		$this->apiParams["itemNumber"] = $itemNumber;
	}
	
	public function getCustomerType() {
		return $this->customerType;
	}

	public function setCustomerType($customerType) {
		$this->customerType = $customerType;
		$this->apiParams["customerType"] = $customerType;
	}
	
	public function getCustomerId() {
		return $this->customerId;
	}

	public function setCustomerId($customerId) {
		$this->customerId = $customerId;
		$this->apiParams["customerId"] = $customerId;
	}
	
	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	public function getAddress1() {
		return $this->address1;
	}

	public function setAddress1($address1) {
		$this->address1 = $address1;
		$this->apiParams["address1"] = $address1;
	}
	
	public function getAddress2() {
		return $this->address2;
	}

	public function setAddress2($address2) {
		$this->address2 = $address2;
		$this->apiParams["address2"] = $address2;
	}
	
	public function getZipCode() {
		return $this->zipCode;
	}

	public function setZipCode($zipCode) {
		$this->zipCode = $zipCode;
		$this->apiParams["zipCode"] = $zipCode;
	}
	
	public function getProvince() {
		return $this->province;
	}

	public function setProvince($province) {
		$this->province = $province;
		$this->apiParams["province"] = $province;
	}
	
	public function getCity() {
		return $this->city;
	}

	public function setCity($city) {
		$this->city = $city;
		$this->apiParams["city"] = $city;
	}
	
	public function getDistrict() {
		return $this->district;
	}

	public function setDistrict($district) {
		$this->district = $district;
		$this->apiParams["district"] = $district;
	}
	
	public function getTown() {
		return $this->town;
	}

	public function setTown($town) {
		$this->town = $town;
		$this->apiParams["town"] = $town;
	}
	
	public function getRegion() {
		return $this->region;
	}

	public function setRegion($region) {
		$this->region = $region;
		$this->apiParams["region"] = $region;
	}
	
	public function getFixedlineTelephone() {
		return $this->fixedlineTelephone;
	}

	public function setFixedlineTelephone($fixedlineTelephone) {
		$this->fixedlineTelephone = $fixedlineTelephone;
		$this->apiParams["fixedlineTelephone"] = $fixedlineTelephone;
	}
	
	public function getMobilePhone() {
		return $this->mobilePhone;
	}

	public function setMobilePhone($mobilePhone) {
		$this->mobilePhone = $mobilePhone;
		$this->apiParams["mobilePhone"] = $mobilePhone;
	}
	
	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
		$this->apiParams["email"] = $email;
	}
	
	public function getTransportationZone() {
		return $this->transportationZone;
	}

	public function setTransportationZone($transportationZone) {
		$this->transportationZone = $transportationZone;
		$this->apiParams["transportationZone"] = $transportationZone;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>