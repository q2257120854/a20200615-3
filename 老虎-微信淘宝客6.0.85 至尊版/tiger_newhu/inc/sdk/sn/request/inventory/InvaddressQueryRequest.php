<?php

/**
 * 苏宁开放平台接口 - 商品API - 查询仓库地址(查询所有)
 *
 * $pack   suning.custom.invaddress.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */
class InvaddressQueryRequest extends SelectSuningRequest {

	public function getApiMethodName() {
		return 'suning.custom.invaddress.query';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50) {
		parent::check();
	}
	
	public function getBizName(){
		return "invaddress";
	}
}
?>