<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-6-28
 */
class SforderresenderAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $mailNo;
	
	/**
	 * 
	 */
	private $orderNo;
	
	public function getMailNo() {
		return $this->mailNo;
	}
	
	public function setMailNo($mailNo) {
		$this->mailNo = $mailNo;
		$this->apiParams["mailNo"] = $mailNo;
	}
	
	public function getOrderNo() {
		return $this->orderNo;
	}
	
	public function setOrderNo($orderNo) {
		$this->orderNo = $orderNo;
		$this->apiParams["orderNo"] = $orderNo;
	}
	
	public function getApiMethodName(){
		return 'suning.logistics.sforderresender.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->mailNo, 'mailNo');
		RequestCheckUtil::checkNotNull($this->orderNo, 'orderNo');
	}
	
	public function getBizName(){
		return "addSforderresender";
	}
	
}

?>