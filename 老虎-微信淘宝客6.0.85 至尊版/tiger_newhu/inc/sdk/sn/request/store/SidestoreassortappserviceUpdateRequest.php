<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SidestoreassortappserviceUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $operateType;
	
	/**
	 * 
	 */
	private $parentid;
	
	/**
	 * 
	 */
	private $protypeid;
	
	/**
	 * 
	 */
	private $ptname;
	
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
	
	public function getOperateType() {
		return $this->operateType;
	}
	
	public function setOperateType($operateType) {
		$this->operateType = $operateType;
		$this->apiParams["operateType"] = $operateType;
	}
	
	public function getParentid() {
		return $this->parentid;
	}
	
	public function setParentid($parentid) {
		$this->parentid = $parentid;
		$this->apiParams["parentid"] = $parentid;
	}
	
	public function getProtypeid() {
		return $this->protypeid;
	}
	
	public function setProtypeid($protypeid) {
		$this->protypeid = $protypeid;
		$this->apiParams["protypeid"] = $protypeid;
	}
	
	public function getPtname() {
		return $this->ptname;
	}
	
	public function setPtname($ptname) {
		$this->ptname = $ptname;
		$this->apiParams["ptname"] = $ptname;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.store.sidestoreassortappservice.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->operateType, 'operateType');
		RequestCheckUtil::checkNotNull($this->parentid, 'parentid');
	}
	
	public function getBizName(){
		return "updateSidestoreassortappservice";
	}
	
}

?>