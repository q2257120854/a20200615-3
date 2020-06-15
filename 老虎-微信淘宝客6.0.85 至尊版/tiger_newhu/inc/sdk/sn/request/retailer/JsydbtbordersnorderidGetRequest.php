<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-28
 */
class JsydbtbordersnorderidGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $thirdOrder;
	
	/**
	 * 
	 */
	private $token;
	
	public function getThirdOrder() {
		return $this->thirdOrder;
	}
	
	public function setThirdOrder($thirdOrder) {
		$this->thirdOrder = $thirdOrder;
		$this->apiParams["thirdOrder"] = $thirdOrder;
	}
	
	public function getToken() {
		return $this->token;
	}
	
	public function setToken($token) {
		$this->token = $token;
		$this->apiParams["token"] = $token;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.jsydbtbordersnorderid.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->thirdOrder, 'thirdOrder');
		RequestCheckUtil::checkNotNull($this->token, 'token');
	}
	
	public function getBizName(){
		return "getJsydbtbordersnorderid";
	}
	
}

?>