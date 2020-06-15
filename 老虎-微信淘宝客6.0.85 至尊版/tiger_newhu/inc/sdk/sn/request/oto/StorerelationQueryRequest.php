<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-24
 */
class StorerelationQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $groupCode;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getGroupCode() {
		return $this->groupCode;
	}
	
	public function setGroupCode($groupCode) {
		$this->groupCode = $groupCode;
		$this->apiParams["groupCode"] = $groupCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.oto.storerelation.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->groupCode, 'groupCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryStorerelation";
	}
	
}

?>