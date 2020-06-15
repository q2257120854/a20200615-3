<?php
/**
 * 苏宁开放平台接口 - 任务单物流详情查询接口
 *
 * @author suning
 * @date   2015-11-18
 */
class LogisticsDetailGetRequest  extends SuningRequest{
	
	/**
	 * 快递公司编码。
	 */
	private $expressCompanyCode;
	
	/**
	 * 运单号。
	 */
	private $expressNo;
	
	public function getExpressCompanyCode() {
		return $this->expressCompanyCode;
	}
	
	public function setExpressCompanyCode($expressCompanyCode) {
		$this->expressCompanyCode = $expressCompanyCode;
		$this->apiParams["expressCompanyCode"] = $expressCompanyCode;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}
	
	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.logisticsdetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->expressCompanyCode, 'expressCompanyCode');
		RequestCheckUtil::checkNotNull($this->expressNo, 'expressNo');
	}
	
	public function getBizName(){
		return "getLogisticsDetail";
	}
	
}

?>