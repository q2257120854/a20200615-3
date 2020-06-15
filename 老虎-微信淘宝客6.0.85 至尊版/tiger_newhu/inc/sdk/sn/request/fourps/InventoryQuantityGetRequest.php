<?php
/**
 * 苏宁开放平台接口 - 商品库存总量查询接口
 *
 * @author suning
 * @date   2016-5-27
 */
class InventoryQuantityGetRequest  extends SuningRequest{
	
	/**
	 * 商品编码。商品编码
	 */
	private $commodityCode;
	
	/**
	 * 色号。色号
	 */
	private $colourNumber;
	
	/**
	 * 批次号。批次号
	 */
	private $batchNumber;
	
	public function getCommodityCode() {
		return $this->commodityCode;
	}
	
	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
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
	
	public function getApiMethodName(){
		return 'suning.fourps.inventoryquantity.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->commodityCode, 'commodityCode');
	}
	
	public function getBizName(){
		return "getInventoryQuantity";
	}
	
}

?>