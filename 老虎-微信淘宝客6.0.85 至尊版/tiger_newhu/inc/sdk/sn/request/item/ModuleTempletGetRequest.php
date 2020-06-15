<?php
/**
 * 苏宁开放平台接口 - 获取模块模板
 *
 * @author suning
 * @date   2016-5-11
 */
class ModuleTempletGetRequest  extends SuningRequest{
	
	/**
	 * 苏宁底层采购目录编码。苏宁底层采购目录编码。必填项。可由平台业务-商品服务-获取商品采购目录信息接口获得。
	 */
	private $categoryCode;
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.moduletemplet.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
	}
	
	public function getBizName(){
		return "getModuleTemplet";
	}
	
}

?>