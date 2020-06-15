<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-2-27
 */
class ReturnorderGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderCode;
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.returnorder.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
	}
	
	public function getBizName(){
		return "getReturnorder";
	}
	
}

?>