<?php
/**
 * 苏宁开放平台接口 - 添加检测单接口
 *
 * @author suning
 * @date   2015-6-8
 */
class DetectionFormAddRequest  extends SuningRequest{
	
	/**
	 * 检测单号。服务商自己填写的单号
	 */
	private $qtOrderCode;
	
	/**
	 * 订单行号。服务市场的订单行号
	 */
	private $orderDetailId;
	
	/**
	 * 商品编码。由外部系统确定
	 */
	private $itemCode;
	
	/**
	 * 商品名称。送检商品名称
	 */
	private $itemName;
	
	/**
	 * 商品描述。送件商品描述
	 */
	private $itemDesc;
	
	public function getQtOrderCode() {
		return $this->qtOrderCode;
	}
	
	public function setQtOrderCode($qtOrderCode) {
		$this->qtOrderCode = $qtOrderCode;
		$this->apiParams["qtOrderCode"] = $qtOrderCode;
	}
	
	public function getOrderDetailId() {
		return $this->orderDetailId;
	}
	
	public function setOrderDetailId($orderDetailId) {
		$this->orderDetailId = $orderDetailId;
		$this->apiParams["orderDetailId"] = $orderDetailId;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getItemName() {
		return $this->itemName;
	}
	
	public function setItemName($itemName) {
		$this->itemName = $itemName;
		$this->apiParams["itemName"] = $itemName;
	}
	
	public function getItemDesc() {
		return $this->itemDesc;
	}
	
	public function setItemDesc($itemDesc) {
		$this->itemDesc = $itemDesc;
		$this->apiParams["itemDesc"] = $itemDesc;
	}
	
	public function getApiMethodName(){
		return 'suning.fws.detectionform.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->qtOrderCode, 'qtOrderCode');
		RequestCheckUtil::checkNotNull($this->orderDetailId, 'orderDetailId');
	}
	
	public function getBizName(){
		return "addDetectionForm";
	}
	
}

?>