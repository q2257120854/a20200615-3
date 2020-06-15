<?php

/**
 * 苏宁开放平台接口 - 退货及退款API - 单笔查询退货信息
 *
 * $pack   suning.custom.singlerejected.get
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */
class SinglerejectedGetRequest extends SuningRequest {

	/**
	 * 订单号
	 */
	private $orderCode;

	public function setOrderCode($orderCode) {
		$this -> orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}

	public function getOrderCode() {
		return $this -> orderCode;
	}

	public function getApiMethodName() {
		return 'suning.custom.singlerejected.get';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this -> orderCode, 'orderCode');
	}
	
	public function getBizName(){
		return "singleGetRejected";
	}
}
?>