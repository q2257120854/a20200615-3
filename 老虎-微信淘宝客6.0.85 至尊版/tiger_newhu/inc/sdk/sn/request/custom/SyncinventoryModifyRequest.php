<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-4-24
 */
class SyncinventoryModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $invCode;
	
	/**
	 * 
	 */
	private $invQty;
	
	/**
	 * 
	 */
	private $invType;
	
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
	
	public function getInvQty() {
		return $this->invQty;
	}
	
	public function setInvQty($invQty) {
		$this->invQty = $invQty;
		$this->apiParams["invQty"] = $invQty;
	}
	
	public function getInvType() {
		return $this->invType;
	}
	
	public function setInvType($invType) {
		$this->invType = $invType;
		$this->apiParams["invType"] = $invType;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.syncinventory.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->invCode, 'invCode');
		RequestCheckUtil::checkNotNull($this->invQty, 'invQty');
		RequestCheckUtil::checkNotNull($this->invType, 'invType');
	}
	
	public function getBizName(){
		return "modifySyncinventory";
	}
	
}

?>