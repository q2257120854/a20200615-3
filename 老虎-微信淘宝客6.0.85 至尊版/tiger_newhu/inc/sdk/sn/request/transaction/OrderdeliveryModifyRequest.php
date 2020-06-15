<?php
/**
 * 苏宁开放平台接口 - 交易API - 发货信息修改
 *
 * @author 14042058
 * @date   2014-6-4
 */
class OrderdeliveryModifyRequest extends SuningRequest{
	/**
	 * 订单号
	 */
	private $orderCode;
	/**
	 * 运单号
	 */
	private $expressNo;
	/**
	 * 物流公司编码
	 */
	private $expressCompanyCode;
	/**
	 * 苏宁商品编码 组
	 */
	private $sendDetail;
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
	 * @return the $expressNo
	 */
	public function getExpressNo() {
		return $this->expressNo;
	}

	/**
	 * @return the $expressCompanyCode
	 */
	public function getExpressCompanyCode() {
		return $this->expressCompanyCode;
	}

	/**
	 * @return the $sendDetail
	 */
	public function getSendDetail() {
		return $this->sendDetail;
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
	 * @param field_type $expressNo
	 */
	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}

	/**
	 * @param field_type $expressCompanyCode
	 */
	public function setExpressCompanyCode($expressCompanyCode) {
		$this->expressCompanyCode = $expressCompanyCode;
		$this->apiParams["expressCompanyCode"] = $expressCompanyCode;
	}

	/**
	 * @param field_type $sendDetail
	 */
	public function setSendDetail($sendDetail) {
		$this->sendDetail = $sendDetail;
		$this->apiParams["sendDetail"] = $sendDetail->getApiParams();
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
		return 'suning.custom.orderdelivery.modify';
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
	
	public function check()
	{
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, "orderCode");
		RequestCheckUtil::checkNotNull($this->expressNo, "expressNo");
		RequestCheckUtil::checkNotNull($this->expressCompanyCode, "expressCompanyCode");
		
		//校验苏宁商品编码及订单行项目号二者必填其一
		$sendDetail = $this->sendDetail;
		$orderLineNumbers = $this->orderLineNumbers;
		$array = array();
		if(!empty($sendDetail)){
			array_push($array, $sendDetail->getProductCode());
		}
		if(!empty($orderLineNumbers)){
			array_push($array, $orderLineNumbers->getOrderLineNumber());
		}
		RequestCheckUtil::checkArrayAllNull($array);
		unset($array);
	}
	
	public function getBizName(){
		return "orderDelivery";
	}

}

//商品编码
class SendDetail{
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
//订单行项目号
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