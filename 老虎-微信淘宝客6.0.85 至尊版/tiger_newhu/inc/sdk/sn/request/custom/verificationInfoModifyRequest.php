<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-8
 */
class verificationInfoModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $eleCode;
	
	/**
	 * 
	 */
	private $codeType;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $storeName;
	
	public function getEleCode() {
		return $this->eleCode;
	}
	
	public function setEleCode($eleCode) {
		$this->eleCode = $eleCode;
		$this->apiParams["eleCode"] = $eleCode;
	}
	
	public function getCodeType() {
		return $this->codeType;
	}
	
	public function setCodeType($codeType) {
		$this->codeType = $codeType;
		$this->apiParams["codeType"] = $codeType;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getStoreName() {
		return $this->storeName;
	}
	
	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->apiParams["storeName"] = $storeName;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.code.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->eleCode, 'eleCode');
		RequestCheckUtil::checkNotNull($this->codeType, 'codeType');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
		RequestCheckUtil::checkNotNull($this->storeName, 'storeName');
	}
	
	public function getBizName(){
		return "verificationInfo";
	}
	
}

?>