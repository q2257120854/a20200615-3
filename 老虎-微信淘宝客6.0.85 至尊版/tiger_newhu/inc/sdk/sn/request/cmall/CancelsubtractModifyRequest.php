<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-7-27
 */
class CancelsubtractModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $reqXml;
	
	public function getReqXml() {
		return $this->reqXml;
	}
	
	public function setReqXml($reqXml) {
		$this->reqXml = $reqXml;
		$this->apiParams["reqXml"] = $reqXml;
	}
	
	public function getApiMethodName(){
		return 'suning.cmall.cancelsubtract.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->reqXml, 'reqXml');
	}
	
	public function getBizName(){
		return "modifyCancelsubtract";
	}
	
}

?>