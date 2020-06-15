<?php

/**
 * 苏宁开放平台接口 - 商品API - 获取商品采购目录信息
 *
 * $pack   suning.custom.category.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-26
 */
class CategoryQueryRequest extends SelectSuningRequest {

	/**
	 * 苏宁采购目录名称。可输入中文，根据输入的信息进行关键字模糊查询
	 */
	private $categoryName;
	
	private $targetChannel;
	
	public function setTargetChannel($targetChannel) {
		$this -> targetChannel = $targetChannel;
		$this->apiParams["targetChannel"] = $targetChannel;
	}

	public function getTargetChannel() {
		return $this -> targetChannel;
	}

	public function setCategoryName($categoryName) {
		$this -> categoryName = $categoryName;
		$this->apiParams["categoryName"] = $categoryName;
	}

	public function getCategoryName() {
		return $this -> CategoryName;
	}

	public function getApiMethodName() {
		return 'suning.custom.category.query';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50) {
		parent::check();
	}
	
	public function getBizName(){
		return "category";
	}
}
?>