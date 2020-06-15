<?php
/**
 * 苏宁开放平台接口 - 交易API - 订单备注查询
 *
 * @author 14042058
 * @date   2014-6-4
 */
class OrdernoteGetRequest extends SuningRequest{
	/**
	 * 订单号
	 */
	private $orderCode;
	/**
	 * @return the $orderCode
	 */
	public function getOrderCode() {
		return $this->orderCode;
	}

	/**
	 * @param field_type $orderCode
	 */
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getApiMethodName()
	{
		return 'suning.custom.ordernote.get';
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
	
	public function check()
	{
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, "orderCode");	
	}

	public function getBizName(){
		return "orderNote";
	}
}

?>