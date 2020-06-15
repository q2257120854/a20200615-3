<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-17
 */
class CmmdtybarcodeinfoGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $barcode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getBarcode() {
		return $this->barcode;
	}
	
	public function setBarcode($barcode) {
		$this->barcode = $barcode;
		$this->apiParams["barcode"] = $barcode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.cmmdtybarcodeinfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->barcode, 'barcode');
	}
	
	public function getBizName(){
		return "getCmmdtybarcodeinfo";
	}
	
}

?>