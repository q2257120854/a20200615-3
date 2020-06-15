<?php
/**
 * 苏宁开放平台接口 - 海外购订单申报
 *
 * @author suning
 * @date   2016-3-25
 */
class SeaOrderDeclareAddRequest  extends SuningRequest{
	
	/**
	 * 合并包裹单号。合并包裹单号，在订单查询接口中获，packageorderid字段的值
	 */
	private $packageOrderId;
	
	public function getPackageOrderId() {
		return $this->packageOrderId;
	}
	
	public function setPackageOrderId($packageOrderId) {
		$this->packageOrderId = $packageOrderId;
		$this->apiParams["packageOrderId"] = $packageOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.supply.seaorderdeclare.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->packageOrderId, 'packageOrderId');
	}
	
	public function getBizName(){
		return "addSeaOrderDeclare";
	}
	
}

?>