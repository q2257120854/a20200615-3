<?php
/**
 * 苏宁开放平台接口 - 订单评价单笔查询
 *
 * @author suning
 * @date   2014-9-25
 */
class OrderevalGetRequest  extends SuningRequest{
	
	/**
	 * 苏宁订单号(苏宁订单号、苏宁商品编码,两者必填其一)
	 */
	private $orderCode;
	
	/**
	 * 苏宁商品编码(苏宁订单号、苏宁商品编码,两者必填其一)
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
		return 'suning.custom.ordereval.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getOrderEval";
	}
	
}

?>