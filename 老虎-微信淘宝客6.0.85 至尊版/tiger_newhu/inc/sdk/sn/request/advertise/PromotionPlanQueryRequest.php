<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-10-19
 */
class PromotionPlanQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $promotionStartDate;
	
	/**
	 * 
	 */
	private $promotionEndDate;
	
	public function getPromotionStartDate() {
		return $this->promotionStartDate;
	}
	
	public function setPromotionStartDate($promotionStartDate) {
		$this->promotionStartDate = $promotionStartDate;
		$this->apiParams["promotionStartDate"] = $promotionStartDate;
	}
	
	public function getPromotionEndDate() {
		return $this->promotionEndDate;
	}
	
	public function setPromotionEndDate($promotionEndDate) {
		$this->promotionEndDate = $promotionEndDate;
		$this->apiParams["promotionEndDate"] = $promotionEndDate;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promotionplan.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->promotionStartDate, 'promotionStartDate');
		RequestCheckUtil::checkNotNull($this->promotionEndDate, 'promotionEndDate');
	}
	
	public function getBizName(){
		return "queryPromotionPlan";
	}
	
}

?>