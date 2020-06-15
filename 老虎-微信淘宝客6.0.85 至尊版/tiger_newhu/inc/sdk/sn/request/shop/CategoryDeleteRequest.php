<?php
/**
 * 苏宁开放平台接口 - 店铺分类信息删除
 *
 * @author suning
 * @date   2014-8-22
 */
class CategoryDeleteRequest  extends SuningRequest{
	
	/**
	 * 店铺分类ID
	 */
	private $categoryCode;
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.shopcategory.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
	}
	
	public function getBizName(){
		return "deleteCategory";
	}
	
}

?>