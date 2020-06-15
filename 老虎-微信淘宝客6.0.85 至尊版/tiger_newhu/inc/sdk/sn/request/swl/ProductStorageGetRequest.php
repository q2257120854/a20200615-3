<?php
/**
 * 苏宁开放平台接口 - 商品入库预约信息单笔查询
 *
 * @author suning
 * @date   2015-6-24
 */
class ProductStorageGetRequest  extends SuningRequest{
	
	/**
	 * 预约单号
	 */
	private $orderId;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getApiMethodName(){
		return 'suning.swl.productstorage.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "getProductStorage";
	}
	
}

?>