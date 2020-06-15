<?php
/**
 * 苏宁开放平台接口 - 销售准备API - 批量查询运费模板
 *
 * $pack   suning.custom.freighttemplate.query
 * @author 14050890
 * @date   2014-06-03
 */
class FreighttemplateQueryRequest extends SelectSuningRequest {
	/**
	 * 根据请求方式，生成相应请求报文
	 *
	 * @param $type 请求方式(json或xml，默认xml)
	 */
	public function getApiParams() {
		return $this->apiParams;
	}
	
	public function getApiMethodName() {
		return 'suning.custom.freighttemplate.query';
	}
	
	public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 1, $pageSizeMax = 50) {
		parent::check ( 1, 99999, 10, 50 );
	}
	
	public function getBizName(){
		return "freightTemplate";
	}
}

?>