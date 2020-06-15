<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class ParamtemplateQueryRequest  extends SuningRequest{
	
	/**
	 * 
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
		return 'suning.store.paramtemplate.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
	}
	
	public function getBizName(){
		return "queryParamtemplate";
	}
	
}

?>