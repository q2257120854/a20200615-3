<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-3-8
 */
class ExpressorderQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $innerOrderId;
	
	public function getInnerOrderId() {
		return $this->innerOrderId;
	}
	
	public function setInnerOrderId($innerOrderId) {
		$this->innerOrderId = $innerOrderId;
		$this->apiParams["innerOrderId"] = $innerOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.expressorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->innerOrderId, 'innerOrderId');
	}
	
	public function getBizName(){
		return "queryExpressorder";
	}
	
}

?>