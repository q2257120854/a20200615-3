<?php
/**
 * 苏宁开放平台接口 - 单笔查询检测报告
 *
 * @author suning
 * @date   2015-6-8
 */
class ReportGetRequest  extends SuningRequest{
	
	/**
	 * 报告代码。由服务商自己填写，两者必填其一
	 */
	private $qtCode;
	
	/**
	 * 检测单号。检测编号，两者必填其一
	 */
	private $qtOrderCode;
	
	public function getQtCode() {
		return $this->qtCode;
	}
	
	public function setQtCode($qtCode) {
		$this->qtCode = $qtCode;
		$this->apiParams["qtCode"] = $qtCode;
	}
	
	public function getQtOrderCode() {
		return $this->qtOrderCode;
	}
	
	public function setQtOrderCode($qtOrderCode) {
		$this->qtOrderCode = $qtOrderCode;
		$this->apiParams["qtOrderCode"] = $qtOrderCode;
	}
	
	public function getApiMethodName(){
		return 'suning.fws.report.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getReport";
	}
	
}

?>