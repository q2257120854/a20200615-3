<?php
/**
 * 苏宁开放平台接口 - 订单发货任务创建
 *
 * @author suning
 * @date   2015-12-28
 */
class OrderDeliveryAddRequest  extends SuningRequest{
	
	/**
	 * 外部订单编号。
	 */
	private $outOrderId;
	
	/**
	 * 订单来源。201 天猫旗舰店，214京东， 203 苏宁， 204 亚马逊中国， 205当当 ，206 ebay,207 VIP，208 一号店，209 国美 210 拍拍，211 聚美，212 乐蜂 202 1688，301 其他
	 */
	private $orderSource;
	
	/**
	 * 投递时延要求。1-工作日 2-节假日 101,当日达102次晨达103次日达 111 活动标 104 预约达
	 */
	private $scheduleType;
	
	/**
	 * 配送类型。PTPS-常温配送 LLPS-冷链配送
	 */
	private $deliveryType;
	
	/**
	 * 送达日期。格式为yyyy-MM-dd HH:mm:ss
	 */
	private $scheduleDay;
	
	/**
	 * 送达开始时间。格式yyyy-MM-dd HH:mm:ss，送达开始时间小于送达结束时间 
	 */
	private $scheduleStart;
	
	/**
	 * 送达结束时间。格式yyyy-MM-dd HH:mm:ss，送达结束时间大于送达开始时间
	 */
	private $scheduleEnd;
	
	/**
	 * 收件方邮编。
	 */
	private $receiverZipCode;
	
	/**
	 * 收件方省份。（中文)
	 */
	private $receiverProvince;
	
	/**
	 * 收件方城市。(中文)
	 */
	private $receiverCity;
	
	/**
	 * 收件方区县。(中文)
	 */
	private $receiverArea;
	
	/**
	 * 收件方镇。(中文)，如果没有镇就给全区
	 */
	private $receiverTown;
	
	/**
	 * 收件方地址。
	 */
	private $receiverAddress;
	
	/**
	 * 收件人名称。
	 */
	private $receiverName;
	
	/**
	 * 收件人手机。手机和电话二者必输一个
	 */
	private $receiverMobile;
	
	/**
	 * 收件人电话。手机和电话二者必输一个
	 */
	private $receiverPhone;
	
	/**
	 * 整车车型4.2m    T180 ;6.5m    T220 ;7.6m    T260 ;9.6m    T280;12.5m   T310 ;17.5m   T320	整车车型不为空，订单标识必须包含Z，反之订单标识包含Z，整车车型不能为空
	 */
	private $carCode;
	
	/**
	 * 订单标识
	 */
	private $orderFlag;
	
	/**
	 * 客选单号
	 */
	private $custSelectNumber;
	
	/**
	 * 
	 */
	private $orderProductList;
	
	public function getOutOrderId() {
		return $this->outOrderId;
	}
	
	public function setOutOrderId($outOrderId) {
		$this->outOrderId = $outOrderId;
		$this->apiParams["outOrderId"] = $outOrderId;
	}
	
	public function getOrderSource() {
		return $this->orderSource;
	}
	
	public function setOrderSource($orderSource) {
		$this->orderSource = $orderSource;
		$this->apiParams["orderSource"] = $orderSource;
	}
	
	public function getScheduleType() {
		return $this->scheduleType;
	}
	
	public function setScheduleType($scheduleType) {
		$this->scheduleType = $scheduleType;
		$this->apiParams["scheduleType"] = $scheduleType;
	}
	
	public function getDeliveryType() {
		return $this->deliveryType;
	}
	
	public function setDeliveryType($deliveryType) {
		$this->deliveryType = $deliveryType;
		$this->apiParams["deliveryType"] = $deliveryType;
	}
	
	public function getScheduleDay() {
		return $this->scheduleDay;
	}
	
	public function setScheduleDay($scheduleDay) {
		$this->scheduleDay = $scheduleDay;
		$this->apiParams["scheduleDay"] = $scheduleDay;
	}
	
	public function getScheduleStart() {
		return $this->scheduleStart;
	}
	
	public function setScheduleStart($scheduleStart) {
		$this->scheduleStart = $scheduleStart;
		$this->apiParams["scheduleStart"] = $scheduleStart;
	}
	
	public function getScheduleEnd() {
		return $this->scheduleEnd;
	}
	
	public function setScheduleEnd($scheduleEnd) {
		$this->scheduleEnd = $scheduleEnd;
		$this->apiParams["scheduleEnd"] = $scheduleEnd;
	}
	
	public function getReceiverZipCode() {
		return $this->receiverZipCode;
	}
	
	public function setReceiverZipCode($receiverZipCode) {
		$this->receiverZipCode = $receiverZipCode;
		$this->apiParams["receiverZipCode"] = $receiverZipCode;
	}
	
	public function getReceiverProvince() {
		return $this->receiverProvince;
	}
	
	public function setReceiverProvince($receiverProvince) {
		$this->receiverProvince = $receiverProvince;
		$this->apiParams["receiverProvince"] = $receiverProvince;
	}
	
	public function getReceiverCity() {
		return $this->receiverCity;
	}
	
	public function setReceiverCity($receiverCity) {
		$this->receiverCity = $receiverCity;
		$this->apiParams["receiverCity"] = $receiverCity;
	}
	
	public function getReceiverArea() {
		return $this->receiverArea;
	}
	
