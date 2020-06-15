<?php
/**
 * 苏宁开放平台接口 - 单个查询订单记录接口
 *
 * @author suning
 * @date   2015-6-8
 */
class HistoryOrderGetRequest  extends SuningRequest{
	
	/**
	 * 订单号。服务市场的订单号，两者必填其一
	 */
	private $orderId;
	
	/**
	 * 订单行号。订单详情编号，两者必填其一
	 */
	private $orderDetailId;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderDetailId() {
		return $this->orderDetailId;
	}
	
	public function setOrderDetailId($orderDetailId) {
		$this->orderDetailId = $orderDetailId;
		$this->apiParams["orderDetailId"] = $orderDetailId;
	}
	
	public function getApiMethodName(){
		return 'suning.fws.historyorder.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getHistoryOrder";
	}
	
}

?>