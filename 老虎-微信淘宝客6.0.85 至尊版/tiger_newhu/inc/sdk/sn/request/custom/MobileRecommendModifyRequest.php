<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-8-24
 */
class MobileRecommendModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $operation;
	
	/**
	 * 
	 */
	private $recommendId;
	
	/**
	 * 
	 */
	private $recommendName;
	
	/**
	 * 
	 */
	private $productInfo;
	
	public function getOperation() {
		return $this->operation;
	}
	
	public function setOperation($operation) {
		$this->operation = $operation;
		$this->apiParams["operation"] = $operation;
	}
	
	public function getRecommendId() {
		return $this->recommendId;
	}
	
	public function setRecommendId($recommendId) {
		$this->recommendId = $recommendId;
		$this->apiParams["recommendId"] = $recommendId;
	}
	
	public function getRecommendName() {
		return $this->recommendName;
	}
	
	public function setRecommendName($recommendName) {
		$this->recommendName = $recommendName;
		$this->apiParams["recommendName"] = $recommendName;
	}
	
	public function getProductInfo() {
		return $this->productInfo;
	}
	
	public function setProductInfo($productInfo) {
		$this->productInfo = $productInfo;
		$arr = array();
		foreach ($productInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["productInfo"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.mobilerecommend.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->recommendId, 'recommendId');
	}
	
	public function getBizName(){
		return "modifyMobileRecommend";
	}
	
}

class ProductInfo {

	private $apiParams = array();
	
	private $productCode;
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>