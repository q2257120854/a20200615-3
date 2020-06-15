<?php
/**
 * 苏宁开放平台接口 - 创建店铺分类
 *
 * @author suning
 * @date   2014-8-26
 */
class ShopcategoryAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $shopCategory;
	
	public function getShopCategory() {
		return $this->shopCategory;
	}
	
	public function setShopCategory($shopCategory) {
		$this->shopCategory = $shopCategory;
		$arr = array();
		foreach ($shopCategory as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["shopCategory"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.shopcategory.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->shopCategory, 'shopCategory');
	}
	
	public function getBizName(){
		return "addCategory";
	}
	
}

class ShopCategory {

	private $apiParams = array();
	
	private $categoryName;
	
	private $parentCategoryCode;
	
	private $categorySort;
	
	private $categorySet;
	
	private $categoryImg;
	
	public function getCategoryName() {
		return $this->categoryName;
	}

	public function setCategoryName($categoryName) {
		$this->categoryName = $categoryName;
		$this->apiParams["categoryName"] = $categoryName;
	}
	
	public function getParentCategoryCode() {
		return $this->parentCategoryCode;
	}

	public function setParentCategoryCode($parentCategoryCode) {
		$this->parentCategoryCode = $parentCategoryCode;
		$this->apiParams["parentCategoryCode"] = $parentCategoryCode;
	}
	
	public function getCategorySort() {
		return $this->categorySort;
	}

	public function setCategorySort($categorySort) {
		$this->categorySort = $categorySort;
		$this->apiParams["categorySort"] = $categorySort;
	}
	
	public function getCategorySet() {
		return $this->categorySet;
	}

	public function setCategorySet($categorySet) {
		$this->categorySet = $categorySet;
		$this->apiParams["categorySet"] = $categorySet;
	}
	
	public function getCategoryImg() {
		return $this->categoryImg;
	}

	public function setCategoryImg($categoryImg) {
		$this->categoryImg = $categoryImg;
		$this->apiParams["categoryImg"] = $categoryImg;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>