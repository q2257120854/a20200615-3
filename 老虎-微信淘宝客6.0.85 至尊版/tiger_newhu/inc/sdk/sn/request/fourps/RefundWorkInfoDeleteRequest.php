<?php
/**
 * 苏宁开放平台接口 - 商品预约信息取消(入库及退库)
 *
 * @author suning
 * @date   2015-12-28
 */
class RefundWorkInfoDeleteRequest  extends SuningRequest{
	
	/**
	 * 预约单号。预约单号
	 */
	private $orderId;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.refundworkinfo.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "deleteRefundWorkInfo";
	}
	
}

?>