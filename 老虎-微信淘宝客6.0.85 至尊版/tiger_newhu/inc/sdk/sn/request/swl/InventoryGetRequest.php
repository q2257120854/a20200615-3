<?php
/**
 * 苏宁开放平台接口 - 库存查询
 *
 * @author suning
 * @date   2015-6-24
 */
class InventoryGetRequest  extends SuningRequest{
	
	/**
	 * 苏宁仓库ID
	 */
	private $warehouseCode;
	
	/**
	 * 苏宁商品编码。苏宁商品编码与商家商品编码必填其一，两者都填，以苏宁商品编码为准
	 */
	private $commodityCode;
	
	/**
	 * 商家商品编码。苏宁商品编码与商家商品编码必填其一，两者都填，以苏宁商品编码为准
	 */
	private $supplierCommCode;
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}
	
	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
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
	
	public function getApiMethodName(){
		return 'suning.swl.inventory.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->warehouseCode, 'warehouseCode');
	}
	
	public function getBizName(){
		return "getInventory";
	}
	
}

?>