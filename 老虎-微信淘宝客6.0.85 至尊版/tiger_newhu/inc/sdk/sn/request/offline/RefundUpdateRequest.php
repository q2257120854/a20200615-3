<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-29
 */
class RefundUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $operateFlag;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getOperateFlag() {
		return $this->operateFlag;
	}
	
	public function setOperateFlag($operateFlag) {
		$this->operateFlag = $operateFlag;
		$this->apiParams["operateFlag"] = $operateFlag;
	}
	
	public function getApiMethodName(){
		return 'suning.offline.refund.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->operateFlag, 'operateFlag');
	}
	
	public function getBizName(){
		return "updateRefund";
	}
	
}

?>