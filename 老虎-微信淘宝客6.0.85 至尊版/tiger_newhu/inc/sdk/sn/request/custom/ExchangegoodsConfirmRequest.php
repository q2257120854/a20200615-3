<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-4
 */
class ExchangegoodsConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $changeApplyId;
	
	/**
	 * 
	 */
	private $invAddrId;
	
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
	
	public function getApiMethodName(){
		return 'suning.custom.exchangegoods.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->changeApplyId, 'changeApplyId');
		RequestCheckUtil::checkNotNull($this->invAddrId, 'invAddrId');
	}
	
	public function getBizName(){
		return "confirmExchangegoods";
	}
	
}

?>