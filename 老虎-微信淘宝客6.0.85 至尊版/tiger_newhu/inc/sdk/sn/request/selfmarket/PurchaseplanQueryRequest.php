<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-23
 */
class PurchaseplanQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $purchasePlanNo;
	
	
	
	public function getPurchasePlanNo() {
		return $this->purchasePlanNo;
	}
	
	public function setPurchasePlanNo($purchasePlanNo) {
		$this->purchasePlanNo = $purchasePlanNo;
		$this->apiParams["purchasePlanNo"] = $purchasePlanNo;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.purchaseplan.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
		RequestCheckUtil::checkNotNull($this->purchasePlanNo, 'purchasePlanNo');
	}
	
	public function getBizName(){
		return "queryPurchaseplan";
	}
	
}

?>