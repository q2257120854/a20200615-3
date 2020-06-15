<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-5-31
 */
class OneorderGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $sdcsOrderId;
	
	public function getSdcsOrderId() {
		return $this->sdcsOrderId;
	}
	
	public function setSdcsOrderId($sdcsOrderId) {
		$this->sdcsOrderId = $sdcsOrderId;
		$this->apiParams["sdcsOrderId"] = $sdcsOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.oneorder.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->sdcsOrderId, 'sdcsOrderId');
	}
	
	public function getBizName(){
		return "getOneorder";
	}
	
}

?>