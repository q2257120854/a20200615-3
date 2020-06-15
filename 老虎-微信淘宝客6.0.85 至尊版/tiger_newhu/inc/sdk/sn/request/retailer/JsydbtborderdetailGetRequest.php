<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-28
 */
class JsydbtborderdetailGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $queryExts;
	
	/**
	 * 
	 */
	private $token;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getQueryExts() {
		return $this->queryExts;
	}
	
	public function setQueryExts($queryExts) {
		$this->queryExts = $queryExts;
		$this->apiParams["queryExts"] = $queryExts;
	}
	
	public function getToken() {
		return $this->token;
	}
	
	public function setToken($token) {
		$this->token = $token;
		$this->apiParams["token"] = $token;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.jsydbtborderdetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->token, 'token');
	}
	
	public function getBizName(){
		return "getJsydbtborderdetail";
	}
	
}

?>