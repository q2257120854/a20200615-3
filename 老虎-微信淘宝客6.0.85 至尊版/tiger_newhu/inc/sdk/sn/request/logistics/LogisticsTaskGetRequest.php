<?php
/**
 * 苏宁开放平台接口 - 获取苏宁物流任务派发信息 
 *
 * @author suning
 * @date   2014-8-22
 */
class LogisticsTaskGetRequest  extends SuningRequest{
	
	/**
	 * 提货单号
	 */
	private $ladingBill;
	
	public function getLadingBill() {
		return $this->ladingBill;
	}
	
	public function setLadingBill($ladingBill) {
		$this->ladingBill = $ladingBill;
		$this->apiParams["ladingBill"] = $ladingBill;
	}
	
	public function getApiMethodName(){
		return 'suning.logistics.task.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->ladingBill, 'ladingBill');
	}
	
	public function getBizName(){
		return "getLogisticsTask";
	}
	
}

?>