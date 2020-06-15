<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-11-23
 */
class PromCatalogReportsGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $promotionUnitId;
	
	/**
	 * 
	 */
	private $terminalType;
	
	public function getPromotionUnitId() {
		return $this->promotionUnitId;
	}
	
	public function setPromotionUnitId($promotionUnitId) {
		$this->promotionUnitId = $promotionUnitId;
		$this->apiParams["promotionUnitId"] = $promotionUnitId;
	}
	
	public function getTerminalType() {
		return $this->terminalType;
	}
	
	public function setTerminalType($terminalType) {
		$this->terminalType = $terminalType;
		$this->apiParams["terminalType"] = $terminalType;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promcatalogreports.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->promotionUnitId, 'promotionUnitId');
		RequestCheckUtil::checkNotNull($this->terminalType, 'terminalType');
	}
	
	public function getBizName(){
		return "getPromCatalogReports";
	}
	
}

?>