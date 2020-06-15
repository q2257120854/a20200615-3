<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-28
 */
class JsydcmmdtysimilarQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $skuId;
	
	/**
	 * 
	 */
	private $token;
	
	public function getSkuId() {
		return $this->skuId;
	}
	
	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getToken() {
		return $this->token;
	}
	
	public function setToken($token) {
		$this->token = $token;
		$this->apiParams["token"] = $token;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.jsydcmmdtysimilar.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->skuId, 'skuId');
		RequestCheckUtil::checkNotNull($this->token, 'token');
	}
	
	public function getBizName(){
		return "queryJsydcmmdtysimilar";
	}
	
}

?>