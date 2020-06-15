<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-7-18
 */
class GetproductclusterGetRequest  extends SuningRequest{
	
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
		return 'suning.govbus.getproductcluster.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->skuId, 'skuId');
	}
	
	public function getBizName(){
		return "getGetproductcluster";
	}
	
}

?>