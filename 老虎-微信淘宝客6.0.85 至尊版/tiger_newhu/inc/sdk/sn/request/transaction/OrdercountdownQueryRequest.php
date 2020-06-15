<?php
/**
 * 苏宁开放平台接口 - 交易API - 倒计时获取
 *
 * @author 14042058
 * @date   2014-6-4
 */
class OrdercountdownQueryRequest extends SuningRequest{
	/**
	 * 订单号
	 */
	private $orderCode;
	/**
	 * 苏宁商品编码 组
	 */
	private $countDown;
	/**
	 * 订单行项目号 组
	 */
	private $orderLineNumbers;
	/**
	 * @return the $orderCode
	 */
	public function getOrderCode() {
		return $this->orderCode;
	}

	/**
	 * @return the $countDown
	 */
	public function getCountDown() {
		return $this->countDown;
	}

	/**
	 * @return the $orderLineNumbers
	 */
	public function getOrderLineNumbers() {
		return $this->orderLineNumbers;
	}

	/**
	 * @param field_type $orderCode
	 */
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}

	/**
	 * @param field_type $countDown
	 */
	public function setCountDown($countDown) {
		$this->countDown = $countDown;
		$arr = array();
		foreach ($countDown as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["countDown"] = $arr;
	}

	/**
	 * @param field_type $orderLineNumbers
	 */
	public function setOrderLineNumbers($orderLineNumbers) {
		$this->orderLineNumbers = $orderLineNumbers;
		$this->apiParams["orderLineNumbers"] = $orderLineNumbers->getApiParams();
	}

	public function getApiMethodName()
	{
		return 'suning.custom.ordercountdown.query';
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
	
	public function check()
	{
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, "orderCode");
		
		//校验苏宁商品编码及订单行项目号二者必填其一
		$orderLineNumbers = $this->orderLineNumbers;
		$array = array();
		array_push($array,$this->countDown);
		if(!empty($orderLineNumbers)){
			array_push($array,$orderLineNumbers->getOrderLineNumber());
		}
		RequestCheckUtil::checkArrayAllNull($array);
		unset($array);
	}
	
	public function getBizName(){
		return "orderCountDown";
	}
}

class CountDown{
	private $apiParams = array();
	/**
	 * 苏宁商品编码
	 */
	private $productCode;
	/**
	 * @return the $productCode
	 */
	public function getProductCode() {
		return $this->productCode;
	}

	/**
	 * @param field_type $productCode
	 */
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
}

class OrderLineNumbers{
	private $apiParams = array();
	/**
	 * 订单行项目号
	 */
	private $orderLineNumber;
	/**
	 * @return the $orderLineNumber
	 */
	public function getOrderLineNumber() {
		return $this->orderLineNumber;
	}

	/**
	 * @param field_type $orderLineNumber
	 */
	public function setOrderLineNumber($orderLineNumber) {
		$this->orderLineNumber = $orderLineNumber;
		$this->apiParams["orderLineNumber"] = $orderLineNumber;
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}
}
?>