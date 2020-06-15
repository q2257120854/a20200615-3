<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-10-19
 */
class PromotionEndDateModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $promotionId;
	
	/**
	 * 
	 */
	private $promotionEndDate;
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getPromotionEndDate() {
		return $this->promotionEndDate;
	}
	
	public function setPromotionEndDate($promotionEndDate) {
		$this->promotionEndDate = $promotionEndDate;
		$this->apiParams["promotionEndDate"] = $promotionEndDate;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promotionenddate.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->promotionId, 'promotionId');
	}
	
	public function getBizName(){
		return "modifyPromotionEndDate";
	}
	
}

?>