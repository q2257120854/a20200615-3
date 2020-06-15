<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-6-26
 */
class AbnormalQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $abnormalCode;
	
	
	
	/**
	 * 
	 */
	private $saleStatus;
	
	/**
	 * 
	 */
	private $senario;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getAbnormalCode() {
		return $this->abnormalCode;
	}
	
	public function setAbnormalCode($abnormalCode) {
		$this->abnormalCode = $abnormalCode;
		$this->apiParams["abnormalCode"] = $abnormalCode;
	}
	
	
	
	public function getSaleStatus() {
		return $this->saleStatus;
	}
	
	public function setSaleStatus($saleStatus) {
		$this->saleStatus = $saleStatus;
		$this->apiParams["saleStatus"] = $saleStatus;
	}
	
	public function getSenario() {
		return $this->senario;
	}
	
	public function setSenario($senario) {
		$this->senario = $senario;
		$this->apiParams["senario"] = $senario;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.abnormal.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->abnormalCode, 'abnormalCode');
		RequestCheckUtil::checkNotNull($this->senario, 'senario');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryAbnormal";
	}
	
}

?>