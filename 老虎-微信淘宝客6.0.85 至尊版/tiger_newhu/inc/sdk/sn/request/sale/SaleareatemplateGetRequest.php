<?php
/**
 * 苏宁开放平台接口 - 销售准备API - 查询单个销售范围模板
 *
 * $pack   suning.custom.saleareatemplate.get
 * @author 14050890
 * @date   2014-06-03
 */
class SaleareatemplateGetRequest extends SuningRequest{
	/**
	 * 模板代码
	 */
	private $templateId;
	
	public function getTemplateId() {
		return $this->templateId;
	}

	public function setTemplateId($templateId) {
		$this->templateId = $templateId;
		$this->apiParams["templateId"] = $templateId;
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
		return "suning.custom.saleareatemplate.get";
	}

	public function check() {
		RequestCheckUtil::checkNotNull ( $this->templateId, 'templateId' );
	}
	
	public function getBizName(){
		return "saleAreaTemplate";
	}
}

?>