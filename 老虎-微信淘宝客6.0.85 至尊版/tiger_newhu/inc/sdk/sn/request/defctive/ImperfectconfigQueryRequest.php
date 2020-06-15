<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class ImperfectconfigQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $buCode;
	
	public function getBuCode() {
		return $this->buCode;
	}
	
	public function setBuCode($buCode) {
		$this->buCode = $buCode;
		$this->apiParams["buCode"] = $buCode;
	}
	
	public function getApiMethodName(){
		return 'suning.defctive.imperfectconfig.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->buCode, 'buCode');
	}
	
	public function getBizName(){
		return "queryImperfectconfig";
	}
	
}

?>