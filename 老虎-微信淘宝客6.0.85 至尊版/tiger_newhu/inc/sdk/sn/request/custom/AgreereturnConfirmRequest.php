<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class AgreereturnConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $invAddrId;
	
	/**
	 * 
	 */
	private $remark;
	
	/**
	 * 
	 */
	private $returnApplyId;
	
	public function getInvAddrId() {
		return $this->invAddrId;
	}
	
	public function setInvAddrId($invAddrId) {
		$this->invAddrId = $invAddrId;
		$this->apiParams["invAddrId"] = $invAddrId;
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
		return 'suning.custom.agreereturn.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->invAddrId, 'invAddrId');
		RequestCheckUtil::checkNotNull($this->remark, 'remark');
		RequestCheckUtil::checkNotNull($this->returnApplyId, 'returnApplyId');
	}
	
	public function getBizName(){
		return "confirmAgreereturn";
	}
	
}

?>