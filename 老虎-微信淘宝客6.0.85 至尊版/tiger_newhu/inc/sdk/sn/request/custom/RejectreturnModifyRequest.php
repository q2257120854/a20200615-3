<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class RejectreturnModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $rejectImage;
	
	/**
	 * 
	 */
	private $remark;
	
	/**
	 * 
	 */
	private $returnApplyId;
	
	public function getRejectImage() {
		return $this->rejectImage;
	}
	
	public function setRejectImage($rejectImage) {
		$this->rejectImage = $rejectImage;
		$this->apiParams["rejectImage"] = $rejectImage;
	}
	
	public function getRemark() {
		return $this->remark;
	}
	
	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getReturnApplyId() {
		return $this->returnApplyId;
	}
	
	public function setReturnApplyId($returnApplyId) {
		$this->returnApplyId = $returnApplyId;
		$this->apiParams["returnApplyId"] = $returnApplyId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.rejectreturn.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->remark, 'remark');
		RequestCheckUtil::checkNotNull($this->returnApplyId, 'returnApplyId');
	}
	
	public function getBizName(){
		return "modifyRejectreturn";
	}
	
}

?>