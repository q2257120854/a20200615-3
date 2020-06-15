<?php
/**
 * 苏宁开放平台接口 - 同意退款
 *
 * @author suning
 * @date   2016-2-24
 */
class AgreeRefundModifyRequest  extends SuningRequest{
	
	/**
	 * 操作子账号名。操作人在苏宁平台的子账号
	 */
	private $childAccountName;
	
	/**
	 * 短信验证码。短信验证码
	 */
	private $code;
	
	/**
	 * 订单行号。订单行项目号
	 */
	private $orderItemId;
	
	/**
	 * 退款金额。确认的退款 金额
	 */
	private $returnMoney;
	
	/**
	 * 退款申请时间。当前系统时间
	 */
	private $applyTime;
	
	/**
	 * 退款阶段。2货未发 3货已发 4货已收
	 */
	private $returnType;
	
	public function getChildAccountName() {
		return $this->childAccountName;
	}
	
	public function setChildAccountName($childAccountName) {
		$this->childAccountName = $childAccountName;
		$this->apiParams["childAccountName"] = $childAccountName;
	}
	
	public function getCode() {
		return $this->code;
	}
	
	public function setCode($code) {
		$this->code = $code;
		$this->apiParams["code"] = $code;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getReturnMoney() {
		return $this->returnMoney;
	}
	
	public function setReturnMoney($returnMoney) {
		$this->returnMoney = $returnMoney;
		$this->apiParams["returnMoney"] = $returnMoney;
	}
	
	public function getApplyTime() {
		return $this->applyTime;
	}
	
	public function setApplyTime($applyTime) {
		$this->applyTime = $applyTime;
		$this->apiParams["applyTime"] = $applyTime;
	}
	
	public function getReturnType() {
		return $this->returnType;
	}
	
	public function setReturnType($returnType) {
		$this->returnType = $returnType;
		$this->apiParams["returnType"] = $returnType;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.agreerefund.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->childAccountName, 'childAccountName');
		RequestCheckUtil::checkNotNull($this->code, 'code');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->returnMoney, 'returnMoney');
		RequestCheckUtil::checkNotNull($this->applyTime, 'applyTime');
		RequestCheckUtil::checkNotNull($this->returnType, 'returnType');
	}
	
	public function getBizName(){
		return "modifyAgreeRefund";
	}
	
}

?>