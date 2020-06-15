<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class SubcodeproductsGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $generalSku;
	
	public function getGeneralSku() {
		return $this->generalSku;
	}
	
	public function setGeneralSku($generalSku) {
		$this->generalSku = $generalSku;
		$this->apiParams["generalSku"] = $generalSku;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.subcodeproducts.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->generalSku, 'generalSku');
	}
	
	public function getBizName(){
		return "getSubcodeproducts";
	}
	
}

?>