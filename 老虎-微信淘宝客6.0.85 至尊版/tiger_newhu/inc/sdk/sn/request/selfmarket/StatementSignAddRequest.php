<?php
/**
 * 苏宁开放平台接口 - 结算清单签章
 *
 * @author suning
 * @date   2016-4-19
 */
class StatementSignAddRequest  extends SuningRequest{
	
	/**
	 * 供应商代码。
	 */
	private $supplierCode;
	
	/**
	 * 结算清单号。苏宁结算清单号, 通过获取结算清单号接口获取
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
	
	/**
	 * 结算清单html文档。结算清单html文档utf-8编码base64加密数据。可通过获取结算清单接口获取。
	 */
	private $html;
	
	/**
	 * 签章内容。
	 */
	private $signature;
	
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
	
	public function getHtml() {
		return $this->html;
	}
	
	public function setHtml($html) {
		$this->html = $html;
		$this->apiParams["html"] = $html;
	}
	
	public function getSignature() {
		return $this->signature;
	}
	
	public function setSignature($signature) {
		$this->signature = $signature;
		$this->apiParams["signature"] = $signature;
	}
	
	public function getApiMethodName(){
		return 'suning.statement.sign';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
		RequestCheckUtil::checkNotNull($this->statementCode, 'statementCode');
		RequestCheckUtil::checkNotNull($this->snCompany, 'snCompany');
		RequestCheckUtil::checkNotNull($this->html, 'html');
		RequestCheckUtil::checkNotNull($this->signature, 'signature');
	}
	
	public function getBizName(){
		return "signStatement";
	}
	
}

?>