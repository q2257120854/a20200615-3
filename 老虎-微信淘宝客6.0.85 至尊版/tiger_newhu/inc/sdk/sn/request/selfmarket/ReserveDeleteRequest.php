<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-9-20
 */
class ReserveDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appointmentOrder;
	
	/**
	 * 
	 */
	private $deliveryNo;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getAppointmentOrder() {
		return $this->appointmentOrder;
	}
	
	public function setAppointmentOrder($appointmentOrder) {
		$this->appointmentOrder = $appointmentOrder;
		$this->apiParams["appointmentOrder"] = $appointmentOrder;
	}
	
	public function getDeliveryNo() {
		return $this->deliveryNo;
	}
	
	public function setDeliveryNo($deliveryNo) {
		$this->deliveryNo = $deliveryNo;
		$this->apiParams["deliveryNo"] = $deliveryNo;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.reserve.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "deleteReserve";
	}
	
}

?>