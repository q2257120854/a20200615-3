<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class RefundmessagesQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $returnApplyId;
	
	public function getReturnApplyId() {
		return $this->returnApplyId;
	}
	
	public function setReturnApplyId($returnApplyId) {
		$this->returnApplyId = $returnApplyId;
		$this->apiParams["returnApplyId"] = $returnApplyId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.refundmessages.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->returnApplyId, 'returnApplyId');
	}
	
	public function getBizName(){
		return "queryRefundmessages";
	}
	
}

?>