<?php
/**
 * 苏宁开放平台接口 - 商品信息批量查询接口
 *
 * @author suning
 * @date   2016-8-15
 */
class ItemInfoQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 申请时间开始。格式为： yyyy-MM-dd HH:mm:ss
	 */
	private $startTime;
	
	/**
	 * 申请时间结束。格式为： yyyy-MM-dd HH:mm:ss
	 */
	private $endTime;
	
	
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.fourps.iteminfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryItemInfo";
	}
	
}

?>