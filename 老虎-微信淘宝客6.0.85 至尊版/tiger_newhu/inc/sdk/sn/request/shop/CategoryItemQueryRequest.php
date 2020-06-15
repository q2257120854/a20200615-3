<?php
/**
 * 苏宁开放平台接口 - 店铺分类商品查询
 *
 * @author suning
 * @date   2014-8-22
 */
class CategoryItemQueryRequest  extends SelectSuningRequest{
	
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
	
	public function getPageNo() {
		return $this->pageNo;
	}
	
	public function setPageNo($pageNo) {
		$this->pageNo = $pageNo;
		$this->apiParams["pageNo"] = $pageNo;
	}
	
	public function getPageSize() {
		return $this->pageSize;
	}
	
	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->apiParams["pageSize"] = $pageSize;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.shopcategoryitem.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
	}
	
	public function getBizName(){
		return "queryCategoryItem";
	}
	
}

?>