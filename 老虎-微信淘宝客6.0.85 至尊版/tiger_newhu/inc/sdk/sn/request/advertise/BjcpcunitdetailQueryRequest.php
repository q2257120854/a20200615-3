<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-9-26
 */
class BjcpcunitdetailQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $companyCode;
	
	/**
	 * 
	 */
	private $countDate;
	
	
	
	public function getCompanyCode() {
		return $this->companyCode;
	}
	
	public function setCompanyCode($companyCode) {
		$this->companyCode = $companyCode;
		$this->apiParams["companyCode"] = $companyCode;
	}
	
	public function getCountDate() {
		return $this->countDate;
	}
	
	public function setCountDate($countDate) {
		$this->countDate = $countDate;
		$this->apiParams["countDate"] = $countDate;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.advertise.bjcpcunitdetail.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->companyCode, 'companyCode');
		RequestCheckUtil::checkNotNull($this->countDate, 'countDate');
	}
	
	public function getBizName(){
		return "queryBjcpcunitdetail";
	}
	
}

?>