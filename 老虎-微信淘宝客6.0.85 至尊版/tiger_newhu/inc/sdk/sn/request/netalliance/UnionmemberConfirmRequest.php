<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-6
 */
class UnionmemberConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $mixCustNum;
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getMixCustNum() {
		return $this->mixCustNum;
	}
	
	public function setMixCustNum($mixCustNum) {
		$this->mixCustNum = $mixCustNum;
		$this->apiParams["mixCustNum"] = $mixCustNum;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.unionmember.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "confirmUnionmember";
	}
	
}

?>