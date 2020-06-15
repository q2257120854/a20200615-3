<?php
/**
 * 苏宁开放平台接口 - 订单评价单笔查询查询
 *
 * @author suning
 * @date   2016-5-4
 */
class OrderEvaluateGetRequest  extends SuningRequest{
	
	/**
	 * 苏宁订单号。
	 */
	private $orderCode;
	
	/**
	 * 苏宁商品编码。
	 */
	private $productCode;
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.orderevaluate.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "getOrderEvaluate";
	}
	
}

?>