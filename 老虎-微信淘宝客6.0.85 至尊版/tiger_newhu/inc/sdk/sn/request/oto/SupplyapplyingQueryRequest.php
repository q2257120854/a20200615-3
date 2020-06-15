<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-11-16
 */
class SupplyapplyingQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $physicalCode;
	
	/**
	 * 
	 */
	private $applyStatus;
	
	/**
	 * 
	 */
	private $productName;
	
	
	
	public function getPhysicalCode() {
		return $this->physicalCode;
	}
	
	public function setPhysicalCode($physicalCode) {
		$this->physicalCode = $physicalCode;
		$this->apiParams["physicalCode"] = $physicalCode;
	}
	
	public function getApplyStatus() {
		return $this->applyStatus;
	}
	
	public function setApplyStatus($applyStatus) {
		$this->applyStatus = $applyStatus;
		$this->apiParams["applyStatus"] = $applyStatus;
	}
	
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getApiMethodName(){
		return 'suning.oto.supplyapplying.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->physicalCode, 'physicalCode');
		RequestCheckUtil::checkNotNull($this->applyStatus, 'applyStatus');
	}
	
	public function getBizName(){
		return "querySupplyapplying";
	}
	
}

?>