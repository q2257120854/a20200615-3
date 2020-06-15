<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-11-29
 */
class CategoryredictGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cmTitle;
	
	/**
	 * 
	 */
	private $categoryCode;
	
	public function getCmTitle() {
		return $this->cmTitle;
	}
	
	public function setCmTitle($cmTitle) {
		$this->cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.categoryredict.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cmTitle, 'cmTitle');
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
	}
	
	public function getBizName(){
		return "getCategoryredict";
	}
	
}

?>