<?php
/**
 * 苏宁开放平台接口 - 商品退库预约信息批量查询
 *
 * @author suning
 * @date   2016-5-27
 */
class CelStorageSubQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 退库预约单状态。0 预约成功 1预约失败 2已取消 3已退库
	 */
	private $appointStatus;
	
	/**
	 * 退库类型。0代表良品；1代表不良品
	 */
	private $refundType;
	
	/**
	 * 仓库ID。预约的苏宁仓库ID，如果不输入则默认查询全部仓库的预约信息
	 */
	private $warehouseCode;
	
	/**
	 * 查询开始时间（预约退库）。查询开始时间（预约退库）
	 */
	private $appointStartTime;
	
	/**
	 * 查询结束时间（预约退库）。查询结束时间（预约退库）
	 */
	private $appointEndTime;
	
	/**
	 * 查询开始时间（退库预约创建时间）。查询开始时间（退库预约创建时间）
	 */
	private $startTime;
	
	/**
	 * 查询结束时间（退库预约创建时间）。查询结束时间（退库预约创建时间）
	 */
	private $endTime;
	
	
	
	public function getAppointStatus() {
		return $this->appointStatus;
	}
	
	public function setAppointStatus($appointStatus) {
		$this->appointStatus = $appointStatus;
		$this->apiParams["appointStatus"] = $appointStatus;
	}
	
	public function getRefundType() {
		return $this->refundType;
	}
	
	public function setRefundType($refundType) {
		$this->refundType = $refundType;
		$this->apiParams["refundType"] = $refundType;
	}
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}
	
	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getAppointStartTime() {
		return $this->appointStartTime;
	}
	
	public function setAppointStartTime($appointStartTime) {
		$this->appointStartTime = $appointStartTime;
		$this->apiParams["appointStartTime"] = $appointStartTime;
	}
	
	public function getAppointEndTime() {
		return $this->appointEndTime;
	}
	
	public function setAppointEndTime($appointEndTime) {
		$this->appointEndTime = $appointEndTime;
		$this->apiParams["appointEndTime"] = $appointEndTime;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.celstoragesub.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryCelStorageSub";
	}
	
}

?>