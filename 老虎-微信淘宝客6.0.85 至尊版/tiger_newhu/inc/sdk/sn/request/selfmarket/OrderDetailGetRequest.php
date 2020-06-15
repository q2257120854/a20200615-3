<?php
/**
 * 苏宁开放平台接口 - 查询单个订单作业
 *
 * @author suning
 * @date   2016-1-11
 */
class OrderDetailGetRequest  extends SuningRequest{
	
	/**
	 * 订单来源。201 天猫旗舰店，214京东， 203 苏宁， 204 亚马逊中国， 205当当 ，206 ebay,207 VIP，208 一号店，209 国美 210 拍拍，211 聚美，212 乐蜂 202 1688，301 其他
	 */
	private $orderSource;
	
	/**
	 * 查询类型。1：发货 2：退货 3：取消
	 */
	private $cancelType;
	
	/**
	 * 外部订单号。
	 */
	private $outOrderId;
	
	public function getOrderSource() {
		return $this->orderSource;
	}
	
	public function setOrderSource($orderSource) {
		$this->orderSource = $orderSource;
		$this->apiParams["orderSource"] = $orderSource;
	}
	
	public function getCancelType() {
		return $this->cancelType;
	}
	
	public function setCancelType($cancelType) {
		$this->cancelType = $cancelType;
		$this->apiParams["cancelType"] = $cancelType;
	}
	
	public function getOutOrderId() {
		return $this->outOrderId;
	}
	
	public function setOutOrderId($outOrderId) {
		$this->outOrderId = $outOrderId;
		$this->apiParams["outOrderId"] = $outOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.orderdetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderSource, 'orderSource');
		RequestCheckUtil::checkNotNull($this->cancelType, 'cancelType');
		RequestCheckUtil::checkNotNull($this->outOrderId, 'outOrderId');
	}
	
	public function getBizName(){
		return "getOrderDetail";
	}
	
}

?>