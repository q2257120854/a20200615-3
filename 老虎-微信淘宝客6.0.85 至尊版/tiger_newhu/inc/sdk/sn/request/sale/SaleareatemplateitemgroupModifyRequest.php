<?php
/**
 * 苏宁开放平台接口 - 销售准备API - 修改销售范围模板关联商品组服务
 *
 * $pack   suning.custom.saleareatemplateitemgroup.modify
 * @author 14050890
 * @date   2014-06-03
 */
class SaleareatemplateitemgroupModifyRequest extends SuningRequest {
	/**
	 * 模板代码
	 */
	private $templateId;
	
	/**
	 * 商品组层级。固定值，4
	 */
	private $grade;
	
	/**
	 * 商品组代码信息集合
	 */
	private $lineComGroupInfoList;
	
	public function getTemplateId() {
		return $this->templateId;
	}
	
	public function getGrade() {
		return $this->grade;
	}
	
	public function getLineComGroupInfoList() {
		return $this->lineComGroupInfoList;
	}
	
	public function setTemplateId($templateId) {
		$this->templateId = $templateId;
		$this->apiParams["templateId"] = $templateId;
	}
	
	public function setGrade($grade) {
		$this->grade = $grade;
		$this->apiParams["grade"] = $grade;
	}
	
	public function setLineComGroupInfoList($lineComGroupInfoList) {
		$this->lineComGroupInfoList = $lineComGroupInfoList;
		$arr = array();
		foreach ($lineComGroupInfoList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["lineComGroupInfoList"] = $arr;
	}
	
	/**
	 * 根据请求方式，生成相应请求报文
	 * 
	 * @param type 请求方式(json或xml)
	 */
	public function getApiParams() {
		return $this->apiParams;
	}
	
	public function getApiMethodName() {
		return "suning.custom.saleareatemplateitemgroup.modify";
	}
	
	public function check() {
		RequestCheckUtil::checkNotNull ( $this->templateId, 'templateId' );
		RequestCheckUtil::checkNotNull ( $this->grade, 'grade' );
	}
	
	public function getBizName(){
		return "saleAreaTemplateItemGroup";
	}
}

class LineComGroupInfoList {
	private $apiParams = array();
	/**
	 * 商品组代码
	 */
	private $commodityGroupCode;
	
	public function getCommodityGroupCode() {
		return $this->commodityGroupCode;
	}
	
	public function setCommodityGroupCode($commodityGroupCode) {
		$this->commodityGroupCode = $commodityGroupCode;
		$this->apiParams["commodityGroupCode"] = $commodityGroupCode;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
}
?>