<?php
/**
 * 苏宁开放平台接口 - 商品入库预约申请
 *
 * @author suning
 * @date   2015-6-24
 */
class ProductStorageAddRequest  extends SuningRequest{
	
	/**
	 * 仓库ID。已租用的苏宁仓库ID
	 */
	private $warehouseCode;
	
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
	
	/**
	 * 
	 */
	private $commoditys;
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}
	
	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
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
	
	public function getCommoditys() {
		return $this->commoditys;
	}
	
	public function setCommoditys($commoditys) {
		$this->commoditys = $commoditys;
		$arr = array();
		foreach ($commoditys as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["commoditys"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.swl.productstorage.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->warehouseCode, 'warehouseCode');
		RequestCheckUtil::checkNotNull($this->storageDate, 'storageDate');
		RequestCheckUtil::checkNotNull($this->storageTime, 'storageTime');
		RequestCheckUtil::checkNotNull($this->carrier, 'carrier');
		RequestCheckUtil::checkNotNull($this->contactsNumber, 'contactsNumber');
		RequestCheckUtil::checkNotNull($this->commoditys, 'commoditys');
	}
	
	public function getBizName(){
		return "addProductStorage";
	}
	
}

class Commoditys {

	private $apiParams = array();
	
	private $commodityCode;
	
	private $supplierCommCode;
	
	private $count;
	
	public function getCommodityCode() {
		return $this->commodityCode;
	}

	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
	}
	
	public function getSupplierCommCode() {
		return $this->supplierCommCode;
	}

	public function setSupplierCommCode($supplierCommCode) {
		$this->supplierCommCode = $supplierCommCode;
		$this->apiParams["supplierCommCode"] = $supplierCommCode;
	}
	
	public function getCount() {
		return $this->count;
	}

	public function setCount($count) {
		$this->count = $count;
		$this->apiParams["count"] = $count;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>