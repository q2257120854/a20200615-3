<?php
/**
 * 苏宁开放平台接口 - 商品退库预约修改
 *
 * @author suning
 * @date   2015-6-24
 */
class RefundAppointModifyRequest  extends SuningRequest{
	
	/**
	 * 退库预约单号
	 */
	private $appointOrderId;
	
	/**
	 * 预约退库日期。
	 */
	private $appointDate;
	
	/**
	 * 预约退库时间。
	 */
	private $appointTime;
	
	/**
	 * 承运人。
	 */
	private $contacts;
	
	/**
	 * 联系电话。
	 */
	private $supplierPhone;
	
	public function getAppointOrderId() {
		return $this->appointOrderId;
	}
	
	public function setAppointOrderId($appointOrderId) {
		$this->appointOrderId = $appointOrderId;
		$this->apiParams["appointOrderId"] = $appointOrderId;
	}
	
	public function getAppointDate() {
		return $this->appointDate;
	}
	
	public function setAppointDate($appointDate) {
		$this->appointDate = $appointDate;
		$this->apiParams["appointDate"] = $appointDate;
	}
	
	public function getAppointTime() {
		return $this->appointTime;
	}
	
	public function setAppointTime($appointTime) {
		$this->appointTime = $appointTime;
		$this->apiParams["appointTime"] = $appointTime;
	}
	
	public function getContacts() {
		return $this->contacts;
	}
	
	public function setContacts($contacts) {
		$this->contacts = $contacts;
		$this->apiParams["contacts"] = $contacts;
	}
	
	public function getSupplierPhone() {
		return $this->supplierPhone;
	}
	
	public function setSupplierPhone($supplierPhone) {
		$this->supplierPhone = $supplierPhone;
		$this->apiParams["supplierPhone"] = $supplierPhone;
	}
	
	public function getApiMethodName(){
		return 'suning.swl.refundappoint.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appointOrderId, 'appointOrderId');
		RequestCheckUtil::checkNotNull($this->appointDate, 'appointDate');
		RequestCheckUtil::checkNotNull($this->appointTime, 'appointTime');
		RequestCheckUtil::checkNotNull($this->contacts, 'contacts');
		RequestCheckUtil::checkNotNull($this->supplierPhone, 'supplierPhone');
	}
	
	public function getBizName(){
		return "modifyRefundAppoint";
	}
	
}

?>