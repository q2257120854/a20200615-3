<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-28
 */
class HeadpicandnicknameQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $mixCustNum;
	
	public function getMixCustNum() {
		return $this->mixCustNum;
	}
	
	public function setMixCustNum($mixCustNum) {
		$this->mixCustNum = $mixCustNum;
		$this->apiParams["mixCustNum"] = $mixCustNum;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.headpicandnickname.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->mixCustNum, 'mixCustNum');
	}
	
	public function getBizName(){
		return "queryHeadpicandnickname";
	}
	
}

?>