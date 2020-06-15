<?php
/**
 * 苏宁开放平台接口 - 同意退款验证码获取
 *
 * @author suning
 * @date   2016-2-23
 */
class VerifycodeAddRequest  extends SuningRequest{
	
	/**
	 * 操作子账号名。操作人在苏宁平台的子账号
	 */
	private $childAccountName;
	
	/**
	 * 
	 */
	private $orderItemList;
	
	public function getChildAccountName() {
		return $this->childAccountName;
	}
	
	public function setChildAccountName($childAccountName) {
		$this->childAccountName = $childAccountName;
		$this->apiParams["childAccountName"] = $childAccountName;
	}
	
	public function getOrderItemList() {
		return $this->orderItemList;
	}
	
	public function setOrderItemList($orderItemList) {
		$this->orderItemList = $orderItemList;
		$arr = array();
		foreach ($orderItemList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItemList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.verifycode.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->childAccountName, 'childAccountName');
	}
	
	public function getBizName(){
		return "getVerifyCode";
	}
	
}

class OrderItemList {

	private $apiParams = array();
	
	private $orderItemId;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>