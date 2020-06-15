<?php
/**
 * 苏宁开放平台接口 - 商品入库预约修改
 *
 * @author suning
 * @date   2015-6-24
 */
class ProductStorageModifyRequest  extends SuningRequest{
	
	/**
	 * 预约单号
	 */
	private $orderId;
	
	/**
	 * 预约入库日期
	 */
	private $storageDate;
	
	/**
	 * 预约入库时间
	 */
	private $storageTime;
	
	/**
	 * 承运人
	 */
	private $carrier;
	
	/**
	 * 联系电话
	 */
	private $contactsNumber;
	
	/**
	 * 运单号
	 */
	private $waybill;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getStorageDate() {
		return $this->storageDate;
	}
	
	public function setStorageDate($storageDate) {
		$this->storageDate = $storageDate;
		$this->apiParams["storageDate"] = $storageDate;
	}
	
	public function getStorageTime() {
		return $this->storageTime;
	}
	
	public function setStorageTime($storageTime) {
		$this->storageTime = $storageTime;
		$this->apiParams["storageTime"] = $storageTime;
	}
	
	public function getCarrier() {
		return $this->carrier;
	}
	
	public function setCarrier($carrier) {
		$this->carrier = $carrier;
		$this->apiParams["carrier"] = $carrier;
	}
	
	public function getContactsNumber() {
		return $this->contactsNumber;
	}
	
	public function setContactsNumber($contactsNumber) {
		$this->contactsNumber = $contactsNumber;
		$this->apiParams["contactsNumber"] = $contactsNumber;
	}
	
	public function getWaybill() {
		return $this->waybill;
	}
	
	public function setWaybill($waybill) {
		$this->waybill = $waybill;
		$this->apiParams["waybill"] = $waybill;
	}
	
	public function getApiMethodName(){
		return 'suning.swl.productstorage.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->storageDate, 'storageDate');
		RequestCheckUtil::checkNotNull($this->storageTime, 'storageTime');
		RequestCheckUtil::checkNotNull($this->carrier, 'carrier');
		RequestCheckUtil::checkNotNull($this->contactsNumber, 'contactsNumber');
	}
	
	public function getBizName(){
		return "modifyProductStorage";
	}
	
}

?>