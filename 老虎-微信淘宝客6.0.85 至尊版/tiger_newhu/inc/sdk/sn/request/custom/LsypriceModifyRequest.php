<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-1-5
 */
class LsypriceModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $sellingPrice;
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getSellingPrice() {
		return $this->sellingPrice;
	}
	
	public function setSellingPrice($sellingPrice) {
		$this->sellingPrice = $sellingPrice;
		$this->apiParams["sellingPrice"] = $sellingPrice;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.lsyprice.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->sellingPrice, 'sellingPrice');
	}
	
	public function getBizName(){
		return "modifyLsyprice";
	}
	
}

?>