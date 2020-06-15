<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-2-14
 */
class NewbrandQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $targetChannel;
	
	/**
	 * 
	 */
	private $brandCode;
	
	/**
	 * 
	 */
	private $categoryCode;
	
	/**
	 * 
	 */
	private $brandName;
	
	
	
	public function getTargetChannel() {
		return $this->targetChannel;
	}
	
	public function setTargetChannel($targetChannel) {
		$this->targetChannel = $targetChannel;
		$this->apiParams["targetChannel"] = $targetChannel;
	}
	
	public function getBrandCode() {
		return $this->brandCode;
	}
	
	public function setBrandCode($brandCode) {
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getBrandName() {
		return $this->brandName;
	}
	
	public function setBrandName($brandName) {
		$this->brandName = $brandName;
		$this->apiParams["brandName"] = $brandName;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.newbrand.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
	}
	
	public function getBizName(){
		return "queryNewbrand";
	}
	
}

?>