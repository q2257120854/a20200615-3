<?php
/**
 * 苏宁开放平台接口 - 获取结算清单
 *
 * @author suning
 * @date   2016-4-19
 */
class StatementHtmlGetRequest  extends SuningRequest{
	
	/**
	 * 供应商编码。
	 */
	private $supplierCode;
	
	/**
	 * 结算清单号。
	 */
	private $statementCode;
	
	/**
	 * 苏宁大区代码。
	 */
	private $snArea;
	
	/**
	 * 苏宁公司代码。
	 */
	private $snCompany;
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getStatementCode() {
		return $this->statementCode;
	}
	
	public function setStatementCode($statementCode) {
		$this->statementCode = $statementCode;
		$this->apiParams["statementCode"] = $statementCode;
	}
	
	public function getSnArea() {
		return $this->snArea;
	}
	
	public function setSnArea($snArea) {
		$this->snArea = $snArea;
		$this->apiParams["snArea"] = $snArea;
	}
	
	public function getSnCompany() {
		return $this->snCompany;
	}
	
	public function setSnCompany($snCompany) {
		$this->snCompany = $snCompany;
		$this->apiParams["snCompany"] = $snCompany;
	}
	
	public function getApiMethodName(){
		return 'suning.statementhtml.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
		RequestCheckUtil::checkNotNull($this->statementCode, 'statementCode');
		RequestCheckUtil::checkNotNull($this->snCompany, 'snCompany');
	}
	
	public function getBizName(){
		return "getStatementHtml";
	}
	
}

?>