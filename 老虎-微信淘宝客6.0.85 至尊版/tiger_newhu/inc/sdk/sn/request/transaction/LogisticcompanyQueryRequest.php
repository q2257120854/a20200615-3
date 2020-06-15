<?php

/**
 * 苏宁开放平台接口 - 交易API - 获取物流公司代码（查询所有）
 *
 * @author 14042058
 * @date   2014-6-4
 */
class LogisticcompanyQueryRequest extends SelectSuningRequest {

	public function getApiMethodName() {
		return 'suning.custom.logisticcompany.query';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50) {
		parent::check();
	}
	
	public function getBizName(){
		return "logisticCompany";
	}
}

?>