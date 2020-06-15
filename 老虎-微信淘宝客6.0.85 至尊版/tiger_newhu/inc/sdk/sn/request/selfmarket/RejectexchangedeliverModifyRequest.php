<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-29
 */
class RejectexchangedeliverModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $exchangeNo;
	
	/**
	 * 
	 */
	private $expressCompanyName;
	
	/**
	 * 
	 */
	private $expressNo;
	
	/**
	 * 
	 */
	private $memo;
	
	/**
	 * 
	 */
	private $reasonAgreenCode;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getExchangeNo() {
		return $this->exchangeNo;
	}
	
	public function setExchangeNo($exchangeNo) {
		$this->exchangeNo = $exchangeNo;
		$this->apiParams["exchangeNo"] = $exchangeNo;
	}
	
	public function getExpressCompanyName() {
		return $this->expressCompanyName;
	}
	
	public function setExpressCompanyName($expressCompanyName) {
		$this->expressCompanyName = $expressCompanyName;
		$this->apiParams["expressCompanyName"] = $expressCompanyName;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}
	
	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getMemo() {
		return $this->memo;
	}
	
	public function setMemo($memo) {
		$this->memo = $memo;
		$this->apiParams["memo"] = $memo;
	}
	
	public function getReasonAgreenCode() {
		return $this->reasonAgreenCode;
	}
	
	public function setReasonAgreenCode($reasonAgreenCode) {
		$this->reasonAgreenCode = $reasonAgreenCode;
		$this->apiParams["reasonAgreenCode"] = $reasonAgreenCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.rejectexchangedeliver.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->exchangeNo, 'exchangeNo');
		RequestCheckUtil::checkNotNull($this->memo, 'memo');
		RequestCheckUtil::checkNotNull($this->reasonAgreenCode, 'reasonAgreenCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "modifyRejectexchangedeliver";
	}
	
}

?>