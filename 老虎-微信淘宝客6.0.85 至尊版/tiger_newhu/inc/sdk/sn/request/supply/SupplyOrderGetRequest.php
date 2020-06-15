<?php
/**
 * 苏宁开放平台接口 - 单个订单详情查询
 *
 * @author suning
 * @date   2016-3-25
 */
class SupplyOrderGetRequest  extends SuningRequest{
	
	/**
	 * B2C订单号。B2C订单号
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
		return 'suning.supply.order.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
	}
	
	public function getBizName(){
		return "getOrder";
	}
	
}

?>