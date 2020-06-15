<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-8-14
 */
class ShelvesAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cmmdtyCodes;
	
	/**
	 * 
	 */
	private $saleStatus;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getCmmdtyCodes() {
		return $this->cmmdtyCodes;
	}
	
	public function setCmmdtyCodes($cmmdtyCodes) {
		$this->cmmdtyCodes = $cmmdtyCodes;
		$arr = array();
		foreach ($cmmdtyCodes as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtyCodes"] = $arr;
	}
	
	public function getSaleStatus() {
		return $this->saleStatus;
	}
	
	public function setSaleStatus($saleStatus) {
		$this->saleStatus = $saleStatus;
		$this->apiParams["saleStatus"] = $saleStatus;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.restura.shelves.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->saleStatus, 'saleStatus');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "addShelves";
	}
	
}

class CmmdtyCodes {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>