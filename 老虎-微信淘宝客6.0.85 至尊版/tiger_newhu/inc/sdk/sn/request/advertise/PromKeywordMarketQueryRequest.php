<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-11-23
 */
class PromKeywordMarketQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $catalogSecond;
	
	/**
	 * 
	 */
	private $catalogThird;
	
	public function getCatalogSecond() {
		return $this->catalogSecond;
	}
	
	public function setCatalogSecond($catalogSecond) {
		$this->catalogSecond = $catalogSecond;
		$this->apiParams["catalogSecond"] = $catalogSecond;
	}
	
	public function getCatalogThird() {
		return $this->catalogThird;
	}
	
	public function setCatalogThird($catalogThird) {
		$this->catalogThird = $catalogThird;
		$this->apiParams["catalogThird"] = $catalogThird;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promkeywordmarket.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->catalogSecond, 'catalogSecond');
		RequestCheckUtil::checkNotNull($this->catalogThird, 'catalogThird');
	}
	
	public function getBizName(){
		return "queryPromKeywordMarket";
	}
	
}

?>