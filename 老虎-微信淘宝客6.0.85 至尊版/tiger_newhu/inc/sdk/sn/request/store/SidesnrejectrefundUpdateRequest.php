<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SidesnrejectrefundUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $rejectImage;
	
	/**
	 * 
	 */
	private $rejectReason;
	
	/**
	 * 
	 */
	private $rejectReasonCode;
	
	/**
	 * 
	 */
	private $rejectReasonDesc;
	
	/**
	 * 
	 */
	private $returnQuestId;
	
	public function getRejectImage() {
		return $this->rejectImage;
	}
	
	public function setRejectImage($rejectImage) {
		$this->rejectImage = $rejectImage;
		$this->apiParams["rejectImage"] = $rejectImage;
	}
	
	public function getRejectReason() {
		return $this->rejectReason;
	}
	
	public function setRejectReason($rejectReason) {
		$this->rejectReason = $rejectReason;
		$this->apiParams["rejectReason"] = $rejectReason;
	}
	
	public function getRejectReasonCode() {
		return $this->rejectReasonCode;
	}
	
	public function setRejectReasonCode($rejectReasonCode) {
		$this->rejectReasonCode = $rejectReasonCode;
		$this->apiParams["rejectReasonCode"] = $rejectReasonCode;
	}
	
	public function getRejectReasonDesc() {
		return $this->rejectReasonDesc;
	}
	
	public function setRejectReasonDesc($rejectReasonDesc) {
		$this->rejectReasonDesc = $rejectReasonDesc;
		$this->apiParams["rejectReasonDesc"] = $rejectReasonDesc;
	}
	
	public function getReturnQuestId() {
		return $this->returnQuestId;
	}
	
	public function setReturnQuestId($returnQuestId) {
		$this->returnQuestId = $returnQuestId;
		$this->apiParams["returnQuestId"] = $returnQuestId;
	}
	
	public function getApiMethodName(){
		return 'suning.store.sidesnrejectrefund.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->rejectReason, 'rejectReason');
		RequestCheckUtil::checkNotNull($this->returnQuestId, 'returnQuestId');
	}
	
	public function getBizName(){
		return "updateSidesnrejectrefund";
	}
	
}

?>