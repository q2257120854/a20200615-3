<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-11-16
 */
class SalesstatusModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $physicalCode;
	
	/**
	 * 
	 */
	private $salesStatus;
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getPhysicalCode() {
		return $this->physicalCode;
	}
	
	public function setPhysicalCode($physicalCode) {
		$this->physicalCode = $physicalCode;
		$this->apiParams["physicalCode"] = $physicalCode;
	}
	
	public function getSalesStatus() {
		return $this->salesStatus;
	}
	
	public function setSalesStatus($salesStatus) {
		$this->salesStatus = $salesStatus;
		$this->apiParams["salesStatus"] = $salesStatus;
	}
	
	public function getApiMethodName(){
		return 'suning.oto.salesstatus.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
		RequestCheckUtil::checkNotNull($this->physicalCode, 'physicalCode');
		RequestCheckUtil::checkNotNull($this->salesStatus, 'salesStatus');
	}
	
	public function getBizName(){
		return "modifySalesstatus";
	}
	
}

?>