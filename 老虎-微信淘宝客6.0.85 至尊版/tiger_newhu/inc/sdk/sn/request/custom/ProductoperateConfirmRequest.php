<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-15
 */
class ProductoperateConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $partnumber;
	
	/**
	 * 
	 */
	private $shopId;
	
	/**
	 * 
	 */
	private $custNum;
	
	public function getPartnumber() {
		return $this->partnumber;
	}
	
	public function setPartnumber($partnumber) {
		$this->partnumber = $partnumber;
		$this->apiParams["partnumber"] = $partnumber;
	}
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.productoperate.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->partnumber, 'partnumber');
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
	}
	
	public function getBizName(){
		return "confirmProductoperate";
	}
	
}

?>