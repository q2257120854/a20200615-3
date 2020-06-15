<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-23
 */
class InventoryAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $inventory;
	
	public function getInventory() {
		return $this->inventory;
	}
	
	public function setInventory($inventory) {
		$this->inventory = $inventory;
		$arr = array();
		foreach ($inventory as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["inventory"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.inventory.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addInventory";
	}
	
}

class Inventory {

	private $apiParams = array();
	
	private $commodityCode;
	
	private $commodityName;
	
	private $createTime;
	
	private $factoryName;
	
	private $inventoryDate;
	
	private $invertoryCount;
	
	private $offlineInventory;
	
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
	
	public function getCreateTime() {
		return $this->createTime;
	}

	public function setCreateTime($createTime) {
		$this->createTime = $createTime;
		$this->apiParams["createTime"] = $createTime;
	}
	
	public function getFactoryName() {
		return $this->factoryName;
	}

	public function setFactoryName($factoryName) {
		$this->factoryName = $factoryName;
		$this->apiParams["factoryName"] = $factoryName;
	}
	
	public function getInventoryDate() {
		return $this->inventoryDate;
	}

	public function setInventoryDate($inventoryDate) {
		$this->inventoryDate = $inventoryDate;
		$this->apiParams["inventoryDate"] = $inventoryDate;
	}
	
	public function getInvertoryCount() {
		return $this->invertoryCount;
	}

	public function setInvertoryCount($invertoryCount) {
		$this->invertoryCount = $invertoryCount;
		$this->apiParams["invertoryCount"] = $invertoryCount;
	}
	
	public function getOfflineInventory() {
		return $this->offlineInventory;
	}

	public function setOfflineInventory($offlineInventory) {
		$this->offlineInventory = $offlineInventory;
		$this->apiParams["offlineInventory"] = $offlineInventory;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>