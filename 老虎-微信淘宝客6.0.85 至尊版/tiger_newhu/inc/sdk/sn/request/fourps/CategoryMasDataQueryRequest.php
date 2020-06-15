<?php
/**
 * 苏宁开放平台接口 - 类目主数据查询接口
 *
 * @author suning
 * @date   2016-2-23
 */
class CategoryMasDataQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 目录名称。苏宁采购目录名称。可输入中文，根据输入的信息进行关键字模糊查询。。
	 */
	private $categoryName;
	
	
	
	public function getCategoryName() {
		return $this->categoryName;
	}
	
	public function setCategoryName($categoryName) {
		$this->categoryName = $categoryName;
		$this->apiParams["categoryName"] = $categoryName;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.fourps.categorymasdata.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryName, 'categoryName');
	}
	
	public function getBizName(){
		return "queryCategoryMasData";
	}
	
}

?>