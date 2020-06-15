<?php
/**
 * 苏宁开放平台接口 - 商品信息单笔查询接口
 *
 * @author suning
 * @date   2016-8-15
 */
class ItemInfoGetRequest  extends SuningRequest{
	
	/**
	 * 商家商品编码。商家商品编码、商品名称，二者必填其一
	 */
	private $supplierCmCode;
	
	/**
	 * 商品名称。商家商品编码、商品名称，二者必填其一(商品名称不支持模糊查询)
	 */
	private $productName;
	
	public function getSupplierCmCode() {
		return $this->supplierCmCode;
	}
	
	public function setSupplierCmCode($supplierCmCode) {
		$this->supplierCmCode = $supplierCmCode;
		$this->apiParams["supplierCmCode"] = $supplierCmCode;
	}
	
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.iteminfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getItemInfo";
	}
	
}

?>