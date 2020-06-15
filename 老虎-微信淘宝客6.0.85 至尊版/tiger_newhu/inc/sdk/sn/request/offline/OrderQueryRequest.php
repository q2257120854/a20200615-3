<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-4
 */
class OrderQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $memNo;
	
	/**
	 * 
	 */
	private $rtStoreCode;
	
	public function getMemNo() {
		return $this->memNo;
	}
	
	public function setMemNo($memNo) {
		$this->memNo = $memNo;
		$this->apiParams["memNo"] = $memNo;
	}
	
	public function getRtStoreCode() {
		return $this->rtStoreCode;
	}
	
	public function setRtStoreCode($rtStoreCode) {
		$this->rtStoreCode = $rtStoreCode;
		$this->apiParams["rtStoreCode"] = $rtStoreCode;
	}
	
	public function getApiMethodName(){
		return 'suning.offline.order.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->memNo, 'memNo');
		RequestCheckUtil::checkNotNull($this->rtStoreCode, 'rtStoreCode');
	}
	
	public function getBizName(){
		return "queryOrder";
	}
	
}

?>