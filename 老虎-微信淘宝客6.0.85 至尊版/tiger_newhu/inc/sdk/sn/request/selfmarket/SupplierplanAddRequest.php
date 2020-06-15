<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-8-14
 */
class SupplierplanAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $dataList;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getDataList() {
		return $this->dataList;
	}
	
	public function setDataList($dataList) {
		$this->dataList = $dataList;
		$arr = array();
		foreach ($dataList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["dataList"] = $arr;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.supplierplan.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "addSupplierplan";
	}
	
}

class DataList {

	private $apiParams = array();
	
	private $planCreateDate;
	
	private $plantCode;
	
	private $plantName;
	
	private $productCode;
	
	private $productName;
	
	private $purchaseQty;
	
	private $snProductCode;
	
	private $weekEndDate;
	
	private $weekPlanDate;
	
	private $weekPlanNo;
	
	private $weekStartDate;
	
	public function getPlanCreateDate() {
		return $this->planCreateDate;
	}

	public function setPlanCreateDate($planCreateDate) {
		$this->planCreateDate = $planCreateDate;
		$this->apiParams["planCreateDate"] = $planCreateDate;
	}
	
	public function getPlantCode() {
		return $this->plantCode;
	}

	public function setPlantCode($plantCode) {
		$this->plantCode = $plantCode;
		$this->apiParams["plantCode"] = $plantCode;
	}
	
	public function getPlantName() {
		return $this->plantName;
	}

	public function setPlantName($plantName) {
		$this->plantName = $plantName;
		$this->apiParams["plantName"] = $plantName;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getProductName() {
		return $this->productName;
	}

	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getPurchaseQty() {
		return $this->purchaseQty;
	}

	public function setPurchaseQty($purchaseQty) {
		$this->purchaseQty = $purchaseQty;
		$this->apiParams["purchaseQty"] = $purchaseQty;
	}
	
	public function getSnProductCode() {
		return $this->snProductCode;
	}

	public function setSnProductCode($snProductCode) {
		$this->snProductCode = $snProductCode;
		$this->apiParams["snProductCode"] = $snProductCode;
	}
	
	public function getWeekEndDate() {
		return $this->weekEndDate;
	}

	public function setWeekEndDate($weekEndDate) {
		$this->weekEndDate = $weekEndDate;
		$this->apiParams["weekEndDate"] = $weekEndDate;
	}
	
	public function getWeekPlanDate() {
		return $this->weekPlanDate;
	}

	public function setWeekPlanDate($weekPlanDate) {
		$this->weekPlanDate = $weekPlanDate;
		$this->apiParams["weekPlanDate"] = $weekPlanDate;
	}
	
	public function getWeekPlanNo() {
		return $this->weekPlanNo;
	}

	public function setWeekPlanNo($weekPlanNo) {
		$this->weekPlanNo = $weekPlanNo;
		$this->apiParams["weekPlanNo"] = $weekPlanNo;
	}
	
	public function getWeekStartDate() {
		return $this->weekStartDate;
	}

	public function setWeekStartDate($weekStartDate) {
		$this->weekStartDate = $weekStartDate;
		$this->apiParams["weekStartDate"] = $weekStartDate;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>