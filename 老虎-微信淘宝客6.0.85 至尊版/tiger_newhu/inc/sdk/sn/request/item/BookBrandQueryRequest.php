<?php

/**
 * 苏宁开放平台接口 - 商品API - 获取文化制品类商品品牌信息
 *
 * $pack   suning.custom.book.brand.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-26
 */
class BookBrandQueryRequest extends SelectSuningRequest {

	/**
	 * 苏宁品牌/出版社名称。根据输入的信息进行关键字模糊查询
	 */
	private $brandName;

	/**
	 * 苏宁品牌/出版社编码。根据输入的信息进行关键字精确查询。需 注意字母大小写
	 */
	private $brandCode;

	public function setBrandName($brandName) {
		$this -> brandName = $brandName;
		$this->apiParams["brandName"] = $brandName;
	}

	public function getBrandName() {
		return $this -> brandName;
	}

	public function setBrandCode($brandCode) {
		$this -> brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}

	public function getBrandCode() {
		return $this -> brandCode;
	}

	public function getApiMethodName() {
		return 'suning.custom.book.brand.query';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50) {
		parent::check();
	}
	
	public function getBizName(){
		return "brand";
	}
}
?>