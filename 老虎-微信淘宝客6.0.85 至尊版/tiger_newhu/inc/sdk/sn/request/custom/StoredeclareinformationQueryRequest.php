<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-9
 */
class StoredeclareinformationQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $packageOrderId;
	
	public function getPackageOrderId() {
		return $this->packageOrderId;
	}
	
	public function setPackageOrderId($packageOrderId) {
		$this->packageOrderId = $packageOrderId;
		$this->apiParams["packageOrderId"] = $packageOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.storedeclareinformation.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->packageOrderId, 'packageOrderId');
	}
	
	public function getBizName(){
		return "queryStoredeclareinformation";
	}
	
}

?>