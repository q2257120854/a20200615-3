<?php

/**
 * 苏宁开放平台接口 - 商品API - 获取文化制品类商品销售目录信息
 *
 * $pack   suning.custom.book.salescatalog.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-26
 */
class BookSalescatalogQueryRequest extends SelectSuningRequest {

	public function getApiMethodName() {
		return 'suning.custom.book.salescatalog.query';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50) {
		parent::check();
	}
	
	public function getBizName(){
		return "salesCatalog";
	}
}
?>