<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-4-27
 */
class SingleinventoryGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $invCode;
	
	/**
	 * 
	 */
	private $productCode;
	
	public function getInvCode() {
		return $this->invCode;
	}
	
	public function setInvCode($invCode) {
		$this->invCode = $invCode;
		$this->apiParams["invCode"] = $invCode;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.singleinventory.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->invCode, 'invCode');
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "getSingleinventory";
	}
	
}

?>