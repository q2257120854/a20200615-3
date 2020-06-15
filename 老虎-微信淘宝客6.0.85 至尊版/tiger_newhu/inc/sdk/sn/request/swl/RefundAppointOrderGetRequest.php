<?php
/**
 * 苏宁开放平台接口 - 商品退库预约信息单笔查询
 *
 * @author suning
 * @date   2015-6-24
 */
class RefundAppointOrderGetRequest  extends SuningRequest{
	
	/**
	 * 退库预约单号。
	 */
	private $appointOrderId;
	
	public function getAppointOrderId() {
		return $this->appointOrderId;
	}
	
	public function setAppointOrderId($appointOrderId) {
		$this->appointOrderId = $appointOrderId;
		$this->apiParams["appointOrderId"] = $appointOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.swl.refundappointorder.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appointOrderId, 'appointOrderId');
	}
	
	public function getBizName(){
		return "getRefundAppointOrder";
	}
	
}

?>