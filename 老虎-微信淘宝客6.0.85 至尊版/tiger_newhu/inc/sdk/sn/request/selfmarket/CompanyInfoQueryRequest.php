<?php
/**
 * 苏宁开放平台接口 - 获取公司信息
 *
 * @author suning
 * @date   2016-4-19
 */
class CompanyInfoQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 公司代码。公司代码。
	 */
	private $coCode;
	
	/**
	 * 城市。城市。
	 */
	private $cityDesc;
	
	/**
	 * 是否管理公司。是否管理公司。
	 */
	private $mgmtCoFlag;
	
	
	
	public function getCoCode() {
		return $this->coCode;
	}
	
	public function setCoCode($coCode) {
		$this->coCode = $coCode;
		$this->apiParams["coCode"] = $coCode;
	}
	
	public function getCityDesc() {
		return $this->cityDesc;
	}
	
	public function setCityDesc($cityDesc) {
		$this->cityDesc = $cityDesc;
		$this->apiParams["cityDesc"] = $cityDesc;
	}
	
	public function getMgmtCoFlag() {
		return $this->mgmtCoFlag;
	}
	
	public function setMgmtCoFlag($mgmtCoFlag) {
		$this->mgmtCoFlag = $mgmtCoFlag;
		$this->apiParams["mgmtCoFlag"] = $mgmtCoFlag;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.companyinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryCompanyInfo";
	}
	
}

?>