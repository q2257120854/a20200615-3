<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-28
 */
class JsydcmmdtyimgsQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $sku;
	
	/**
	 * 
	 */
	private $token;
	
	public function getSku() {
		return $this->sku;
	}
	
	public function setSku($sku) {
		$this->sku = $sku;
		$this->apiParams["sku"] = $sku;
	}
	
	public function getToken() {
		return $this->token;
	}
	
	public function setToken($token) {
		$this->token = $token;
		$this->apiParams["token"] = $token;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.jsydcmmdtyimgs.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->sku, 'sku');
		RequestCheckUtil::checkNotNull($this->token, 'token');
	}
	
	public function getBizName(){
		return "queryJsydcmmdtyimgs";
	}
	
}

?>