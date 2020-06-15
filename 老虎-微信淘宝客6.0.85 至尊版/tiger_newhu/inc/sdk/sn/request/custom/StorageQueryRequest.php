<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-7-5
 */
class StorageQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $storage;
	
	public function getStorage() {
		return $this->storage;
	}
	
	public function setStorage($storage) {
		$this->storage = $storage;
		$arr = array();
		foreach ($storage as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["storage"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.storage.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryStorage";
	}
	
}

class Storage {

	private $apiParams = array();
	
	private $billNo;
	
	private $billType;
	
	private $saleOrg;
	
	private $saleTaxNo;
	
	public function getBillNo() {
		return $this->billNo;
	}

	public function setBillNo($billNo) {
		$this->billNo = $billNo;
		$this->apiParams["billNo"] = $billNo;
	}
	
	public function getBillType() {
		return $this->billType;
	}

	public function setBillType($billType) {
		$this->billType = $billType;
		$this->apiParams["billType"] = $billType;
	}
	
	public function getSaleOrg() {
		return $this->saleOrg;
	}

	public function setSaleOrg($saleOrg) {
		$this->saleOrg = $saleOrg;
		$this->apiParams["saleOrg"] = $saleOrg;
	}
	
	public function getSaleTaxNo() {
		return $this->saleTaxNo;
	}

	public function setSaleTaxNo($saleTaxNo) {
		$this->saleTaxNo = $saleTaxNo;
		$this->apiParams["saleTaxNo"] = $saleTaxNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>