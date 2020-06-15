<?php
/**
 * 苏宁开放平台接口 - 商品预约信息取消(入库及退库)
 *
 * @author suning
 * @date   2015-6-24
 */
class CancelRefundWorkInfoRequest  extends SuningRequest{
	
	/**
	 * 退库预约单号。退库预约单号
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
		return 'suning.swl.refundworkinfo.cancel';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appointOrderId, 'appointOrderId');
	}
	
	public function getBizName(){
		return "cancelRefundWorkInfo";
	}
	
}

?>