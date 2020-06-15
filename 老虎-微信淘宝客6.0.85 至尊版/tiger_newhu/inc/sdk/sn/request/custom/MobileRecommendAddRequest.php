<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-8-24
 */
class MobileRecommendAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $recommendName;
	
	/**
	 * 
	 */
	private $productInfo;
	
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
		return 'suning.custom.mobilerecommend.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->recommendName, 'recommendName');
	}
	
	public function getBizName(){
		return "addMobileRecommend";
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