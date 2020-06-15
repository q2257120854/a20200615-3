<?php
/**
 * 苏宁开放平台接口 - 订单评价批量查询
 *
 * @author suning
 * @date   2014-9-25
 */
class OrderevalQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 查询订单评价开始时间,格式:yyyy-MM-dd 若输入则开始时间和结束时间必须同时出现,如果时间不输入则默认查询当前时间往前三天的数据
	 */
	private $startTime;
	
	/**
	 * 查询订单评价结束时间,格式:yyyy-MM-dd 若输入则开始时间和结束时间必须同时出现,如果时间不输入则默认查询当前时间往前三天的数据
	 */
	private $endTime;
	
	/**
	 * 评价等级 0-全部,1-差评,2-中评,3-好评
	 */
	private $reviewLevel;
	
	/**
	 * 是否追评 0-全部,1-有追加评价,2-没有追加评价
	 */
	private $suplReviewFlag;
	
	/**
	 * 是否回复 0-全部,1-有回复,2-没有回复
	 */
	private $replyOrNot;
	
	/**
	 * 页码,默认值:1
	 */
	
	/**
	 * 每页条数 最大值:50 默认值:10
	 */
	
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
	
	public function getReviewLevel() {
		return $this->reviewLevel;
	}
	
	public function setReviewLevel($reviewLevel) {
		$this->reviewLevel = $reviewLevel;
		$this->apiParams["reviewLevel"] = $reviewLevel;
	}
	
	public function getSuplReviewFlag() {
		return $this->suplReviewFlag;
	}
	
	public function setSuplReviewFlag($suplReviewFlag) {
		$this->suplReviewFlag = $suplReviewFlag;
		$this->apiParams["suplReviewFlag"] = $suplReviewFlag;
	}
	
	public function getReplyOrNot() {
		return $this->replyOrNot;
	}
	
	public function setReplyOrNot($replyOrNot) {
		$this->replyOrNot = $replyOrNot;
		$this->apiParams["replyOrNot"] = $replyOrNot;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.custom.ordereval.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryOrderEval";
	}
	
}

?>