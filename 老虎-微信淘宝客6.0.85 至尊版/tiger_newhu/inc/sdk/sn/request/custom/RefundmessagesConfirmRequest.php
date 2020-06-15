<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class RefundmessagesConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $msgImage;
	
	/**
	 * 
	 */
	private $msgInfo;
	
	/**
	 * 
	 */
	private $returnApplyId;
	
	public function getMsgImage() {
		return $this->msgImage;
	}
	
	public function setMsgImage($msgImage) {
		$this->msgImage = $msgImage;
		$this->apiParams["msgImage"] = $msgImage;
	}
	
	public function getMsgInfo() {
		return $this->msgInfo;
	}
	
	public function setMsgInfo($msgInfo) {
		$this->msgInfo = $msgInfo;
		$this->apiParams["msgInfo"] = $msgInfo;
	}
	
	public function getReturnApplyId() {
		return $this->returnApplyId;
	}
	
	public function setReturnApplyId($returnApplyId) {
		$this->returnApplyId = $returnApplyId;
		$this->apiParams["returnApplyId"] = $returnApplyId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.refundmessages.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->msgInfo, 'msgInfo');
		RequestCheckUtil::checkNotNull($this->returnApplyId, 'returnApplyId');
	}
	
	public function getBizName(){
		return "confirmRefundmessages";
	}
	
}

?>