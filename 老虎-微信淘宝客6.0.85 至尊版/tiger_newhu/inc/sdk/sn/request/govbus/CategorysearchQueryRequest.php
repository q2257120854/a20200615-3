<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-4-20
 */
class CategorysearchQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $searchContent;
	
	public function getSearchContent() {
		return $this->searchContent;
	}
	
	public function setSearchContent($searchContent) {
		$this->searchContent = $searchContent;
		$this->apiParams["searchContent"] = $searchContent;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.categorysearch.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->searchContent, 'searchContent');
	}
	
	public function getBizName(){
		return "queryCategorysearch";
	}
	
}

?>