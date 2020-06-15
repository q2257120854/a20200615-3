<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-4
 */
class RejectexchangedeliverModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $changeApplyId;
	
	/**
	 * 
	 */
	private $rejectImage;
	
	/**
	 * 
	 */
	private $rejectReasonCode;
	
	/**
	 * 
	 */
	private $remark;
	
	public function getChangeApplyId() {
		return $this->changeApplyId;
	}
	
	public function setChangeApplyId($changeApplyId) {
		$this->changeApplyId = $changeApplyId;
		$this->apiParams["changeApplyId"] = $changeApplyId;
	}
	
	public function getRejectImage() {
		return $this->rejectImage;
	}
	
	public function setRejectImage($rejectImage) {
		$this->rejectImage = $rejectImage;
		$this->apiParams["rejectImage"] = $rejectImage;
	}
	
	public function getRejectReasonCode() {
		return $this->rejectReasonCode;
	}
	
	public function setRejectReasonCode($rejectReasonCode) {
		$this->rejectReasonCode = $rejectReasonCode;
		$this->apiParams["rejectReasonCode"] = $rejectReasonCode;
	}
	
	public function getRemark() {
		return $this->remark;
	}
	
	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.rejectexchangedeliver.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->changeApplyId, 'changeApplyId');
		RequestCheckUtil::checkNotNull($this->rejectReasonCode, 'rejectReasonCode');
		RequestCheckUtil::checkNotNull($this->remark, 'remark');
	}
	
	public function getBizName(){
		return "modifyRejectexchangedeliver";
	}
	
}

?>