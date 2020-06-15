<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-1-5
 */
class FactoryinventoryModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $commodityList;
	
	/**
	 * 
	 */
	private $invType;
	
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
	
	public function getInvType() {
		return $this->invType;
	}
	
	public function setInvType($invType) {
		$this->invType = $invType;
		$this->apiParams["invType"] = $invType;
	}
	
	public function getApiMethodName(){
		return 'suning.oto.factoryinventory.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->invType, 'invType');
	}
	
	public function getBizName(){
		return "modifyFactoryinventory";
	}
	
}

class CommodityList {

	private $apiParams = array();
	
	private $commodityCode;
	
	private $warehouseCode;
	
	private $inventory;
	
	private $supplierCommodity;
	
	public function getCommodityCode() {
		return $this->commodityCode;
	}

	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
	}
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}

	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getInventory() {
		return $this->inventory;
	}

	public function setInventory($inventory) {
		$this->inventory = $inventory;
		$this->apiParams["inventory"] = $inventory;
	}
	
	public function getSupplierCommodity() {
		return $this->supplierCommodity;
	}

	public function setSupplierCommodity($supplierCommodity) {
		$this->supplierCommodity = $supplierCommodity;
		$this->apiParams["supplierCommodity"] = $supplierCommodity;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>