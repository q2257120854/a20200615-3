<?php
/**
 * 苏宁开放平台接口 - 交易API - 获取物流公司代码（查询单个）
 *
 * @author 14042058
 * @date   2014-6-4
 */
class LogisticcompanyGetRequest extends SuningRequest{
	/**
	 * 物流公司名称
	 */
	private $companyName;
	/**
	 * @return the $companyName
	 */
	public function getCompanyName() {
		return $this->companyName;
	}

	/**
	 * @param field_type $companyName
	 */
	public function setCompanyName($companyName) {
		$this->companyName = $companyName;
		$this->apiParams["companyName"] = $companyName;
	}

	public function getApiMethodName()
	{
		return 'suning.custom.logisticcompany.get';
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
	
	public function check()
	{
		RequestCheckUtil::checkNotNull($this->companyName, "companyName");
	}
	
	public function getBizName(){
		return "logisticCompany";
	}
}

?>