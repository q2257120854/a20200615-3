<?php
/**
 * 苏宁开放平台接口 - 商品退库预约申请
 *
 * @author suning
 * @date   2015-6-24
 */
class ProductBackStorageAddRequest  extends SuningRequest{
	
	/**
	 * 仓库ID。已租用的苏宁仓库ID
	 */
	private $warehouseCode;
	
	/**
	 * 退库类型。0代表良品；1代表不良品
	 */
	private $refundType;
	
	/**
	 * 预约退库日期
	 */
	private $appointDate;
	
	/**
	 * 预约退库时间
	 */
	private $appointTime;
	
	/**
	 * 承运人
	 */
	private $contacts;
	
	/**
	 * 联系电话
	 */
	private $supplierPhone;
	
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
		return 'suning.swl.productbackstorage.add';
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
		return "addProductBackStorage";
	}
	
}

class CommodityList {

	private $apiParams = array();
	
	private $commodityCode;
	
	private $supCommCode;
	
	private $refundCount;
	
	public function getCommodityCode() {
		return $this->commodityCode;
	}

	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
	}
	
	public function getSupCommCode() {
		return $this->supCommCode;
	}

	public function setSupCommCode($supCommCode) {
		$this->supCommCode = $supCommCode;
		$this->apiParams["supCommCode"] = $supCommCode;
	}
	
	public function getRefundCount() {
		return $this->refundCount;
	}

	public function setRefundCount($refundCount) {
		$this->refundCount = $refundCount;
		$this->apiParams["refundCount"] = $refundCount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>