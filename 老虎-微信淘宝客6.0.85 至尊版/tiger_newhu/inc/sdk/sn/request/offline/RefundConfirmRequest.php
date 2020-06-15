<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-29
 */
class RefundConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $verifyCode;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getVerifyCode() {
		return $this->verifyCode;
	}
	
	public function setVerifyCode($verifyCode) {
		$this->verifyCode = $verifyCode;
		$this->apiParams["verifyCode"] = $verifyCode;
	}
	
	public function getApiMethodName(){
		return 'suning.offline.refund.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->verifyCode, 'verifyCode');
	}
	
	public function getBizName(){
		return "confirmRefund";
	}
	
}

?>