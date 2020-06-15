<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SnreturnorderinfoQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $endModified;
	
	/**
	 * 
	 */
	private $orderNo;
	
	
	
	/**
	 * 
	 */
	private $startModified;
	
	public function getEndModified() {
		return $this->endModified;
	}
	
	public function setEndModified($endModified) {
		$this->endModified = $endModified;
		$this->apiParams["endModified"] = $endModified;
	}
	
	public function getOrderNo() {
		return $this->orderNo;
	}
	
	public function setOrderNo($orderNo) {
		$this->orderNo = $orderNo;
		$this->apiParams["orderNo"] = $orderNo;
	}
	
	
	
	public function getStartModified() {
		return $this->startModified;
	}
	
	public function setStartModified($startModified) {
		$this->startModified = $startModified;
		$this->apiParams["startModified"] = $startModified;
	}
	
	public function getApiMethodName(){
		return 'suning.store.snreturnorderinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderNo, 'orderNo');
	}
	
	public function getBizName(){
		return "querySnreturnorderinfo";
	}
	
}

?>