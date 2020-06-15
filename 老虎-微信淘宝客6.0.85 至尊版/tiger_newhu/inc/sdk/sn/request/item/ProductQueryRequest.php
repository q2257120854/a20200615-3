<?php

/**
 * 苏宁开放平台接口 - 商品API - 获取苏宁产品信息
 *
 * $pack   suning.custom.product.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-26
 */
class ProductQueryRequest extends SelectSuningRequest {

	/**
	 * 品牌编码/出版社编码
	 */
	private $brandCode;

	/**
	 * 采购目录编码，底层采购目录编码
	 */
	private $categoryCode;

	public function setBrandCode($brandCode) {
		$this -> brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}

	public function getBrandCode() {
		return $this -> brandCode;
	}

	public function setCategoryCode($categoryCode) {
		$this -> categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}

	public function getCategoryCode() {
		return $this -> categoryCode;
	}

	public function getApiMethodName() {
		return 'suning.custom.product.query';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50) {
		RequestCheckUtil::checkNotNull($this -> brandCode, 'brandCode');
		RequestCheckUtil::checkNotNull($this -> categoryCode, 'categoryCode');
		parent::check();
	}
	
	public function getBizName(){
		return "product";
	}
}
?>