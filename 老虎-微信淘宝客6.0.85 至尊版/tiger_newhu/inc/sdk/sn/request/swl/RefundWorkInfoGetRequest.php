<?php
/**
 * 苏宁开放平台接口 - 商品实际退库信息查询
 *
 * @author suning
 * @date   2016-10-10
 */
class RefundWorkInfoGetRequest  extends SuningRequest{
	
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
		return 'suning.swl.refundworkinfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appointOrderId, 'appointOrderId');
	}
	
	public function getBizName(){
		return "getRefundWorkInfo";
	}
	
}

?>