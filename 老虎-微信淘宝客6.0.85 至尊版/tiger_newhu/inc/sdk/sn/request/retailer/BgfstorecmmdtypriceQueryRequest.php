<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-17
 */
class BgfstorecmmdtypriceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $cmmdtyList;
	
	/**
	 * 
	 */
	private $snStoreCode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getCmmdtyList() {
		return $this->cmmdtyList;
	}
	
	public function setCmmdtyList($cmmdtyList) {
		$this->cmmdtyList = $cmmdtyList;
		$arr = array();
		foreach ($cmmdtyList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtyList"] = $arr;
	}
	
	public function getSnStoreCode() {
		return $this->snStoreCode;
	}
	
	public function setSnStoreCode($snStoreCode) {
		$this->snStoreCode = $snStoreCode;
		$this->apiParams["snStoreCode"] = $snStoreCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.bgfstorecmmdtyprice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->snStoreCode, 'snStoreCode');
	}
	
	public function getBizName(){
		return "queryBgfstorecmmdtyprice";
	}
	
}

class CmmdtyList {

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