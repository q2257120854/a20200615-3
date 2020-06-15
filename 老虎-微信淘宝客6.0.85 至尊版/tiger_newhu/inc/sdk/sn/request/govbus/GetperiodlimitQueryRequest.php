<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-12-29
 */
class GetperiodlimitQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $userAccount;
	
	public function getUserAccount() {
		return $this->userAccount;
	}
	
	public function setUserAccount($userAccount) {
		$this->userAccount = $userAccount;
		$this->apiParams["userAccount"] = $userAccount;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.getperiodlimit.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->userAccount, 'userAccount');
	}
	
	public function getBizName(){
		return "queryGetperiodlimit";
	}
	
}

?>