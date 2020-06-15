<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-4-23
 */
class AtmopicModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $atmoPicInfo;
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getAtmoPicInfo() {
		return $this->atmoPicInfo;
	}
	
	public function setAtmoPicInfo($atmoPicInfo) {
		$this->atmoPicInfo = $atmoPicInfo;
		$arr = array();
		foreach ($atmoPicInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["atmoPicInfo"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.atmopic.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "modifyAtmopic";
	}
	
}

class AtmoPicInfo {

	private $apiParams = array();
	
	private $href;
	
	private $beginTime;
	
	private $endTime;
	
	public function getHref() {
		return $this->href;
	}

	public function setHref($href) {
		$this->href = $href;
		$this->apiParams["href"] = $href;
	}
	
	public function getBeginTime() {
		return $this->beginTime;
	}

	public function setBeginTime($beginTime) {
		$this->beginTime = $beginTime;
		$this->apiParams["beginTime"] = $beginTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>