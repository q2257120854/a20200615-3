<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-29
 */
class CommoditybatchesAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $commodityBatches;
	
	public function getCommodityBatches() {
		return $this->commodityBatches;
	}
	
	public function setCommodityBatches($commodityBatches) {
		$this->commodityBatches = $commodityBatches;
		$arr = array();
		foreach ($commodityBatches as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["commodityBatches"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.commoditybatches.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addCommoditybatches";
	}
	
}

class CommodityBatches {

	private $apiParams = array();
	
	private $batchesCode;
	
	private $commodityCode;
	
	private $commodityName;
	
	private $deleteType;
	
	private $expiryDate;
	
	private $manufacturer;
	
	private $operationTime;
	
	private $specifications;
	
	private $storeCode;
	
	private $supCommodityCode;
	
	private $supplierCode;
	
	public function getBatchesCode() {
		return $this->batchesCode;
	}

	public function setBatchesCode($batchesCode) {
		$this->batchesCode = $batchesCode;
		$this->apiParams["batchesCode"] = $batchesCode;
	}
	
	public function getCommodityCode() {
		return $this->commodityCode;
	}

	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
	}
	
	public function getCommodityName() {
		return $this->commodityName;
	}

	public function setCommodityName($commodityName) {
		$this->commodityName = $commodityName;
		$this->apiParams["commodityName"] = $commodityName;
	}
	
	public function getDeleteType() {
		return $this->deleteType;
	}

	public function setDeleteType($deleteType) {
		$this->deleteType = $deleteType;
		$this->apiParams["deleteType"] = $deleteType;
	}
	
	public function getExpiryDate() {
		return $this->expiryDate;
	}

	public function setExpiryDate($expiryDate) {
		$this->expiryDate = $expiryDate;
		$this->apiParams["expiryDate"] = $expiryDate;
	}
	
	public function getManufacturer() {
		return $this->manufacturer;
	}

	public function setManufacturer($manufacturer) {
		$this->manufacturer = $manufacturer;
		$this->apiParams["manufacturer"] = $manufacturer;
	}
	
	public function getOperationTime() {
		return $this->operationTime;
	}

	public function setOperationTime($operationTime) {
		$this->operationTime = $operationTime;
		$this->apiParams["operationTime"] = $operationTime;
	}
	
	public function getSpecifications() {
		return $this->specifications;
	}

	public function setSpecifications($specifications) {
		$this->specifications = $specifications;
		$this->apiParams["specifications"] = $specifications;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}

	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getSupCommodityCode() {
		return $this->supCommodityCode;
	}

	public function setSupCommodityCode($supCommodityCode) {
		$this->supCommodityCode = $supCommodityCode;
		$this->apiParams["supCommodityCode"] = $supCommodityCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>