<?php
/**
 * 苏宁开放平台接口 - 订购关系查询
 *
 * @author suning
 * @date   2016-2-24
 */
class OrderRelGetRequest  extends SuningRequest{
	
	/**
	 * 会员编码（用户）。跳转回调地址时，返回的参数userid的值
	 */
	private $userId;
	
	/**
	 * 版本编码。跳转回调地址时，返回的参数itemcode的值
	 */
	private $itemcode;
	
	/**
	 * 订单编码。订单号
	 */
	private $orderId;
	
	public function getUserId() {
		return $this->userId;
	}
	
	public function setUserId($userId) {
		$this->userId = $userId;
		$this->apiParams["userId"] = $userId;
	}
	
	public function getItemcode() {
		return $this->itemcode;
	}
	
	public function setItemcode($itemcode) {
		$this->itemcode = $itemcode;
		$this->apiParams["itemcode"] = $itemcode;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getApiMethodName(){
		return 'suning.cloud.orderrel.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->userId, 'userId');
		RequestCheckUtil::checkNotNull($this->itemcode, 'itemcode');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "getOrderRel";
	}
	
}

?>