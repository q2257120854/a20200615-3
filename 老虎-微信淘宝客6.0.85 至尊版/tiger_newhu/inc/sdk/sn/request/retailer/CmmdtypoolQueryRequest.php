<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-7-29
 */
class CmmdtypoolQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $distributorCode;
	
	/**
	 * 
	 */
	private $pnumber;
	
	/**
	 * 
	 */
	private $psize;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getDistributorCode() {
		return $this->distributorCode;
	}
	
	public function setDistributorCode($distributorCode) {
		$this->distributorCode = $distributorCode;
		$this->apiParams["distributorCode"] = $distributorCode;
	}
	
	public function getPnumber() {
		return $this->pnumber;
	}
	
	public function setPnumber($pnumber) {
		$this->pnumber = $pnumber;
		$this->apiParams["pnumber"] = $pnumber;
	}
	
	public function getPsize() {
		return $this->psize;
	}
	
	public function setPsize($psize) {
		$this->psize = $psize;
		$this->apiParams["psize"] = $psize;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.cmmdtypool.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->pnumber, 'pnumber');
		RequestCheckUtil::checkNotNull($this->psize, 'psize');
	}
	
	public function getBizName(){
		return "queryCmmdtypool";
	}
	
}

?>