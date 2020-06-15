<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class ProductoperateDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $partnumber;
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $shopId;
	
	public function getPartnumber() {
		return $this->partnumber;
	}
	
	public function setPartnumber($partnumber) {
		$this->partnumber = $partnumber;
		$this->apiParams["partnumber"] = $partnumber;
	}
	
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
		return 'suning.custom.productoperate.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->partnumber, 'partnumber');
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
	}
	
	public function getBizName(){
		return "deleteProductoperate";
	}
	
}

?>