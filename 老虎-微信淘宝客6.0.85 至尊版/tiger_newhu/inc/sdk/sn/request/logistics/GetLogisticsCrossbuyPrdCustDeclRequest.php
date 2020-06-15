<?php
/**
 * 苏宁开放平台接口 - 苏宁物流跨境购个人物品报关信息查询
 *
 * @author suning
 * @date   2014-12-22
 */
class GetLogisticsCrossbuyPrdCustDeclRequest  extends SuningRequest{
	
	/**
	 * 苏宁物流订单号
	 */
	private $logisticOrderId;
	
	/**
	 * B2C订单号
	 */
	private $orderNo;
	
	public function getLogisticOrderId() {
		return $this->logisticOrderId;
	}
	
	public function setLogisticOrderId($logisticOrderId) {
		$this->logisticOrderId = $logisticOrderId;
		$this->apiParams["logisticOrderId"] = $logisticOrderId;
	}
	
	public function getOrderNo() {
		return $this->orderNo;
	}
	
	public function setOrderNo($orderNo) {
		$this->orderNo = $orderNo;
		$this->apiParams["orderNo"] = $orderNo;
	}
	
	public function getApiMethodName(){
		return 'suning.logistics.crossbuyprdcustdecl.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->logisticOrderId, 'logisticOrderId');
	}
	
	public function getBizName(){
		return "getLogisticsCrossbuyPrdCustDecl";
	}
	
}

?>