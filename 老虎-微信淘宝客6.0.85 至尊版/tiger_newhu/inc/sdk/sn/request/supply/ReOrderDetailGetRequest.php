<?php
/**
 * 苏宁开放平台接口 - 单个订单退货详情查询
 *
 * @author suning
 * @date   2016-3-25
 */
class ReOrderDetailGetRequest  extends SuningRequest{
	
	/**
	 * B2C订单号。B2C订单号
	 */
	private $b2cOrderNo;
	
	public function getB2cOrderNo() {
		return $this->b2cOrderNo;
	}
	
	public function setB2cOrderNo($b2cOrderNo) {
		$this->b2cOrderNo = $b2cOrderNo;
		$this->apiParams["b2cOrderNo"] = $b2cOrderNo;
	}
	
	public function getApiMethodName(){
		return 'suning.supply.reorderdetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->b2cOrderNo, 'b2cOrderNo');
	}
	
	public function getBizName(){
		return "getReOrderDetail";
	}
	
}

?>