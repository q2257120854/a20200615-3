<?php
/**
 * 苏宁开放平台接口 - 订单评价批量查询（三个月前）
 *
 * @author suning
 * @date   2016-5-4
 */
class HisOrderEvaluateQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 评价等级。商品评价等级 0-全部,1-差评,2-中评,3-好评
	 */
	private $evaluateLevel;
	
	/**
	 * 查询开始时间。查询订单评价开始时间。格式:yyyy-MM-dd若输入则开始时间和结束时间必须同时出现
	 */
	private $startTime;
	
	/**
	 * 查询结束时间。查询订单评价结束时间。格式:yyyy-MM-dd若输入则开始时间和结束时间必须同时出现
	 */
	private $endTime;
	
	/**
	 * 是否追评。0-无 1-有 不填写表示查询全部
	 */
	private $isAddComments;
	
	/**
	 * 是否回复。0-无 1-有 不填写表示查询全部
	 */
	private $isReply;
	
	
	
	public function getEvaluateLevel() {
		return $this->evaluateLevel;
	}
	
	public function setEvaluateLevel($evaluateLevel) {
		$this->evaluateLevel = $evaluateLevel;
		$this->apiParams["evaluateLevel"] = $evaluateLevel;
	}
	
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
	
	public function getIsAddComments() {
		return $this->isAddComments;
	}
	
	public function setIsAddComments($isAddComments) {
		$this->isAddComments = $isAddComments;
		$this->apiParams["isAddComments"] = $isAddComments;
	}
	
	public function getIsReply() {
		return $this->isReply;
	}
	
	public function setIsReply($isReply) {
		$this->isReply = $isReply;
		$this->apiParams["isReply"] = $isReply;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.custom.hisorderevaluate.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
	}
	
	public function getBizName(){
		return "queryHisOrderEvaluate";
	}
	
}

?>