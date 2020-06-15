<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-2-20
 */
class QuerysingleexchangegoodsGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $omsOrderItemNo;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	/**
	 * 
	 */
	private $workordernum;
	
	public function getOmsOrderItemNo() {
		return $this->omsOrderItemNo;
	}
	
	public function setOmsOrderItemNo($omsOrderItemNo) {
		$this->omsOrderItemNo = $omsOrderItemNo;
		$this->apiParams["omsOrderItemNo"] = $omsOrderItemNo;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getWorkordernum() {
		return $this->workordernum;
	}
	
	public function setWorkordernum($workordernum) {
		$this->workordernum = $workordernum;
		$this->apiParams["workordernum"] = $workordernum;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.querysingleexchangegoods.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "getQuerysingleexchangegoods";
	}
	
}

?>