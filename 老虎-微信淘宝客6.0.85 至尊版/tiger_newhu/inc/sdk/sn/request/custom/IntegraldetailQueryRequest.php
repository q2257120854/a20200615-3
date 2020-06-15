<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-28
 */
class IntegraldetailQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $memCode;
	
	
	
	/**
	 * 
	 */
	private $rightType;
	
	public function getMemCode() {
		return $this->memCode;
	}
	
	public function setMemCode($memCode) {
		$this->memCode = $memCode;
		$this->apiParams["memCode"] = $memCode;
	}
	
	
	
	public function getRightType() {
		return $this->rightType;
	}
	
	public function setRightType($rightType) {
		$this->rightType = $rightType;
		$this->apiParams["rightType"] = $rightType;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.integraldetail.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->memCode, 'memCode');
		RequestCheckUtil::checkNotNull($this->rightType, 'rightType');
	}
	
	public function getBizName(){
		return "queryIntegraldetail";
	}
	
}

?>