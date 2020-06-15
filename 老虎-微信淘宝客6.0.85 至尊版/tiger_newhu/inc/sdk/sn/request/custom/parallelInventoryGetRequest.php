<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-28
 */
class parallelInventoryGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $invCode;
	
	/**
	 * 
	 */
	private $isNeedLockQty;
	
	/**
	 * 
	 */
	private $itemCode;
	
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
	
	public function getIsNeedLockQty() {
		return $this->isNeedLockQty;
	}
	
	public function setIsNeedLockQty($isNeedLockQty) {
		$this->isNeedLockQty = $isNeedLockQty;
		$this->apiParams["isNeedLockQty"] = $isNeedLockQty;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.parallelinventory.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->invCode, 'invCode');
	}
	
	public function getBizName(){
		return "parallelInventory";
	}
	
}

?>