<?php
/**
 * 苏宁开放平台接口 - 销售准备API - 查询单个运费模板
 *
 * $pack   suning.custom.freighttemplate.get
 * @author 14050890
 * @date   2014-06-03
 */
class FreighttemplateGetRequest extends SuningRequest{
	/**
	 * 运费模板代码
	 */
	private $freightTemplateId;
	
	public function getFreightTemplateId() {
		return $this->freightTemplateId;
	}

	public function setFreightTemplateId($freightTemplateId) {
		$this->freightTemplateId = $freightTemplateId;
		$this->apiParams["freightTemplateId"] = $freightTemplateId;
	}

	/**
	 * 根据请求方式，生成相应请求报文
	 *
	 * @param $type 请求方式(json或xml，默认xml)
	 */
	public function getApiParams() {
		return $this->apiParams;
	}

	
	public function getApiMethodName() {
		return "suning.custom.freighttemplate.get";
	}
	
	public function check() {
		RequestCheckUtil::checkNotNull($this->freightTemplateId, 'freightTemplateId');
	}
	
	public function getBizName(){
		return "freightTemplate";
	}
}


?>