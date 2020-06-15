<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class CommodityauditQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $auditStatus;
	
	/**
	 * 
	 */
	private $auditType;
	
	
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	public function getAuditStatus() {
		return $this->auditStatus;
	}
	
	public function setAuditStatus($auditStatus) {
		$this->auditStatus = $auditStatus;
		$this->apiParams["auditStatus"] = $auditStatus;
	}
	
	public function getAuditType() {
		return $this->auditType;
	}
	
	public function setAuditType($auditType) {
		$this->auditType = $auditType;
		$this->apiParams["auditType"] = $auditType;
	}
	
	
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.store.commodityaudit.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->auditStatus, 'auditStatus');
		RequestCheckUtil::checkNotNull($this->auditType, 'auditType');
	}
	
	public function getBizName(){
		return "queryCommodityaudit";
	}
	
}

?>