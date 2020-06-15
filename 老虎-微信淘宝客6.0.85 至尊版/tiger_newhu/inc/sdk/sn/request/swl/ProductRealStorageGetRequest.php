<?php
/**
 * 苏宁开放平台接口 - 商品实际入库信息查询
 *
 * @author suning
 * @date   2016-10-10
 */
class ProductRealStorageGetRequest  extends SuningRequest{
	
	/**
	 * 预约单号。入库预约单号
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
		return 'suning.swl.productrealstorage.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "getProductRealStorage";
	}
	
}

?>