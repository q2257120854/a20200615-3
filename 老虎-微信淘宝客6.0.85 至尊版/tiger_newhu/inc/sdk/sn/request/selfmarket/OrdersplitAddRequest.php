<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-23
 */
class OrdersplitAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderSplit;
	
	public function getOrderSplit() {
		return $this->orderSplit;
	}
	
	public function setOrderSplit($orderSplit) {
		$this->orderSplit = $orderSplit;
		$arr = array();
		foreach ($orderSplit as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderSplit"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.ordersplit.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addOrdersplit";
	}
	
}

class OrderSplit {

	private $apiParams = array();
	
	private $commodityCode;
	
	private $count;
	
	private $locationCode;
	
	private $plantCode;
	
	private $prePurchaseItemNo;
	
	private $prePurchaseNo;
	
	private $purchasePlanItemNo;
	
	private $purchasePlanNo;
	
	public function getCommodityCode() {
		return $this->commodityCode;
	}

	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
	}
	
	public function getCount() {
		return $this->count;
	}

	public function setCount($count) {
		$this->count = $count;
		$this->apiParams["count"] = $count;
	}
	
	public function getLocationCode() {
		return $this->locationCode;
	}

	public function setLocationCode($locationCode) {
		$this->locationCode = $locationCode;
		$this->apiParams["locationCode"] = $locationCode;
	}
	
	public function getPlantCode() {
		return $this->plantCode;
	}

	public function setPlantCode($plantCode) {
		$this->plantCode = $plantCode;
		$this->apiParams["plantCode"] = $plantCode;
	}
	
	public function getPrePurchaseItemNo() {
		return $this->prePurchaseItemNo;
	}

	public function setPrePurchaseItemNo($prePurchaseItemNo) {
		$this->prePurchaseItemNo = $prePurchaseItemNo;
		$this->apiParams["prePurchaseItemNo"] = $prePurchaseItemNo;
	}
	
	public function getPrePurchaseNo() {
		return $this->prePurchaseNo;
	}

	public function setPrePurchaseNo($prePurchaseNo) {
		$this->prePurchaseNo = $prePurchaseNo;
		$this->apiParams["prePurchaseNo"] = $prePurchaseNo;
	}
	
	public function getPurchasePlanItemNo() {
		return $this->purchasePlanItemNo;
	}

	public function setPurchasePlanItemNo($purchasePlanItemNo) {
		$this->purchasePlanItemNo = $purchasePlanItemNo;
		$this->apiParams["purchasePlanItemNo"] = $purchasePlanItemNo;
	}
	
	public function getPurchasePlanNo() {
		return $this->purchasePlanNo;
	}

	public function setPurchasePlanNo($purchasePlanNo) {
		$this->purchasePlanNo = $purchasePlanNo;
		$this->apiParams["purchasePlanNo"] = $purchasePlanNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>