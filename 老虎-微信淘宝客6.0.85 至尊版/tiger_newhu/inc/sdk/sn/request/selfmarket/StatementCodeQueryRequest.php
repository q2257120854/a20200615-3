<?php
/**
 * 苏宁开放平台接口 - 获取结算清单号
 *
 * @author suning
 * @date   2016-4-19
 */
class StatementCodeQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 出单日期开始时间。查询出单日期开始时间。格式：yyyy-MM-dd
	 */
	private $createTimeStart;
	
	/**
	 * 出单日期结束时间。查询出单日期结束时间。格式：yyyy-MM-dd
	 */
	private $createTimeEnd;
	
	/**
	 * 供应商编码。
	 */
	private $supplierCode;
	
	/**
	 * 操作模式。
	 */
	private $operaType;
	
	/**
	 * 是否签章。是否已进行签章。
	 */
	private $isSing;
	
	/**
	 * 是否成功。签章是否成功。
	 */
	private $isSuccess;
	
	
	
	public function getCreateTimeStart() {
		return $this->createTimeStart;
	}
	
	public function setCreateTimeStart($createTimeStart) {
		$this->createTimeStart = $createTimeStart;
		$this->apiParams["createTimeStart"] = $createTimeStart;
	}
	
	public function getCreateTimeEnd() {
		return $this->createTimeEnd;
	}
	
	public function setCreateTimeEnd($createTimeEnd) {
		$this->createTimeEnd = $createTimeEnd;
		$this->apiParams["createTimeEnd"] = $createTimeEnd;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getOperaType() {
		return $this->operaType;
	}
	
	public function setOperaType($operaType) {
		$this->operaType = $operaType;
		$this->apiParams["operaType"] = $operaType;
	}
	
	public function getIsSing() {
		return $this->isSing;
	}
	
	public function setIsSing($isSing) {
		$this->isSing = $isSing;
		$this->apiParams["isSing"] = $isSing;
	}
	
	public function getIsSuccess() {
		return $this->isSuccess;
	}
	
	public function setIsSuccess($isSuccess) {
		$this->isSuccess = $isSuccess;
		$this->apiParams["isSuccess"] = $isSuccess;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.statementcode.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->createTimeStart, 'createTimeStart');
		RequestCheckUtil::checkNotNull($this->createTimeEnd, 'createTimeEnd');
	}
	
	public function getBizName(){
		return "queryStatementCode";
	}
	
}

?>