<?php
/**
 * 苏宁开放平台接口 - 商品退库预约信息批量查询
 *
 * @author suning
 * @date   2015-6-24
 */
class RefundAppointOrderQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 预约单状态。0 预约成功 1预约失败 2已取消 3已退库
	 */
	private $appointStatus;
	
	/**
	 * 退库类型。0 良品 1 不良品
	 */
	private $refundType;
	
	/**
	 * 仓库编码。100
	 */
	private $warehouseCode;
	
	/**
	 * 预约开始日期。2014-11-21
	 */
	private $appointStartDate;
	
	/**
	 * 预约结束日期。2014-11-21
	 */
	private $appointEndDate;
	
	/**
	 * 创建开始日期。2014-11-21
	 */
	private $createStartDate;
	
	/**
	 * 创建结束日期。2014-11-21
	 */
	private $createEndDate;
	
	
	
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
	
	public function getAppointStartDate() {
		return $this->appointStartDate;
	}
	
	public function setAppointStartDate($appointStartDate) {
		$this->appointStartDate = $appointStartDate;
		$this->apiParams["appointStartDate"] = $appointStartDate;
	}
	
	public function getAppointEndDate() {
		return $this->appointEndDate;
	}
	
	public function setAppointEndDate($appointEndDate) {
		$this->appointEndDate = $appointEndDate;
		$this->apiParams["appointEndDate"] = $appointEndDate;
	}
	
	public function getCreateStartDate() {
		return $this->createStartDate;
	}
	
	public function setCreateStartDate($createStartDate) {
		$this->createStartDate = $createStartDate;
		$this->apiParams["createStartDate"] = $createStartDate;
	}
	
	public function getCreateEndDate() {
		return $this->createEndDate;
	}
	
	public function setCreateEndDate($createEndDate) {
		$this->createEndDate = $createEndDate;
		$this->apiParams["createEndDate"] = $createEndDate;
	}
	
	public function getApiMethodName(){
		return 'suning.swl.refundappointorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryRefundAppointOrder";
	}
	
}

?>