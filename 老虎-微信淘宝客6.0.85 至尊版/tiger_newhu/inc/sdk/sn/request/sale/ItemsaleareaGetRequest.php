<?php
/**
 * 苏宁开放平台接口 - 单品销售范围查询
 *
 * @author suning
 * @date   2014-7-18
 */
class ItemsaleareaGetRequest  extends SuningRequest{
	
	/**
	 * 苏宁商品编码
	 */
	private $productCode;
	
	/**
	 * 商家商品编码
	 */
	private $itemCode;
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.itemsalearea.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
		RequestCheckUtil::checkNotNull($this->itemCode, 'itemCode');
	}
	
	public function getBizName(){
		return "itemSalearea";
	}
	
}

?>