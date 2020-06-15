<?php
/**
 * 苏宁开放平台接口 - 获取订购isv软件的用户信息
 *
 * @author suning
 * @date   2015-6-5
 */
class OrderIsvSoftUserInfoGetRequest  extends SuningRequest{
	
	/**
	 * 用户会员编码。主账号会员编码
	 */
	private $custNum;
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getApiMethodName(){
		return 'suning.cloud.orderisvsoftuserinfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
	}
	
	public function getBizName(){
		return "getOrderIsvSoftUserInfo";
	}
	
}

?>