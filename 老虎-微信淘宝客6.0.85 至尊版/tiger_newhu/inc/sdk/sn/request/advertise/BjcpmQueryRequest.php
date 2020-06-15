<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-5-3
 */
class BjcpmQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $companyCode;
	
	/**
	 * 
	 */
	private $queryDate;
	
	
	
	public function getCompanyCode() {
		return $this->companyCode;
	}
	
	public function setCompanyCode($companyCode) {
		$this->companyCode = $companyCode;
		$this->apiParams["companyCode"] = $companyCode;
	}
	
	public function getQueryDate() {
		return $this->queryDate;
	}
	
	public function setQueryDate($queryDate) {
		$this->queryDate = $queryDate;
		$this->apiParams["queryDate"] = $queryDate;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.bjcpm.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->companyCode, 'companyCode');
		RequestCheckUtil::checkNotNull($this->queryDate, 'queryDate');
	}
	
	public function getBizName(){
		return "queryBjcpm";
	}
	
}

?>