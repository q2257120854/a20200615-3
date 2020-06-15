<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-23
 */
class OrderdepartureAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderDepartue;
	
	public function getOrderDepartue() {
		return $this->orderDepartue;
	}
	
	public function setOrderDepartue($orderDepartue) {
		$this->orderDepartue = $orderDepartue;
		$arr = array();
		foreach ($orderDepartue as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderDepartue"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.orderdeparture.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addOrderdeparture";
	}
	
}

class OrderDepartue {

	private $apiParams = array();
	
	private $arrivalTime;
	
	private $commodityCode;
	
	private $contacts;
	
	private $departureCode;
	
	private $departureCount;
	
	private $departurePlace;
	
	private $departureTime;
	
	private $destination;
	
	private $licensePlate;
	
	private $purchaseOrderItemNo;
	
	private $purchaseOrderNo;
	
	private $saleOrderCode;
	
	private $saleOrderItemCode;
	
	private $tel;
	
	public function getArrivalTime() {
		return $this->arrivalTime;
	}

	public function setArrivalTime($arrivalTime) {
		$this->arrivalTime = $arrivalTime;
		$this->apiParams["arrivalTime"] = $arrivalTime;
	}
	
	public function getCommodityCode() {
		return $this->commodityCode;
	}

	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
	}
	
	public function getContacts() {
		return $this->contacts;
	}

	public function setContacts($contacts) {
		$this->contacts = $contacts;
		$this->apiParams["contacts"] = $contacts;
	}
	
	public function getDepartureCode() {
		return $this->departureCode;
	}

	public function setDepartureCode($departureCode) {
		$this->departureCode = $departureCode;
		$this->apiParams["departureCode"] = $departureCode;
	}
	
	public function getDepartureCount() {
		return $this->departureCount;
	}

	public function setDepartureCount($departureCount) {
		$this->departureCount = $departureCount;
		$this->apiParams["departureCount"] = $departureCount;
	}
	
	public function getDeparturePlace() {
		return $this->departurePlace;
	}

	public function setDeparturePlace($departurePlace) {
		$this->departurePlace = $departurePlace;
		$this->apiParams["departurePlace"] = $departurePlace;
	}
	
	public function getDepartureTime() {
		return $this->departureTime;
	}

	public function setDepartureTime($departureTime) {
		$this->departureTime = $departureTime;
		$this->apiParams["departureTime"] = $departureTime;
	}
	
	public function getDestination() {
		return $this->destination;
	}

	public function setDestination($destination) {
		$this->destination = $destination;
		$this->apiParams["destination"] = $destination;
	}
	
	public function getLicensePlate() {
		return $this->licensePlate;
	}

	public function setLicensePlate($licensePlate) {
		$this->licensePlate = $licensePlate;
		$this->apiParams["licensePlate"] = $licensePlate;
	}
	
	public function getPurchaseOrderItemNo() {
		return $this->purchaseOrderItemNo;
	}

	public function setPurchaseOrderItemNo($purchaseOrderItemNo) {
		$this->purchaseOrderItemNo = $purchaseOrderItemNo;
		$this->apiParams["purchaseOrderItemNo"] = $purchaseOrderItemNo;
	}
	
	public function getPurchaseOrderNo() {
		return $this->purchaseOrderNo;
	}

	public function setPurchaseOrderNo($purchaseOrderNo) {
		$this->purchaseOrderNo = $purchaseOrderNo;
		$this->apiParams["purchaseOrderNo"] = $purchaseOrderNo;
	}
	
	public function getSaleOrderCode() {
		return $this->saleOrderCode;
	}

	public function setSaleOrderCode($saleOrderCode) {
		$this->saleOrderCode = $saleOrderCode;
		$this->apiParams["saleOrderCode"] = $saleOrderCode;
	}
	
	public function getSaleOrderItemCode() {
		return $this->saleOrderItemCode;
	}

	public function setSaleOrderItemCode($saleOrderItemCode) {
		$this->saleOrderItemCode = $saleOrderItemCode;
		$this->apiParams["saleOrderItemCode"] = $saleOrderItemCode;
	}
	
	public function getTel() {
		return $this->tel;
	}

	public function setTel($tel) {
		$this->tel = $tel;
		$this->apiParams["tel"] = $tel;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>