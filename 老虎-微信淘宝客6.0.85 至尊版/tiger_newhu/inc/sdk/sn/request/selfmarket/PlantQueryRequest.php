<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-22
 */
class PlantQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $beginDate;
	
	/**
	 * 
	 */
	private $endDate;
	
	
	
	public function getBeginDate() {
		return $this->beginDate;
	}
	
	public function setBeginDate($beginDate) {
		$this->beginDate = $beginDate;
		$this->apiParams["beginDate"] = $beginDate;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.selfmarket.plant.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->beginDate, 'beginDate');
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
	}
	
	public function getBizName(){
		return "queryPlant";
	}
	
}

?>