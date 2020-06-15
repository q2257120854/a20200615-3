<?php
/**
 * 苏宁开放平台接口 - 商品促销活动查询
 *
 * @author suning
 * @date   2015-7-27
 */
class PromotionQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 苏宁商品编码。苏宁商品编码、商家商品编码必须有一个有值。如果两者都填写，则以苏宁商品编码为准。
	 */
	private $productCode;
	
	
	
	/**
	 * 查询开始时间。活动开始时间。格式:yyyy-MM-dd HH:MM:SS若输入则开始时间和结束时间必须同时出现，开始时间和结束时间间隔不大于90天，如果时间不输入，则默认查询当前时间往前三天的数据。
	 */
	private $startTime;
	
	/**
	 * 查询结束时间。活动结束时间。格式:yyyy-MM-dd HH:MM:SS若输入则开始时间和结束时间必须同时出现，开始时间和结束时间间隔不大于90天，如果时间不输入，则默认查询当前时间往前三天的数据。
	 */
	private $endTime;
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
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
	
	public function getApiMethodName(){
		return 'suning.custom.promotion.query';
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
		return "queryPromotion";
	}
	
}

?>