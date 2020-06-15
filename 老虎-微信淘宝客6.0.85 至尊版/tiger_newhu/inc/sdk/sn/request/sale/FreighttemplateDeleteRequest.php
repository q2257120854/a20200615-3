<?php
/**
 * 苏宁开放平台接口 - 销售准备API - 删除运费模板
 *
 * $pack   suning.custom.freighttemplate.delete
 * @author 14050890
 * @date   2014-06-03
 */
class FreighttemplateDeleteRequest extends SuningRequest{

	/**
	 * 运费模板Id
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
	 * @param type 请求方式(json或xml)
	 */
	public function getApiParams() {
		return $this->apiParams;
	}
	
	public function getApiMethodName() {
		return "suning.custom.freighttemplate.delete";
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->freightTemplateId, 'freightTemplateId');
	}
	
	public function getBizName(){
		return "freightTemplate";
	}
}
?>