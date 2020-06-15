<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-7-29
 */
class BtbordersnorderGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $outOrderNo;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getOutOrderNo() {
		return $this->outOrderNo;
	}
	
	public function setOutOrderNo($outOrderNo) {
		$this->outOrderNo = $outOrderNo;
		$this->apiParams["outOrderNo"] = $outOrderNo;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.btbordersnorder.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->outOrderNo, 'outOrderNo');
	}
	
	public function getBizName(){
		return "getBtbordersnorder";
	}
	
}

?>