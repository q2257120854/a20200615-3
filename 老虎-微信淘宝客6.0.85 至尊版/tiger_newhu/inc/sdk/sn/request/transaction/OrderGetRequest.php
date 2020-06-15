<?php
/**
 * 苏宁开放平台接口 - 单笔订单查询
 *
 * @author suning
 * @date   2015-2-3
 */
class OrderGetRequest  extends SuningRequest{
	
	/**
	 * 订单号
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
		return 'suning.custom.order.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
	}
	
	public function getBizName(){
		return "orderGet";
	}
	
}

?>