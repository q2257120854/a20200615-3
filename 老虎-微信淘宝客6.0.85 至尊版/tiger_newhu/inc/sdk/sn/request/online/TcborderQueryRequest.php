<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-4-9
 */
class TcborderQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderNo;
	
	public function getOrderNo() {
		return $this->orderNo;
	}
	
	public function setOrderNo($orderNo) {
		$this->orderNo = $orderNo;
		$this->apiParams["orderNo"] = $orderNo;
	}
	
	public function getApiMethodName(){
		return 'suning.online.tcborderquery.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderNo, 'orderNo');
	}
	
	public function getBizName(){
		return "queryTcborderquery";
	}
	
}

?>