<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-28
 */
class MembindModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $memCode;
	
	/**
	 * 
	 */
	private $sourceNo;
	
	public function getMemCode() {
		return $this->memCode;
	}
	
	public function setMemCode($memCode) {
		$this->memCode = $memCode;
		$this->apiParams["memCode"] = $memCode;
	}
	
	public function getSourceNo() {
		return $this->sourceNo;
	}
	
	public function setSourceNo($sourceNo) {
		$this->sourceNo = $sourceNo;
		$this->apiParams["sourceNo"] = $sourceNo;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.membind.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->memCode, 'memCode');
		RequestCheckUtil::checkNotNull($this->sourceNo, 'sourceNo');
	}
	
	public function getBizName(){
		return "modifyMembind";
	}
	
}

?>