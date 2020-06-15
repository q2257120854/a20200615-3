<?php
/**
 * 苏宁开放平台接口 - 满减活动批量查询
 *
 * @author suning
 * @date   2014-10-16
 */
class QueryFullReductionRequest  extends SelectSuningRequest{
	
	/**
	 * 查询开始时间
	 */
	private $startTime;
	
	/**
	 * 查询结束时间
	 */
	private $endTime;
	
	/**
	 * 促销范围
	 */
	private $promotionRange;
	
	/**
	 * 活动状态状态
	 */
	private $statusCode;
	
	
	
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
	
	public function getPromotionRange() {
		return $this->promotionRange;
	}
	
	public function setPromotionRange($promotionRange) {
		$this->promotionRange = $promotionRange;
		$this->apiParams["promotionRange"] = $promotionRange;
	}
	
	public function getStatusCode() {
		return $this->statusCode;
	}
	
	public function setStatusCode($statusCode) {
		$this->statusCode = $statusCode;
		$this->apiParams["statusCode"] = $statusCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.fullreduction.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryFullReduction";
	}
	
}

?>