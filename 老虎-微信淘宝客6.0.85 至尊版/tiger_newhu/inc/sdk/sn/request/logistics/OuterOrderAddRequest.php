<?php
/**
 * 苏宁开放平台接口 - 外部订单创建接口
 *
 * @author suning
 * @date   2015-8-5
 */
class OuterOrderAddRequest  extends SuningRequest{
	
	/**
	 * 外部系统。公约的外部系统编号用于唯一识别外部公司的接单系统 。字母或数字
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
		return 'suning.logistics.outerorder.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->oriSys, 'oriSys');
		RequestCheckUtil::checkNotNull($this->orderItems, 'orderItems');
	}
	
	public function getBizName(){
		return "addOuterOrder";
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
	
	private $orderId;
	
	private $businessType;
	
	private $shipCondition;
	
	private $expressValue;
	
	private $announcedValue;
	
	private $valueUnit;
	
	private $insuredValue;
	
	private $receiptBillFlag;
	
	private $cashonDeliveryType;
	
	private $cashonDeliveryValue;
	
	private $receiveCheckCode;
	
	private $deliPoint;
	
	private $homeLanFlag;
	
	private $taxOnbaggage;
	
	private $taxUnit;
	
	private $pickupDate;
	
	private $pickupTime;
	
	private $expectDate;
	
	private $expectTime;
	
	private $orderCustomer;
	
	private $priorityGrade;
	
	private $createNumLes;
	
	private $createTimeLes;
	
	private $createDateLes;
	
	private $crossItems;
	
	private $orderPartners;
	
	public function getOrderId() {
		return $this->orderId;
	}

	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getBusinessType() {
		return $this->businessType;
	}

	public function setBusinessType($businessType) {
		$this->businessType = $businessType;
		$this->apiParams["businessType"] = $businessType;
	}
	
	public function getShipCondition() {
		return $this->shipCondition;
	}

	public function setShipCondition($shipCondition) {
		$this->shipCondition = $shipCondition;
		$this->apiParams["shipCondition"] = $shipCondition;
	}
	
	public function getExpressValue() {
		return $this->expressValue;
	}

	public function setExpressValue($expressValue) {
		$this->expressValue = $expressValue;
		$this->apiParams["expressValue"] = $expressValue;
	}
	
	public function getAnnouncedValue() {
		return $this->announcedValue;
	}

	public function setAnnouncedValue($announcedValue) {
		$this->announcedValue = $announcedValue;
		$this->apiParams["announcedValue"] = $announcedValue;
	}
	
	public function getValueUnit() {
		return $this->valueUnit;
	}

	public function setValueUnit($valueUnit) {
		$this->valueUnit = $valueUnit;
		$this->apiParams["valueUnit"] = $valueUnit;
	}
	
	public function getInsuredValue() {
		return $this->insuredValue;
	}

	public function setInsuredValue($insuredValue) {
		$this->insuredValue = $insuredValue;
		$this->apiParams["insuredValue"] = $insuredValue;
	}
	
	public function getReceiptBillFlag() {
		return $this->receiptBillFlag;
	}

	public function setReceiptBillFlag($receiptBillFlag) {
		$this->receiptBillFlag = $receiptBillFlag;
		$this->apiParams["receiptBillFlag"] = $receiptBillFlag;
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
	
	public function getReceiveCheckCode() {
		return $this->receiveCheckCode;
	}

	public function setReceiveCheckCode($receiveCheckCode) {
		$this->receiveCheckCode = $receiveCheckCode;
		$this->apiParams["receiveCheckCode"] = $receiveCheckCode;
	}
	
	public function getDeliPoint() {
		return $this->deliPoint;
	}

	public function setDeliPoint($deliPoint) {
		$this->deliPoint = $deliPoint;
		$this->apiParams["deliPoint"] = $deliPoint;
	}
	
	public function getHomeLanFlag() {
		return $this->homeLanFlag;
	}

	public function setHomeLanFlag($homeLanFlag) {
		$this->homeLanFlag = $homeLanFlag;
		$this->apiParams["homeLanFlag"] = $homeLanFlag;
	}
	
	public function getTaxOnbaggage() {
		return $this->taxOnbaggage;
	}

	public function setTaxOnbaggage($taxOnbaggage) {
		$this->taxOnbaggage = $taxOnbaggage;
		$this->apiParams["taxOnbaggage"] = $taxOnbaggage;
	}
	
	public function getTaxUnit() {
		return $this->taxUnit;
	}

	public function setTaxUnit($taxUnit) {
		$this->taxUnit = $taxUnit;
		$this->apiParams["taxUnit"] = $taxUnit;
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
	
	public function getOrderCustomer() {
		return $this->orderCustomer;
	}

	public function setOrderCustomer($orderCustomer) {
		$this->orderCustomer = $orderCustomer;
		$this->apiParams["orderCustomer"] = $orderCustomer;
	}
	
	public function getPriorityGrade() {
		return $this->priorityGrade;
	}

	public function setPriorityGrade($priorityGrade) {
		$this->priorityGrade = $priorityGrade;
		$this->apiParams["priorityGrade"] = $priorityGrade;
	}
	
	public function getCreateNumLes() {
		return $this->createNumLes;
	}

	public function setCreateNumLes($createNumLes) {
		$this->createNumLes = $createNumLes;
		$this->apiParams["createNumLes"] = $createNumLes;
	}
	
	public function getCreateTimeLes() {
		return $this->createTimeLes;
	}

	public function setCreateTimeLes($createTimeLes) {
		$this->createTimeLes = $createTimeLes;
		$this->apiParams["createTimeLes"] = $createTimeLes;
	}
	
	public function getCreateDateLes() {
		return $this->createDateLes;
	}

	public function setCreateDateLes($createDateLes) {
		$this->createDateLes = $createDateLes;
		$this->apiParams["createDateLes"] = $createDateLes;
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
	
	private $expressCode;
	
	private $crossName;
	
	private $length;
	
	private $width;
	
	private $height;
	
	private $lengthUnit;
	
	private $volume;
	
	private $volumeUnit;
	
	private $crossWeight;
	
	private $weightUnit;
	
	private $remarks;
	
	private $relationTaskSys;
	
	private $relationTaskId;
	
	private $relationTaskItemId;
	
	public function getItemNumber() {
		return $this->itemNumber;
	}

	public function setItemNumber($itemNumber) {
		$this->itemNumber = $itemNumber;
		$this->apiParams["itemNumber"] = $itemNumber;
	}
	
	public function getExpressCode() {
		return $this->expressCode;
	}

	public function setExpressCode($expressCode) {
		$this->expressCode = $expressCode;
		$this->apiParams["expressCode"] = $expressCode;
	}
	
	public function getCrossName() {
		return $this->crossName;
	}

	public function setCrossName($crossName) {
		$this->crossName = $crossName;
		$this->apiParams["crossName"] = $crossName;
	}
	
	public function getLength() {
		return $this->length;
	}

	public function setLength($length) {
		$this->length = $length;
		$this->apiParams["length"] = $length;
	}
	
	public function getWidth() {
		return $this->width;
	}

	public function setWidth($width) {
		$this->width = $width;
		$this->apiParams["width"] = $width;
	}
	
	public function getHeight() {
		return $this->height;
	}

	public function setHeight($height) {
		$this->height = $height;
		$this->apiParams["height"] = $height;
	}
	
	public function getLengthUnit() {
		return $this->lengthUnit;
	}

	public function setLengthUnit($lengthUnit) {
		$this->lengthUnit = $lengthUnit;
		$this->apiParams["lengthUnit"] = $lengthUnit;
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
	
	public function getRelationTaskSys() {
		return $this->relationTaskSys;
	}

	public function setRelationTaskSys($relationTaskSys) {
		$this->relationTaskSys = $relationTaskSys;
		$this->apiParams["relationTaskSys"] = $relationTaskSys;
	}
	
	public function getRelationTaskId() {
		return $this->relationTaskId;
	}

	public function setRelationTaskId($relationTaskId) {
		$this->relationTaskId = $relationTaskId;
		$this->apiParams["relationTaskId"] = $relationTaskId;
	}
	
	public function getRelationTaskItemId() {
		return $this->relationTaskItemId;
	}

	public function setRelationTaskItemId($relationTaskItemId) {
		$this->relationTaskItemId = $relationTaskItemId;
		$this->apiParams["relationTaskItemId"] = $relationTaskItemId;
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