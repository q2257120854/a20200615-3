<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-4
 */
class ExchangegoodsdeliveryConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $changeApplyId;
	
	/**
	 * 
	 */
	private $deExpressCompanyCode;
	
	/**
	 * 
	 */
	private $deExpressno;
	
	public function getChangeApplyId() {
		return $this->changeApplyId;
	}
	
	public function setChangeApplyId($changeApplyId) {
		$this->changeApplyId = $changeApplyId;
		$this->apiParams["changeApplyId"] = $changeApplyId;
	}
	
	public function getDeExpressCompanyCode() {
		return $this->deExpressCompanyCode;
	}
	
	public function setDeExpressCompanyCode($deExpressCompanyCode) {
		$this->deExpressCompanyCode = $deExpressCompanyCode;
		$this->apiParams["deExpressCompanyCode"] = $deExpressCompanyCode;
	}
	
	public function getDeExpressno() {
		return $this->deExpressno;
	}
	
	public function setDeExpressno($deExpressno) {
		$this->deExpressno = $deExpressno;
		$this->apiParams["deExpressno"] = $deExpressno;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.exchangegoodsdelivery.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->changeApplyId, 'changeApplyId');
		RequestCheckUtil::checkNotNull($this->deExpressCompanyCode, 'deExpressCompanyCode');
		RequestCheckUtil::checkNotNull($this->deExpressno, 'deExpressno');
	}
	
	public function getBizName(){
		return "confirmExchangegoodsdelivery";
	}
	
}

?>