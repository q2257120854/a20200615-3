<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class ProductinventoryModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $qty;
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getQty() {
		return $this->qty;
	}
	
	public function setQty($qty) {
		$this->qty = $qty;
		$this->apiParams["qty"] = $qty;
	}
	
	public function getApiMethodName(){
		return 'suning.store.productinventory.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
		RequestCheckUtil::checkNotNull($this->qty, 'qty');
	}
	
	public function getBizName(){
		return "modifyProductinventory";
	}
	
}

?>