<?php
/**
 * 苏宁开放平台接口 - 商品退库预约申请
 *
 * @author suning
 * @date   2016-5-27
 */
class CelStorageSubAddRequest  extends SuningRequest{
	
	/**
	 * 仓库ID。已租用的苏宁仓库ID
	 */
	private $warehouseCode;
	
	/**
	 * 退库类型。0代表良品；1代表不良品
	 */
	private $refundType;
	
	/**
	 * 采购订单。
	 */
	private $purchaseOrderId;
	
	/**
	 * 客户选品单号。
	 */
	private $customerId;
	
	/**
	 * 预约退库库日期。
	 */
	private $appointDate;
	
	/**
	 * 预约退库库时间。
	 */
	private $appointTime;
	
	/**
	 * 承运人。承运人
	 */
	private $contacts;
	
	/**
	 * 联系电话。
	 */
	private $supplierPhone;
	
	/**
	 * 备注。
	 */
	private $note;
	
	/**
	 * 
	 */
	private $commodityList;
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}
	
	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getRefundType() {
		return $this->refundType;
	}
	
	public function setRefundType($refundType) {
		$this->refundType = $refundType;
		$this->apiParams["refundType"] = $refundType;
	}
	
	public function getPurchaseOrderId() {
		return $this->purchaseOrderId;
	}
	
	public function setPurchaseOrderId($purchaseOrderId) {
		$this->purchaseOrderId = $purchaseOrderId;
		$this->apiParams["purchaseOrderId"] = $purchaseOrderId;
	}
	
	public function getCustomerId() {
		return $this->customerId;
	}
	
	public function setCustomerId($customerId) {
		$this->customerId = $customerId;
		$this->apiParams["customerId"] = $customerId;
	}
	
	public function getAppointDate() {
		return $this->appointDate;
	}
	
	public function setAppointDate($appointDate) {
		$this->appointDate = $appointDate;
		$this->apiParams["appointDate"] = $appointDate;
	}
	
	public function getAppointTime() {
		return $this->appointTime;
	}
	
	public function setAppointTime($appointTime) {
		$this->appointTime = $appointTime;
		$this->apiParams["appointTime"] = $appointTime;
	}
	
	public function getContacts() {
		return $this->contacts;
	}
	
	public function setContacts($contacts) {
		$this->contacts = $contacts;
		$this->apiParams["contacts"] = $contacts;
	}
	
	public function getSupplierPhone() {
		return $this->supplierPhone;
	}
	
	public function setSupplierPhone($supplierPhone) {
		$this->supplierPhone = $supplierPhone;
		$this->apiParams["supplierPhone"] = $supplierPhone;
	}
	
	public function getNote() {
		return $this->note;
	}
	
	public function setNote($note) {
		$this->note = $note;
		$this->apiParams["note"] = $note;
	}
	
	public function getCommodityList() {
		return $this->commodityList;
	}
	
	public function setCommodityList($commodityList) {
		$this->commodityList = $commodityList;
		$arr = array();
		foreach ($commodityList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["commodityList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.celstoragesub.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->warehouseCode, 'warehouseCode');
		RequestCheckUtil::checkNotNull($this->refundType, 'refundType');
		RequestCheckUtil::checkNotNull($this->appointDate, 'appointDate');
		RequestCheckUtil::checkNotNull($this->appointTime, 'appointTime');
		RequestCheckUtil::checkNotNull($this->contacts, 'contacts');
		RequestCheckUtil::checkNotNull($this->supplierPhone, 'supplierPhone');
		RequestCheckUtil::checkNotNull($this->commodityList, 'commodityList');
	}
	
	public function getBizName(){
		return "addCelStorageSub";
	}
	
}

class CommodityList {

	private $apiParams = array();
	
	private $commodityCode;
	
	private $colorId;
	
	private $batchId;
	
	private $commodityCount;
	
	private $platformCode;
	
	private $supplierCommodityCode;
	
	public function getCommodityCode() {
		return $this->commodityCode;
	}

	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
	}
	
	public function getColorId() {
		return $this->colorId;
	}

	public function setColorId($colorId) {
		$this->colorId = $colorId;
		$this->apiParams["colorId"] = $colorId;
	}
	
	public function getBatchId() {
		return $this->batchId;
	}

	public function setBatchId($batchId) {
		$this->batchId = $batchId;
		$this->apiParams["batchId"] = $batchId;
	}
	
	public function getCommodityCount() {
		return $this->commodityCount;
	}

	public function setCommodityCount($commodityCount) {
		$this->commodityCount = $commodityCount;
		$this->apiParams["commodityCount"] = $commodityCount;
	}
	
	public function getPlatformCode() {
		return $this->platformCode;
	}

	public function setPlatformCode($platformCode) {
		$this->platformCode = $platformCode;
		$this->apiParams["platformCode"] = $platformCode;
	}
	
	public function getSupplierCommodityCode() {
		return $this->supplierCommodityCode;
	}

	public function setSupplierCommodityCode($supplierCommodityCode) {
		$this->supplierCommodityCode = $supplierCommodityCode;
		$this->apiParams["supplierCommodityCode"] = $supplierCommodityCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>