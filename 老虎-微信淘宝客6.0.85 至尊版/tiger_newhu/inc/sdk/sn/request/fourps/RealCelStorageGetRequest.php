<?php
/**
 * 苏宁开放平台接口 - 商品实际退库信息查询
 *
 * @author suning
 * @date   2016-5-27
 */
class RealCelStorageGetRequest  extends SuningRequest{
	
	/**
	 * 退库预约单号。退库预约单号、采购订单号，二者必填其一
	 */
	private $appointOrderId;
	
	/**
	 * 采购订单号。退库预约单号、采购订单号，二者必填其一
	 */
	private $purchaseOrderId;
	
	public function getAppointOrderId() {
		return $this->appointOrderId;
	}
	
	public function setAppointOrderId($appointOrderId) {
		$this->appointOrderId = $appointOrderId;
		$this->apiParams["appointOrderId"] = $appointOrderId;
	}
	
	public function getPurchaseOrderId() {
		return $this->purchaseOrderId;
	}
	
	public function setPurchaseOrderId($purchaseOrderId) {
		$this->purchaseOrderId = $purchaseOrderId;
		$this->apiParams["purchaseOrderId"] = $purchaseOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.realcelstorage.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getRealCelStorage";
	}
	
}

?>