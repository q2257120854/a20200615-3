<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SalesstatusUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $dataList;
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
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
	
	public function getApiMethodName(){
		return 'suning.store.salesstatus.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "updateSalesstatus";
	}
	
}

class DataList {

	private $apiParams = array();
	
	private $productCode;
	
	private $operationType;
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getOperationType() {
		return $this->operationType;
	}

	public function setOperationType($operationType) {
		$this->operationType = $operationType;
		$this->apiParams["operationType"] = $operationType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>