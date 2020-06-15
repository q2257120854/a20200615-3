<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-5-11
 */
class BaojieapiQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $countDate;
	
	/**
	 * 
	 */
	private $companyCode;
	
	
	
	public function getCountDate() {
		return $this->countDate;
	}
	
	public function setCountDate($countDate) {
		$this->countDate = $countDate;
		$this->apiParams["countDate"] = $countDate;
	}
	
	public function getCompanyCode() {
		return $this->companyCode;
	}
	
	public function setCompanyCode($companyCode) {
		$this->companyCode = $companyCode;
		$this->apiParams["companyCode"] = $companyCode;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.baojieapi.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->countDate, 'countDate');
		RequestCheckUtil::checkNotNull($this->companyCode, 'companyCode');
	}
	
	public function getBizName(){
		return "queryBaojieapi";
	}
	
}

?>