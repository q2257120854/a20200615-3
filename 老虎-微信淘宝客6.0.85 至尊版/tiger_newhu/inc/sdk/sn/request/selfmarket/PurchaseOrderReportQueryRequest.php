<?php
/**
 * 苏宁开放平台接口 - 获取采购订单报表
 *
 * @author suning
 * @date   2016-3-25
 */
class PurchaseOrderReportQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 采购订单编码。
	 */
	private $orderCode;
	
	/**
	 * 订单创建开始日期。查询采购订单的时间范围不超过30天。格式：yyyy-MM-dd
	 */
	private $startDate;
	
	/**
	 * 订单创建结束日期。查询采购订单的时间范围不超过30天。格式：yyyy-MM-dd
	 */
	private $endDate;
	
	/**
	 * 供应商编码。供应商代码。输入多个以英文逗号分隔，单个长度为8
	 */
	private $supplierCode;
	
	/**
	 * 订单类型。采购订单类型。NB：标准采购订单，ZNB1：特价机采购订单，ZNB2：包销定制机采购订单，ZNB3：样机采购订单，ZNB4：工程机采购订单，ZNB5：赠品机采购订单，ZZO：行政用外部采购订单，ZCS1：材料采购订单，ZCS2：配件采购订单，ZCS3：零星采购订单，ZCS5：售后低值易耗品采购订单，ZCSS：配件/材料采购订单，ZZR：工程物资采购订单，ZCSR：材料/配件退货订单
	 */
	private $orderType;
	
	
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getOrderType() {
		return $this->orderType;
	}
	
	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.purchaseorderreport.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryOrderReport";
	}
	
}

?>