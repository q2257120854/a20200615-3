<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-9-27
 */
class ShopfavoritedGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $shopId;
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.shopfavorited.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
	}
	
	public function getBizName(){
		return "getShopfavorited";
	}
	
}

?>