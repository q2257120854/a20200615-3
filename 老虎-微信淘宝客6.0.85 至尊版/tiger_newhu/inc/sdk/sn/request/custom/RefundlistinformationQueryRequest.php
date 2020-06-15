<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class RefundlistinformationQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $endModified;
	
	
	
	/**
	 * 
	 */
	private $returnStatus;
	
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
	
	
	
	public function getReturnStatus() {
		return $this->returnStatus;
	}
	
	public function setReturnStatus($returnStatus) {
		$this->returnStatus = $returnStatus;
		$this->apiParams["returnStatus"] = $returnStatus;
	}
	
	public function getStartModified() {
		return $this->startModified;
	}
	
	public function setStartModified($startModified) {
		$this->startModified = $startModified;
		$this->apiParams["startModified"] = $startModified;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.refundlistinformation.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->endModified, 'endModified');
		RequestCheckUtil::checkNotNull($this->startModified, 'startModified');
	}
	
	public function getBizName(){
		return "queryRefundlistinformation";
	}
	
}

?>