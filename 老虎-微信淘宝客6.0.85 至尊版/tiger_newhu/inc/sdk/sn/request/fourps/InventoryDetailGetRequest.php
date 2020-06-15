<?php
/**
 * 苏宁开放平台接口 - 商品库存明细查询接口
 *
 * @author suning
 * @date   2016-5-27
 */
class InventoryDetailGetRequest  extends SuningRequest{
	
	/**
	 * 商品编码。商品编码
	 */
	private $commodityCode;
	
	/**
	 * 商品名称。商品名称
	 */
	private $commodityName;
	
	/**
	 * 色号。色号
	 */
	private $colourNumber;
	
	/**
	 * 批次号。批次号
	 */
	private $batchNumber;
	
	/**
	 * 物流服务商。物流服务商
	 */
	private $serviceProvider;
	
	/**
	 * 仓库。仓库
	 */
	private $warehouseCode;
	
	/**
	 * 平台编码。201 淘宝，214京东， 203 苏宁， 204 亚马逊中国， 205当当 ，206 ebay,207 VIP，208 一号店，209 国美 210 拍拍，211 聚美，212 乐蜂 202 1688，301 其他
	 */
	private $platformCode;
	
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
	
	public function getColourNumber() {
		return $this->colourNumber;
	}
	
	public function setColourNumber($colourNumber) {
		$this->colourNumber = $colourNumber;
		$this->apiParams["colourNumber"] = $colourNumber;
	}
	
	public function getBatchNumber() {
		return $this->batchNumber;
	}
	
	public function setBatchNumber($batchNumber) {
		$this->batchNumber = $batchNumber;
		$this->apiParams["batchNumber"] = $batchNumber;
	}
	
	public function getServiceProvider() {
		return $this->serviceProvider;
	}
	
	public function setServiceProvider($serviceProvider) {
		$this->serviceProvider = $serviceProvider;
		$this->apiParams["serviceProvider"] = $serviceProvider;
	}
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}
	
	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getPlatformCode() {
		return $this->platformCode;
	}
	
	public function setPlatformCode($platformCode) {
		$this->platformCode = $platformCode;
		$this->apiParams["platformCode"] = $platformCode;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.inventorydetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->commodityCode, 'commodityCode');
	}
	
	public function getBizName(){
		return "getInventoryDetail";
	}
	
}

?>