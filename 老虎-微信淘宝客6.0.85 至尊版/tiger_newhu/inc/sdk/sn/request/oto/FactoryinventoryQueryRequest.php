<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-1-5
 */
class FactoryinventoryQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $warehouseCode;
	
	/**
	 * 
	 */
	private $commodityCodes;
	
	/**
	 * 
	 */
	private $supplierCommoditys;
	
	
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}
	
	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getCommodityCodes() {
		return $this->commodityCodes;
	}
	
	public function setCommodityCodes($commodityCodes) {
		$this->commodityCodes = $commodityCodes;
		$this->apiParams["commodityCodes"] = $commodityCodes;
	}
	
	public function getSupplierCommoditys() {
		return $this->supplierCommoditys;
	}
	
	public function setSupplierCommoditys($supplierCommoditys) {
		$this->supplierCommoditys = $supplierCommoditys;
		$this->apiParams["supplierCommoditys"] = $supplierCommoditys;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.oto.factoryinventory.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->warehouseCode, 'warehouseCode');
	}
	
	public function getBizName(){
		return "queryFactoryinventory";
	}
	
}

?>