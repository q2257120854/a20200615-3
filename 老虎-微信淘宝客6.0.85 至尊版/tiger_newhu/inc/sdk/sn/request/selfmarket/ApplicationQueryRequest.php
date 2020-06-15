<?php
/**
 * 苏宁开放平台接口 - 函件查询
 *
 * @author suning
 * @date   2016-4-19
 */
class ApplicationQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 供应商编码。供应商编码。
	 */
	private $supplierCode;
	
	/**
	 * 苏宁公司代码。苏宁公司代码。
	 */
	private $snCode;
	
	/**
	 * 供应商函件编号。供应商活动函、确认函、协议编号。
	 */
	private $applicationCode;
	
	/**
	 * 申请日期开始日期。申请日期开始时间。格式：yyyy-MM-dd。
	 */
	private $startDate;
	
	/**
	 * 申请日期结束日期。申请日期结束时间。格式：yyyy-MM-dd。
	 */
	private $endDate;
	
	/**
	 * 活动函类型。20-word，31-经营活动函，32-投款折让确认函，34-服务促销协议，35-展销展示广告位使用协议，36-销售补差确认函，37-商业折让对账单，38-优惠单活动函。
	 */
	private $applyModel;
	
	
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getSnCode() {
		return $this->snCode;
	}
	
	public function setSnCode($snCode) {
		$this->snCode = $snCode;
		$this->apiParams["snCode"] = $snCode;
	}
	
	public function getApplicationCode() {
		return $this->applicationCode;
	}
	
	public function setApplicationCode($applicationCode) {
		$this->applicationCode = $applicationCode;
		$this->apiParams["applicationCode"] = $applicationCode;
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
	
	public function getApplyModel() {
		return $this->applyModel;
	}
	
	public function setApplyModel($applyModel) {
		$this->applyModel = $applyModel;
		$this->apiParams["applyModel"] = $applyModel;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.application.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryApplication";
	}
	
}

?>