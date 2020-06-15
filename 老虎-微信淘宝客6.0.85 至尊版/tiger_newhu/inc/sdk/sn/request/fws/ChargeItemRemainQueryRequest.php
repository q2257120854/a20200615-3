<?php
/**
 * 苏宁开放平台接口 - 批量查询指定收费项目服务剩余可使用数量
 *
 * @author suning
 * @date   2015-6-8
 */
class ChargeItemRemainQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 收费项目代码。服务的子项目的代码
	 */
	private $chargeId;
	
	/**
	 * 商家账号。商家账号
	 */
	private $businessAccounts;
	
	
	
	public function getChargeId() {
		return $this->chargeId;
	}
	
	public function setChargeId($chargeId) {
		$this->chargeId = $chargeId;
		$this->apiParams["chargeId"] = $chargeId;
	}
	
	public function getBusinessAccounts() {
		return $this->businessAccounts;
	}
	
	public function setBusinessAccounts($businessAccounts) {
		$this->businessAccounts = $businessAccounts;
		$this->apiParams["businessAccounts"] = $businessAccounts;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.fws.chargeitemremain.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->chargeId, 'chargeId');
		RequestCheckUtil::checkNotNull($this->businessAccounts, 'businessAccounts');
	}
	
	public function getBizName(){
		return "queryChargeItemRemain";
	}
	
}

?>