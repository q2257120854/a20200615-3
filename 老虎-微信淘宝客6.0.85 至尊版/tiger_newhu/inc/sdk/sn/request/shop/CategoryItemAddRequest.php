<?php
/**
 * 苏宁开放平台接口 - 店铺分类商品添加
 *
 * @author suning
 * @date   2014-8-22
 */
class CategoryItemAddRequest  extends SuningRequest{
	
	/**
	 * 店铺分类ID
	 */
	private $categoryCode;
	
	/**
	 * 商品
	 */
	private $products;
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getProducts() {
		return $this->products;
	}
	
	public function setProducts($products) {
		$this->products = $products;
		$this->apiParams["products"] = $products->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.custom.shopcategoryitem.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
		RequestCheckUtil::checkNotNull($this->products, 'products');
	}
	
	public function getBizName(){
		return "addCategoryItem";
	}
	
}

class Products {

	private $apiParams = array();
	
	private $productCode;
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>