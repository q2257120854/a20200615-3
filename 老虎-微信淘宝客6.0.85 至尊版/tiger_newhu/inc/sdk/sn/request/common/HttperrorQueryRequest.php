<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-10
 */
class HttperrorQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $aaa;
	
	/**
	 * 
	 */
	private $bbb;
	
	public function getAaa() {
		return $this->aaa;
	}
	
	public function setAaa($aaa) {
		$this->aaa = $aaa;
		$this->apiParams["aaa"] = $aaa;
	}
	
	public function getBbb() {
		return $this->bbb;
	}
	
	public function setBbb($bbb) {
		$this->bbb = $bbb;
		$this->apiParams["bbb"] = $bbb;
	}
	
	public function getApiMethodName(){
		return 'suning.common.httperror.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->aaa, 'aaa');
		RequestCheckUtil::checkNotNull($this->bbb, 'bbb');
	}
	
	public function getBizName(){
		return "queryHttperror";
	}
	
}

?>