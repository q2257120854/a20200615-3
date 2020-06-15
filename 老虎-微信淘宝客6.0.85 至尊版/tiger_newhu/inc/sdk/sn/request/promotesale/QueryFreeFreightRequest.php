<?php
/**
 * 苏宁开放平台接口 - 免运费活动批量查询
 *
 * @author suning
 * @date   2014-10-16
 */
class QueryFreeFreightRequest  extends SelectSuningRequest{
	
	/**
	 * 促销范围代码
	 */
	private $promotionRangeCode;
	
	/**
	 * 查询开始时间
	 */
	private $startTime;
	
	/**
	 * 查询结束时间
	 */
	private $endTime;
	
	/**
	 * 活动状态编码
	 */
	private $acStatusCode;
	
	public function getPromotionRangeCode() {
		return $this->promotionRangeCode;
	}
	
	public function setPromotionRangeCode($promotionRangeCode) {
		$this->promotionRangeCode = $promotionRangeCode;
		$this->apiParams["promotionRangeCode"] = $promotionRangeCode;
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
	
	
	
	public function getAcStatusCode() {
		return $this->acStatusCode;
	}
	
	public function setAcStatusCode($acStatusCode) {
		$this->acStatusCode = $acStatusCode;
		$this->apiParams["acStatusCode"] = $acStatusCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.freefreight.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryFreeFreight";
	}
	
}

?>