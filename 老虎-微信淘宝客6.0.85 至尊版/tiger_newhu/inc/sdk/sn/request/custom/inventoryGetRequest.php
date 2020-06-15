<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-8-14
 */
class inventoryGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $isNeedLockQty;
	
	/**
	 * 
	 */
	private $productCode;
	
	public function getIsNeedLockQty() {
		return $this->isNeedLockQty;
	}
	
	public function setIsNeedLockQty($isNeedLockQty) {
		$this->isNeedLockQty = $isNeedLockQty;
		$this->apiParams["isNeedLockQty"] = $isNeedLockQty;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.newinventory.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "inventory";
	}
	
}

?>