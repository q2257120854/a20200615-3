<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-4-12
 */
class CombinationProdQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $skuId;
	
	public function getSkuId() {
		return $this->skuId;
	}
	
	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.combinationprod.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->skuId, 'skuId');
	}
	
	public function getBizName(){
		return "queryCombinationProd";
	}
	
}

?>