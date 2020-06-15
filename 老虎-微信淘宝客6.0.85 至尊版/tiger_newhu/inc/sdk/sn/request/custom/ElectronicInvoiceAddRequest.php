<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-5
 */
class ElectronicInvoiceAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $invoiceAmount;
	
	/**
	 * 
	 */
	private $invoiceCode;
	
	/**
	 * 
	 */
	private $invoiceData;
	
	/**
	 * 
	 */
	private $invoiceFlag;
	
	/**
	 * 
	 */
	private $invoiceHead;
	
	/**
	 * 
	 */
	private $invoiceHeadType;
	
	/**
	 * 
	 */
	private $invoiceNo;
	
	/**
	 * 
	 */
	private $invoiceNoTaxAmount;
	
	/**
	 * 
	 */
	private $invoiceSecurityCode;
	
	/**
	 * 
	 */
	private $invoiceTime;
	
	/**
	 * 
	 */
	private $invoiceType;
	
	/**
	 * 
	 */
	private $logisticsComp;
	
	/**
	 * 
	 */
	private $logisticsOrderId;
	
	/**
	 * 
	 */
	private $oldInvoiceCode;
	
	/**
	 * 
	 */
	private $oldInvoiceNum;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $productCode;
	
	public function getInvoiceAmount() {
		return $this->invoiceAmount;
	}
	
	public function setInvoiceAmount($invoiceAmount) {
		$this->invoiceAmount = $invoiceAmount;
		$this->apiParams["invoiceAmount"] = $invoiceAmount;
	}
	
	public function getInvoiceCode() {
		return $this->invoiceCode;
	}
	
	public function setInvoiceCode($invoiceCode) {
		$this->invoiceCode = $invoiceCode;
		$this->apiParams["invoiceCode"] = $invoiceCode;
	}
	
	public function getInvoiceData() {
		return $this->invoiceData;
	}
	
	public function setInvoiceData($invoiceData) {
		$this->invoiceData = $invoiceData;
		$this->apiParams["invoiceData"] = $invoiceData;
	}
	
	public function getInvoiceFlag() {
		return $this->invoiceFlag;
	}
	
	public function setInvoiceFlag($invoiceFlag) {
		$this->invoiceFlag = $invoiceFlag;
		$this->apiParams["invoiceFlag"] = $invoiceFlag;
	}
	
	public function getInvoiceHead() {
		return $this->invoiceHead;
	}
	
	public function setInvoiceHead($invoiceHead) {
		$this->invoiceHead = $invoiceHead;
		$this->apiParams["invoiceHead"] = $invoiceHead;
	}
	
	public function getInvoiceHeadType() {
		return $this->invoiceHeadType;
	}
	
	public function setInvoiceHeadType($invoiceHeadType) {
		$this->invoiceHeadType = $invoiceHeadType;
		$this->apiParams["invoiceHeadType"] = $invoiceHeadType;
	}
	
	public function getInvoiceNo() {
		return $this->invoiceNo;
	}
	
	public function setInvoiceNo($invoiceNo) {
		$this->invoiceNo = $invoiceNo;
		$this->apiParams["invoiceNo"] = $invoiceNo;
	}
	
	public function getInvoiceNoTaxAmount() {
		return $this->invoiceNoTaxAmount;
	}
	
	public function setInvoiceNoTaxAmount($invoiceNoTaxAmount) {
		$this->invoiceNoTaxAmount = $invoiceNoTaxAmount;
		$this->apiParams["invoiceNoTaxAmount"] = $invoiceNoTaxAmount;
	}
	
	public function getInvoiceSecurityCode() {
		return $this->invoiceSecurityCode;
	}
	
	public function setInvoiceSecurityCode($invoiceSecurityCode) {
		$this->invoiceSecurityCode = $invoiceSecurityCode;
		$this->apiParams["invoiceSecurityCode"] = $invoiceSecurityCode;
	}
	
	public function getInvoiceTime() {
		return $this->invoiceTime;
	}
	
	public function setInvoiceTime($invoiceTime) {
		$this->invoiceTime = $invoiceTime;
		$this->apiParams["invoiceTime"] = $invoiceTime;
	}
	
	public function getInvoiceType() {
		return $this->invoiceType;
	}
	
	public function setInvoiceType($invoiceType) {
		$this->invoiceType = $invoiceType;
		$this->apiParams["invoiceType"] = $invoiceType;
	}
	
	public function getLogisticsComp() {
		return $this->logisticsComp;
	}
	
	public function setLogisticsComp($logisticsComp) {
		$this->logisticsComp = $logisticsComp;
		$this->apiParams["logisticsComp"] = $logisticsComp;
	}
	
	public function getLogisticsOrderId() {
		return $this->logisticsOrderId;
	}
	
	public function setLogisticsOrderId($logisticsOrderId) {
		$this->logisticsOrderId = $logisticsOrderId;
		$this->apiParams["logisticsOrderId"] = $logisticsOrderId;
	}
	
	public function getOldInvoiceCode() {
		return $this->oldInvoiceCode;
	}
	
	public function setOldInvoiceCode($oldInvoiceCode) {
		$this->oldInvoiceCode = $oldInvoiceCode;
		$this->apiParams["oldInvoiceCode"] = $oldInvoiceCode;
	}
	
	public function getOldInvoiceNum() {
		return $this->oldInvoiceNum;
	}
	
	public function setOldInvoiceNum($oldInvoiceNum) {
		$this->oldInvoiceNum = $oldInvoiceNum;
		$this->apiParams["oldInvoiceNum"] = $oldInvoiceNum;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.electronicinvoice.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->invoiceAmount, 'invoiceAmount');
		RequestCheckUtil::checkNotNull($this->invoiceCode, 'invoiceCode');
		RequestCheckUtil::checkNotNull($this->invoiceData, 'invoiceData');
		RequestCheckUtil::checkNotNull($this->invoiceFlag, 'invoiceFlag');
		RequestCheckUtil::checkNotNull($this->invoiceHead, 'invoiceHead');
		RequestCheckUtil::checkNotNull($this->invoiceHeadType, 'invoiceHeadType');
		RequestCheckUtil::checkNotNull($this->invoiceNo, 'invoiceNo');
		RequestCheckUtil::checkNotNull($this->invoiceTime, 'invoiceTime');
		RequestCheckUtil::checkNotNull($this->invoiceType, 'invoiceType');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "addElectronicInvoice";
	}
	
}

?>