<?php
/**
 * 苏宁开放平台接口 - 应用准备完成通知
 *
 * @author suning
 * @date   2016-3-3
 */
class AppReadyNoticeRequest  extends SuningRequest{
	
	/**
	 * 流水号。主动通知中获取到的
	 */
	private $serialId;
	
	/**
	 * 服务实例ID。主动通知中获取到的
	 */
	private $productInsId;
	
	/**
	 * 订单号。订单号
	 */
	private $orderId;
	
	/**
	 * 订单类型。1.服务开通
	 */
	private $orderType;
	
	/**
	 * 准备成功标识。准备成功标识。Y成功 N失败
	 */
	private $result;
	
	/**
	 * 准备结果描述。准备结果描述
	 */
	private $message;
	
	public function getSerialId() {
		return $this->serialId;
	}
	
	public function setSerialId($serialId) {
		$this->serialId = $serialId;
		$this->apiParams["serialId"] = $serialId;
	}
	
	public function getProductInsId() {
		return $this->productInsId;
	}
	
	public function setProductInsId($productInsId) {
		$this->productInsId = $productInsId;
		$this->apiParams["productInsId"] = $productInsId;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderType() {
		return $this->orderType;
	}
	
	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	public function getResult() {
		return $this->result;
	}
	
	public function setResult($result) {
		$this->result = $result;
		$this->apiParams["result"] = $result;
	}
	
	public function getMessage() {
		return $this->message;
	}
	
	public function setMessage($message) {
		$this->message = $message;
		$this->apiParams["message"] = $message;
	}
	
	public function getApiMethodName(){
		return 'suning.cloud.appcomplete.notice';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->serialId, 'serialId');
		RequestCheckUtil::checkNotNull($this->productInsId, 'productInsId');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderType, 'orderType');
		RequestCheckUtil::checkNotNull($this->result, 'result');
		RequestCheckUtil::checkNotNull($this->message, 'message');
	}
	
	public function getBizName(){
		return "noticeAppComplete";
	}
	
}

?>