	public function setReceiverArea($receiverArea) {
		$this->receiverArea = $receiverArea;
		$this->apiParams["receiverArea"] = $receiverArea;
	}
	
	public function getReceiverTown() {
		return $this->receiverTown;
	}
	
	public function setReceiverTown($receiverTown) {
		$this->receiverTown = $receiverTown;
		$this->apiParams["receiverTown"] = $receiverTown;
	}
	
	public function getReceiverAddress() {
		return $this->receiverAddress;
	}
	
	public function setReceiverAddress($receiverAddress) {
		$this->receiverAddress = $receiverAddress;
		$this->apiParams["receiverAddress"] = $receiverAddress;
	}
	
	public function getReceiverName() {
		return $this->receiverName;
	}
	
	public function setReceiverName($receiverName) {
		$this->receiverName = $receiverName;
		$this->apiParams["receiverName"] = $receiverName;
	}
	
	public function getReceiverMobile() {
		return $this->receiverMobile;
	}
	
	public function setReceiverMobile($receiverMobile) {
		$this->receiverMobile = $receiverMobile;
		$this->apiParams["receiverMobile"] = $receiverMobile;
	}
	
	public function getReceiverPhone() {
		return $this->receiverPhone;
	}
	
	public function setReceiverPhone($receiverPhone) {
		$this->receiverPhone = $receiverPhone;
		$this->apiParams["receiverPhone"] = $receiverPhone;
	}
	
	public function getCarCode() {
		return $this->carCode;
	}
	
	public function setCarCode($carCode) {
		$this->carCode = $carCode;
		$this->apiParams["carCode"] = $carCode;
	}
	
	public function getOrderFlag() {
		return $this->orderFlag;
	}
	
	public function setOrderFlag($orderFlag) {
		$this->orderFlag = $orderFlag;
		$this->apiParams["orderFlag"] = $orderFlag;
	}
	
	public function getCustSelectNumber() {
		return $this->custSelectNumber;
	}
	
	public function setCustSelectNumber($custSelectNumber) {
		$this->custSelectNumber = $custSelectNumber;
		$this->apiParams["custSelectNumber"] = $custSelectNumber;
	}
	
	public function getOrderProductList() {
		return $this->orderProductList;
	}
	
	public function setOrderProductList($orderProductList) {
		$this->orderProductList = $orderProductList;
		$arr = array();
		foreach ($orderProductList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderProductList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.orderdelivery.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->outOrderId, 'outOrderId');
		RequestCheckUtil::checkNotNull($this->orderSource, 'orderSource');
		RequestCheckUtil::checkNotNull($this->receiverProvince, 'receiverProvince');
		RequestCheckUtil::checkNotNull($this->receiverCity, 'receiverCity');
		RequestCheckUtil::checkNotNull($this->receiverArea, 'receiverArea');
		RequestCheckUtil::checkNotNull($this->receiverTown, 'receiverTown');
		RequestCheckUtil::checkNotNull($this->receiverAddress, 'receiverAddress');
		RequestCheckUtil::checkNotNull($this->receiverName, 'receiverName');
		RequestCheckUtil::checkNotNull($this->orderProductList, 'orderProductList');
	}
	
	public function getBizName(){
		return "addOrderDelivery";
	}
	
}

class OrderProductList {

	private $apiParams = array();
	
	private $warehouseCode;
	
	private $orderItemId;
	
	private $itemCode;
	
	private $outerItemId;
	
	private $itemName;
	
	private $inventoryType;
	
	private $itemQuantity;
	
	private $deliverNo;
	
	private $actualPrice;
	
	private $colourNumber;
	
	private $produceCode;
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}

	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}

	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getOuterItemId() {
		return $this->outerItemId;
	}

	public function setOuterItemId($outerItemId) {
		$this->outerItemId = $outerItemId;
		$this->apiParams["outerItemId"] = $outerItemId;
	}
	
	public function getItemName() {
		return $this->itemName;
	}

	public function setItemName($itemName) {
		$this->itemName = $itemName;
		$this->apiParams["itemName"] = $itemName;
	}
	
	public function getInventoryType() {
		return $this->inventoryType;
	}

	public function setInventoryType($inventoryType) {
		$this->inventoryType = $inventoryType;
		$this->apiParams["inventoryType"] = $inventoryType;
	}
	
	public function getItemQuantity() {
		return $this->itemQuantity;
	}

	public function setItemQuantity($itemQuantity) {
		$this->itemQuantity = $itemQuantity;
		$this->apiParams["itemQuantity"] = $itemQuantity;
	}
	
	public function getDeliverNo() {
		return $this->deliverNo;
	}

	public function setDeliverNo($deliverNo) {
		$this->deliverNo = $deliverNo;
		$this->apiParams["deliverNo"] = $deliverNo;
	}
	
	public function getActualPrice() {
		return $this->actualPrice;
	}

	public function setActualPrice($actualPrice) {
		$this->actualPrice = $actualPrice;
		$this->apiParams["actualPrice"] = $actualPrice;
	}
	
	public function getColourNumber() {
		return $this->colourNumber;
	}

	public function setColourNumber($colourNumber) {
		$this->colourNumber = $colourNumber;
		$this->apiParams["colourNumber"] = $colourNumber;
	}
	
	public function getProduceCode() {
		return $this->produceCode;
	}

	public function setProduceCode($produceCode) {
		$this->produceCode = $produceCode;
		$this->apiParams["produceCode"] = $produceCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>