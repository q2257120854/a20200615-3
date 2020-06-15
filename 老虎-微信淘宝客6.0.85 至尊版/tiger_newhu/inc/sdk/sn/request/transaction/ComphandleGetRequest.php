<?php
/**
 * 苏宁开放平台接口 - 顾客投诉处理记录查询
 *
 * @author suning
 * @date   2014-9-25
 */
class ComphandleGetRequest  extends SuningRequest{
	
	/**
	 * 投诉编码
	 */
	private $complaintCode;
	
	public function getComplaintCode() {
		return $this->complaintCode;
	}
	
	public function setComplaintCode($complaintCode) {
		$this->complaintCode = $complaintCode;
		$this->apiParams["complaintCode"] = $complaintCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.comphandle.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->complaintCode, 'complaintCode');
	}
	
	public function getBizName(){
		return "getComplaintHandle";
	}
	
}

?>