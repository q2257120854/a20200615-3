<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-22
 */
class CatalogcommodityQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $catalogId;
	
	public function getCatalogId() {
		return $this->catalogId;
	}
	
	public function setCatalogId($catalogId) {
		$this->catalogId = $catalogId;
		$this->apiParams["catalogId"] = $catalogId;
	}
	
	public function getApiMethodName(){
		return 'suning.online.catalogcommodity.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->catalogId, 'catalogId');
	}
	
	public function getBizName(){
		return "queryCatalogcommodity";
	}
	
}

?>