<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-11-29
 */
class OrderpackageAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderPackage;
	
	public function getOrderPackage() {
		return $this->orderPackage;
	}
	
	public function setOrderPackage($orderPackage) {
		$this->orderPackage = $orderPackage;
		$arr = array();
		foreach ($orderPackage as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderPackage"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.orderpackage.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addOrderpackage";
	}
	
}

class OrderPackage {

	private $apiParams = array();
	
	private $expressCompCode;
	
	private $expressCompName;
	
	private $expressNo;
	
	private $purchaseOrderCode;
	
	public function getExpressCompCode() {
		return $this->expressCompCode;
	}

	public function setExpressCompCode($expressCompCode) {
		$this->expressCompCode = $expressCompCode;
		$this->apiParams["expressCompCode"] = $expressCompCode;
	}
	
	public function getExpressCompName() {
		return $this->expressCompName;
	}

	public function setExpressCompName($expressCompName) {
		$this->expressCompName = $expressCompName;
		$this->apiParams["expressCompName"] = $expressCompName;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}

	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getPurchaseOrderCode() {
		return $this->purchaseOrderCode;
	}

	public function setPurchaseOrderCode($purchaseOrderCode) {
		$this->purchaseOrderCode = $purchaseOrderCode;
		$this->apiParams["purchaseOrderCode"] = $purchaseOrderCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>