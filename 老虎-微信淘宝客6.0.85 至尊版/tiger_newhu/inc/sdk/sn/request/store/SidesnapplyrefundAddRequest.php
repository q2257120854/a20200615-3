<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SidesnapplyrefundAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $itemNoItems;
	
	/**
	 * 
	 */
	private $orderNo;
	
	/**
	 * 
	 */
	private $returnReasonCode;
	
	/**
	 * 
	 */
	private $returnReasonDesc;
	
	public function getItemNoItems() {
		return $this->itemNoItems;
	}
	
	public function setItemNoItems($itemNoItems) {
		$this->itemNoItems = $itemNoItems;
		$this->apiParams["itemNoItems"] = $itemNoItems->getApiParams();
	}
	
	public function getOrderNo() {
		return $this->orderNo;
	}
	
	public function setOrderNo($orderNo) {
		$this->orderNo = $orderNo;
		$this->apiParams["orderNo"] = $orderNo;
	}
	
	public function getReturnReasonCode() {
		return $this->returnReasonCode;
	}
	
	public function setReturnReasonCode($returnReasonCode) {
		$this->returnReasonCode = $returnReasonCode;
		$this->apiParams["returnReasonCode"] = $returnReasonCode;
	}
	
	public function getReturnReasonDesc() {
		return $this->returnReasonDesc;
	}
	
	public function setReturnReasonDesc($returnReasonDesc) {
		$this->returnReasonDesc = $returnReasonDesc;
		$this->apiParams["returnReasonDesc"] = $returnReasonDesc;
	}
	
	public function getApiMethodName(){
		return 'suning.store.sidesnapplyrefund.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderNo, 'orderNo');
		RequestCheckUtil::checkNotNull($this->returnReasonCode, 'returnReasonCode');
		RequestCheckUtil::checkNotNull($this->returnReasonDesc, 'returnReasonDesc');
	}
	
	public function getBizName(){
		return "addSidesnapplyrefund";
	}
	
}

class ItemNoItems {

	private $apiParams = array();
	
	private $itemNo;
	
	public function getItemNo() {
		return $this->itemNo;
	}

	public function setItemNo($itemNo) {
		$this->itemNo = $itemNo;
		$this->apiParams["itemNo"] = $itemNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>