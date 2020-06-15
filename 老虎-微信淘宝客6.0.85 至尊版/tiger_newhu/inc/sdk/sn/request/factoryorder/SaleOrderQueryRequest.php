<?php
/**
 * 苏宁开放平台接口 - 批量获取销售订单
 *
 * @author suning
 * @date   2016-4-19
 */
class SaleOrderQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 交易创建起始时间。查询交易创建开始时间。格式： yyyy-MM-dd HH:mm:ss
	 */
	private $startTime;
	
	/**
	 * 交易创建结束时间。查询交易创建结束时间。格式： yyyy-MM-dd HH:mm:ss
	 */
	private $endTime;
	
	
	
	/**
	 * 订单状态。订单待发货10、订单不能满足20、订单延迟发货30、厂家已发货40、厂家确认顾客已收货45、顾客已收货50、单证已寄票60、顾客已收票70
	 */
	private $state;
	
	/**
	 * 供应商编码。
	 */
	private $supplierCode;
	
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
	
	
	
	public function getState() {
		return $this->state;
	}
	
	public function setState($state) {
		$this->state = $state;
		$this->apiParams["state"] = $state;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.saleorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "querySaleOrder";
	}
	
}

?>