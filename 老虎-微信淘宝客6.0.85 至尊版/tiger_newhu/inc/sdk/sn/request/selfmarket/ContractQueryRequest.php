<?php
/**
 * 苏宁开放平台接口 - 批量获取苏宁电子承兑合同
 *
 * @author suning
 * @date   2015-1-16
 */
class ContractQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 查询开始时间（合同开始时间）。查询合同开始时间(合同时间跨度不能大于30天)。格式:yyyy-MM-dd
	 */
	private $startTime;
	
	/**
	 * 查询结束时间（合同结束时间）。查询合同开始时间(合同时间跨度不能大于30天)。格式:yyyy-MM-dd
	 */
	private $endTime;
	
	/**
	 * 是否签章。签章状态 ：0-未签章，1-已签章，2-签章驳回
	 */
	private $isSign;
	
	/**
	 * 供应商编码。供应商编码，如果不填，则默认查询所有供应商编码下的数据，如果输入，有多个供应商编码，则英文逗号隔开
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
	
	public function getIsSign() {
		return $this->isSign;
	}
	
	public function setIsSign($isSign) {
		$this->isSign = $isSign;
		$this->apiParams["isSign"] = $isSign;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.selfmarket.contract.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
	}
	
	public function getBizName(){
		return "queryContract";
	}
	
}

?>