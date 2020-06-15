<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-22
 */
class VirtualGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderItemCode;
	
	public function getOrderItemCode() {
		return $this->orderItemCode;
	}
	
	public function setOrderItemCode($orderItemCode) {
		$this->orderItemCode = $orderItemCode;
		$this->apiParams["orderItemCode"] = $orderItemCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.virtual.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderItemCode, 'orderItemCode');
	}
	
	public function getBizName(){
		return "getVirtual";
	}
	
}

?>