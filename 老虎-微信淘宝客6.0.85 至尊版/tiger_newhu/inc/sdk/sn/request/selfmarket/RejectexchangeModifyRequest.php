<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-29
 */
class RejectexchangeModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $exchangeNo;
	
	/**
	 * 
	 */
	private $memo;
	
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
	
	public function getMemo() {
		return $this->memo;
	}
	
	public function setMemo($memo) {
		$this->memo = $memo;
		$this->apiParams["memo"] = $memo;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.rejectexchange.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->exchangeNo, 'exchangeNo');
		RequestCheckUtil::checkNotNull($this->memo, 'memo');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "modifyRejectexchange";
	}
	
}

?>