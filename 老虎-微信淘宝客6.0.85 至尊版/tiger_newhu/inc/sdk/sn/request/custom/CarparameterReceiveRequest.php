<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-14
 */
class CarparameterReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $modelSlug;
	
	/**
	 * 
	 */
	private $productCode;
	
	public function getModelSlug() {
		return $this->modelSlug;
	}
	
	public function setModelSlug($modelSlug) {
		$this->modelSlug = $modelSlug;
		$this->apiParams["modelSlug"] = $modelSlug;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.carparameter.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->modelSlug, 'modelSlug');
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "receiveCarparameter";
	}
	
}

?>