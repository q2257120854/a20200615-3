<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-11-23
 */
class PromUnitReportsGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $promotionUnitId;
	
	public function getPromotionUnitId() {
		return $this->promotionUnitId;
	}
	
	public function setPromotionUnitId($promotionUnitId) {
		$this->promotionUnitId = $promotionUnitId;
		$this->apiParams["promotionUnitId"] = $promotionUnitId;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promunitreports.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->promotionUnitId, 'promotionUnitId');
	}
	
	public function getBizName(){
		return "getPromUnitReports";
	}
	
}

?>