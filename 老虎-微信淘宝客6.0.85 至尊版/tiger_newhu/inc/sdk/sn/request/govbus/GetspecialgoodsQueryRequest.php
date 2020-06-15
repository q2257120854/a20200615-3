<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-12-17
 */
class GetspecialgoodsQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $categoryId;
	
	public function getCategoryId() {
		return $this->categoryId;
	}
	
	public function setCategoryId($categoryId) {
		$this->categoryId = $categoryId;
		$this->apiParams["categoryId"] = $categoryId;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.getspecialgoods.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryId, 'categoryId');
	}
	
	public function getBizName(){
		return "queryGetspecialgoods";
	}
	
}

?>