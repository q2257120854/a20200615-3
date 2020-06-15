<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-17
 */
class StorehistoricalwordsDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $userCode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getUserCode() {
		return $this->userCode;
	}
	
	public function setUserCode($userCode) {
		$this->userCode = $userCode;
		$this->apiParams["userCode"] = $userCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.storehistoricalwords.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
		RequestCheckUtil::checkNotNull($this->userCode, 'userCode');
	}
	
	public function getBizName(){
		return "deleteStorehistoricalwords";
	}
	
}

?>