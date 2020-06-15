<?php
/**
 * 苏宁开放平台接口 - 新增苏宁物流任务作业状态反馈
 *
 * @author suning
 * @date   2014-8-22
 */
class LogisticsTaskStatusAddRequest  extends SuningRequest{
	
	/**
	 * 苏宁物流订单号
	 */
	private $logisticOrderId;
	
	/**
	 * 苏宁运单号
	 */
	private $logisticExpressId;
	
	/**
	 * 物流站点
	 */
	private $logisticStation;
	
	/**
	 * 状态编码
	 */
	private $state;
	
	/**
	 * 完成日期
	 */
	private $finishedDate;
	
	/**
	 * 完成时间
	 */
	private $finishedTime;
	
	/**
	 * 签收人
	 */
	private $consignee;
	
	/**
	 * 作业人员
	 */
	private $operator;
	
	/**
	 * 联系方式
	 */
	private $telNumber;
	
	/**
	 * 运输包装号
	 */
	private $shipmentCode;
	
	/**
	 * 运输包装重量
	 */
	private $weight;
	
	/**
	 * 重量单位
	 */
	private $weightUnit;
	
	/**
	 * 重量单位
	 */
	private $note;
	
	/**
	 * 航空主单号
	 */
	private $airwayBillNo;
	
	/**
	 * 航期
	 */
	private $flightDate;
	
	/**
	 * 航班号
	 */
	private $flightNo;
	
	public function getLogisticOrderId() {
		return $this->logisticOrderId;
	}
	
	public function setLogisticOrderId($logisticOrderId) {
		$this->logisticOrderId = $logisticOrderId;
		$this->apiParams["logisticOrderId"] = $logisticOrderId;
	}
	
	public function getLogisticExpressId() {
		return $this->logisticExpressId;
	}
	
	public function setLogisticExpressId($logisticExpressId) {
		$this->logisticExpressId = $logisticExpressId;
		$this->apiParams["logisticExpressId"] = $logisticExpressId;
	}
	
	public function getLogisticStation() {
		return $this->logisticStation;
	}
	
	public function setLogisticStation($logisticStation) {
		$this->logisticStation = $logisticStation;
		$this->apiParams["logisticStation"] = $logisticStation;
	}
	
	public function getState() {
		return $this->state;
	}
	
	public function setState($state) {
		$this->state = $state;
		$this->apiParams["state"] = $state;
	}
	
	public function getFinishedDate() {
		return $this->finishedDate;
	}
	
	public function setFinishedDate($finishedDate) {
		$this->finishedDate = $finishedDate;
		$this->apiParams["finishedDate"] = $finishedDate;
	}
	
	public function getFinishedTime() {
		return $this->finishedTime;
	}
	
	public function setFinishedTime($finishedTime) {
		$this->finishedTime = $finishedTime;
		$this->apiParams["finishedTime"] = $finishedTime;
	}
	
	public function getConsignee() {
		return $this->consignee;
	}
	
	public function setConsignee($consignee) {
		$this->consignee = $consignee;
		$this->apiParams["consignee"] = $consignee;
	}
	
	public function getOperator() {
		return $this->operator;
	}
	
	public function setOperator($operator) {
		$this->operator = $operator;
		$this->apiParams["operator"] = $operator;
	}
	
	public function getTelNumber() {
		return $this->telNumber;
	}
	
	public function setTelNumber($telNumber) {
		$this->telNumber = $telNumber;
		$this->apiParams["telNumber"] = $telNumber;
	}
	
	public function getShipmentCode() {
		return $this->shipmentCode;
	}
	
	public function setShipmentCode($shipmentCode) {
		$this->shipmentCode = $shipmentCode;
		$this->apiParams["shipmentCode"] = $shipmentCode;
	}
	
	public function getWeight() {
		return $this->weight;
	}
	
	public function setWeight($weight) {
		$this->weight = $weight;
		$this->apiParams["weight"] = $weight;
	}
	
	public function getWeightUnit() {
		return $this->weightUnit;
	}
	
	public function setWeightUnit($weightUnit) {
		$this->weightUnit = $weightUnit;
		$this->apiParams["weightUnit"] = $weightUnit;
	}
	
	public function getNote() {
		return $this->note;
	}
	
	public function setNote($note) {
		$this->note = $note;
		$this->apiParams["note"] = $note;
	}
	
	public function getAirwayBillNo() {
		return $this->airwayBillNo;
	}
	
	public function setAirwayBillNo($airwayBillNo) {
		$this->airwayBillNo = $airwayBillNo;
		$this->apiParams["airwayBillNo"] = $airwayBillNo;
	}
	
	public function getFlightDate() {
		return $this->flightDate;
	}
	
	public function setFlightDate($flightDate) {
		$this->flightDate = $flightDate;
		$this->apiParams["flightDate"] = $flightDate;
	}
	
	public function getFlightNo() {
		return $this->flightNo;
	}
	
	public function setFlightNo($flightNo) {
		$this->flightNo = $flightNo;
		$this->apiParams["flightNo"] = $flightNo;
	}
	
	public function getApiMethodName(){
		return 'suning.logistics.taskstatusfeedback.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->logisticOrderId, 'logisticOrderId');
		RequestCheckUtil::checkNotNull($this->logisticExpressId, 'logisticExpressId');
		RequestCheckUtil::checkNotNull($this->logisticStation, 'logisticStation');
		RequestCheckUtil::checkNotNull($this->state, 'state');
		RequestCheckUtil::checkNotNull($this->finishedDate, 'finishedDate');
		RequestCheckUtil::checkNotNull($this->finishedTime, 'finishedTime');
		RequestCheckUtil::checkNotNull($this->consignee, 'consignee');
		RequestCheckUtil::checkNotNull($this->operator, 'operator');
		RequestCheckUtil::checkNotNull($this->telNumber, 'telNumber');
		RequestCheckUtil::checkNotNull($this->shipmentCode, 'shipmentCode');
		RequestCheckUtil::checkNotNull($this->weight, 'weight');
		RequestCheckUtil::checkNotNull($this->weightUnit, 'weightUnit');
		RequestCheckUtil::checkNotNull($this->note, 'note');
		RequestCheckUtil::checkNotNull($this->airwayBillNo, 'airwayBillNo');
		RequestCheckUtil::checkNotNull($this->flightDate, 'flightDate');
		RequestCheckUtil::checkNotNull($this->flightNo, 'flightNo');
	}
	
	public function getBizName(){
		return "addLogisticsTaskStatus";
	}
	
}

?>