<?php
/**
 * 苏宁开放平台接口 - 海外购订单申报（商家、苏宁保税仓发货）
 *
 * @author suning
 * @date   2016-1-27
 */
class BsSeaOrderDeclareAddRequest  extends SuningRequest{
	
	/**
	 * 合并包裹单号。合并包裹单号，在订单查询接口中获得，packageorderid字段的值
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
		return 'suning.custom.bsseaorderdeclare.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->packageOrderId, 'packageOrderId');
	}
	
	public function getBizName(){
		return "addBsSeaOrderDeclare";
	}
	
}

?>