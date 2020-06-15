<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-2-20
 */
class ExchangepackageModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $exchangeNo;
	
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
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.exchangepackage.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->exchangeNo, 'exchangeNo');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "modifyExchangepackage";
	}
	
}

?>