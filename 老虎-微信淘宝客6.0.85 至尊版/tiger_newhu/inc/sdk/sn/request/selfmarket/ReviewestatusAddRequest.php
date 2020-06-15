<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-10-10
 */
class ReviewestatusAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $reviewestatus;
	
	public function getReviewestatus() {
		return $this->reviewestatus;
	}
	
	public function setReviewestatus($reviewestatus) {
		$this->reviewestatus = $reviewestatus;
		$arr = array();
		foreach ($reviewestatus as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["reviewestatus"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.reviewestatus.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addReviewestatus";
	}
	
}

class Reviewestatus {

	private $apiParams = array();
	
	private $actualDeliveryTime;
	
	private $arrivalDelayDays;
	
	private $arrivalWeek;
	
	private $atpPlanArrDate;
	
	private $atpPlanArrWeek;
	
	private $commArrTime;
	
	private $confirmSubTime;
	
	private $custReceiptDate;
	
	private $industyArrTime;
	
	private $industyTradeTime;
	
	private $latestArrTime;
	
	private $model;
	
	private $moneyAmount;
	
	private $notPassReasons;
	
	private $number;
	
	private $omsItemNo;
	
	private $omsOrderNo;
	
	private $orderSource;
	
	private $planArrTime;
	
	private $planDeliveryTime;
	
	private $purchaseOrderNo;
	
	private $purOrderItemNo;
	
	private $serviceCode;
	
	private $serviceName;
	
	private $signQuantity;
	
	private $state;
	
	private $statusOccurTime;
	
	private $trafficDelayDays;
	
	private $warehouseLocation;
	
	public function getActualDeliveryTime() {
		return $this->actualDeliveryTime;
	}

	public function setActualDeliveryTime($actualDeliveryTime) {
		$this->actualDeliveryTime = $actualDeliveryTime;
		$this->apiParams["actualDeliveryTime"] = $actualDeliveryTime;
	}
	
	public function getArrivalDelayDays() {
		return $this->arrivalDelayDays;
	}

	public function setArrivalDelayDays($arrivalDelayDays) {
		$this->arrivalDelayDays = $arrivalDelayDays;
		$this->apiParams["arrivalDelayDays"] = $arrivalDelayDays;
	}
	
	public function getArrivalWeek() {
		return $this->arrivalWeek;
	}

	public function setArrivalWeek($arrivalWeek) {
		$this->arrivalWeek = $arrivalWeek;
		$this->apiParams["arrivalWeek"] = $arrivalWeek;
	}
	
	public function getAtpPlanArrDate() {
		return $this->atpPlanArrDate;
	}

	public function setAtpPlanArrDate($atpPlanArrDate) {
		$this->atpPlanArrDate = $atpPlanArrDate;
		$this->apiParams["atpPlanArrDate"] = $atpPlanArrDate;
	}
	
	public function getAtpPlanArrWeek() {
		return $this->atpPlanArrWeek;
	}

	public function setAtpPlanArrWeek($atpPlanArrWeek) {
		$this->atpPlanArrWeek = $atpPlanArrWeek;
		$this->apiParams["atpPlanArrWeek"] = $atpPlanArrWeek;
	}
	
	public function getCommArrTime() {
		return $this->commArrTime;
	}

	public function setCommArrTime($commArrTime) {
		$this->commArrTime = $commArrTime;
		$this->apiParams["commArrTime"] = $commArrTime;
	}
	
	public function getConfirmSubTime() {
		return $this->confirmSubTime;
	}

	public function setConfirmSubTime($confirmSubTime) {
		$this->confirmSubTime = $confirmSubTime;
		$this->apiParams["confirmSubTime"] = $confirmSubTime;
	}
	
	public function getCustReceiptDate() {
		return $this->custReceiptDate;
	}

	public function setCustReceiptDate($custReceiptDate) {
		$this->custReceiptDate = $custReceiptDate;
		$this->apiParams["custReceiptDate"] = $custReceiptDate;
	}
	
	public function getIndustyArrTime() {
		return $this->industyArrTime;
	}

	public function setIndustyArrTime($industyArrTime) {
		$this->industyArrTime = $industyArrTime;
		$this->apiParams["industyArrTime"] = $industyArrTime;
	}
	
	public function getIndustyTradeTime() {
		return $this->industyTradeTime;
	}

	public function setIndustyTradeTime($industyTradeTime) {
		$this->industyTradeTime = $industyTradeTime;
		$this->apiParams["industyTradeTime"] = $industyTradeTime;
	}
	
	public function getLatestArrTime() {
		return $this->latestArrTime;
	}

	public function setLatestArrTime($latestArrTime) {
		$this->latestArrTime = $latestArrTime;
		$this->apiParams["latestArrTime"] = $latestArrTime;
	}
	
	public function getModel() {
		return $this->model;
	}

	public function setModel($model) {
		$this->model = $model;
		$this->apiParams["model"] = $model;
	}
	
	public function getMoneyAmount() {
		return $this->moneyAmount;
	}

	public function setMoneyAmount($moneyAmount) {
		$this->moneyAmount = $moneyAmount;
		$this->apiParams["moneyAmount"] = $moneyAmount;
	}
	
	public function getNotPassReasons() {
		return $this->notPassReasons;
	}

	public function setNotPassReasons($notPassReasons) {
		$this->notPassReasons = $notPassReasons;
		$this->apiParams["notPassReasons"] = $notPassReasons;
	}
	
	public function getNumber() {
		return $this->number;
	}

	public function setNumber($number) {
		$this->number = $number;
		$this->apiParams["number"] = $number;
	}
	
	public function getOmsItemNo() {
		return $this->omsItemNo;
	}

	public function setOmsItemNo($omsItemNo) {
		$this->omsItemNo = $omsItemNo;
		$this->apiParams["omsItemNo"] = $omsItemNo;
	}
	
	public function getOmsOrderNo() {
		return $this->omsOrderNo;
	}

	public function setOmsOrderNo($omsOrderNo) {
		$this->omsOrderNo = $omsOrderNo;
		$this->apiParams["omsOrderNo"] = $omsOrderNo;
	}
	
	public function getOrderSource() {
		return $this->orderSource;
	}

	public function setOrderSource($orderSource) {
		$this->orderSource = $orderSource;
		$this->apiParams["orderSource"] = $orderSource;
	}
	
	public function getPlanArrTime() {
		return $this->planArrTime;
	}

	public function setPlanArrTime($planArrTime) {
		$this->planArrTime = $planArrTime;
		$this->apiParams["planArrTime"] = $planArrTime;
	}
	
	public function getPlanDeliveryTime() {
		return $this->planDeliveryTime;
	}

	public function setPlanDeliveryTime($planDeliveryTime) {
		$this->planDeliveryTime = $planDeliveryTime;
		$this->apiParams["planDeliveryTime"] = $planDeliveryTime;
	}
	
	public function getPurchaseOrderNo() {
		return $this->purchaseOrderNo;
	}

	public function setPurchaseOrderNo($purchaseOrderNo) {
		$this->purchaseOrderNo = $purchaseOrderNo;
		$this->apiParams["purchaseOrderNo"] = $purchaseOrderNo;
	}
	
	public function getPurOrderItemNo() {
		return $this->purOrderItemNo;
	}

	public function setPurOrderItemNo($purOrderItemNo) {
		$this->purOrderItemNo = $purOrderItemNo;
		$this->apiParams["purOrderItemNo"] = $purOrderItemNo;
	}
	
	public function getServiceCode() {
		return $this->serviceCode;
	}

	public function setServiceCode($serviceCode) {
		$this->serviceCode = $serviceCode;
		$this->apiParams["serviceCode"] = $serviceCode;
	}
	
	public function getServiceName() {
		return $this->serviceName;
	}

	public function setServiceName($serviceName) {
		$this->serviceName = $serviceName;
		$this->apiParams["serviceName"] = $serviceName;
	}
	
	public function getSignQuantity() {
		return $this->signQuantity;
	}

	public function setSignQuantity($signQuantity) {
		$this->signQuantity = $signQuantity;
		$this->apiParams["signQuantity"] = $signQuantity;
	}
	
	public function getState() {
		return $this->state;
	}

	public function setState($state) {
		$this->state = $state;
		$this->apiParams["state"] = $state;
	}
	
	public function getStatusOccurTime() {
		return $this->statusOccurTime;
	}

	public function setStatusOccurTime($statusOccurTime) {
		$this->statusOccurTime = $statusOccurTime;
		$this->apiParams["statusOccurTime"] = $statusOccurTime;
	}
	
	public function getTrafficDelayDays() {
		return $this->trafficDelayDays;
	}

	public function setTrafficDelayDays($trafficDelayDays) {
		$this->trafficDelayDays = $trafficDelayDays;
		$this->apiParams["trafficDelayDays"] = $trafficDelayDays;
	}
	
	public function getWarehouseLocation() {
		return $this->warehouseLocation;
	}

	public function setWarehouseLocation($warehouseLocation) {
		$this->warehouseLocation = $warehouseLocation;
		$this->apiParams["warehouseLocation"] = $warehouseLocation;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>