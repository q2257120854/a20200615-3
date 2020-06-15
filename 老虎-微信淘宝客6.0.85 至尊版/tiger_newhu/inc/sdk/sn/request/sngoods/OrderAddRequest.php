<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-25
 */
class OrderAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $address;
	
	/**
	 * 
	 */
	private $amount;
	
	/**
	 * 
	 */
	private $channelcode;
	
	/**
	 * 
	 */
	private $cityId;
	
	/**
	 * 
	 */
	private $countyId;
	
	/**
	 * 
	 */
	private $hopeArrivalTime;
	
	/**
	 * 
	 */
	private $invoiceState;
	
	/**
	 * 
	 */
	private $invoiceTitle;
	
	/**
	 * 
	 */
	private $invoiceType;
	
	/**
	 * 
	 */
	private $mobile;
	
	/**
	 * 
	 */
	private $payment;
	
	/**
	 * 
	 */
	private $provinceId;
	
	/**
	 * 
	 */
	private $receiverName;
	
	/**
	 * 
	 */
	private $remark;
	
	/**
	 * 
	 */
	private $servFee;
	
	/**
	 * 
	 */
	private $sku;
	
	/**
	 * 
	 */
	private $specialVatTicket;
	
	/**
	 * 
	 */
	private $telephone;
	
	/**
	 * 
	 */
	private $townId;
	
	/**
	 * 
	 */
	private $tradeNo;
	
	public function getAddress() {
		return $this->address;
	}
	
	public function setAddress($address) {
		$this->address = $address;
		$this->apiParams["address"] = $address;
	}
	
	public function getAmount() {
		return $this->amount;
	}
	
	public function setAmount($amount) {
		$this->amount = $amount;
		$this->apiParams["amount"] = $amount;
	}
	
	public function getChannelcode() {
		return $this->channelcode;
	}
	
	public function setChannelcode($channelcode) {
		$this->channelcode = $channelcode;
		$this->apiParams["channelcode"] = $channelcode;
	}
	
	public function getCityId() {
		return $this->cityId;
	}
	
	public function setCityId($cityId) {
		$this->cityId = $cityId;
		$this->apiParams["cityId"] = $cityId;
	}
	
	public function getCountyId() {
		return $this->countyId;
	}
	
	public function setCountyId($countyId) {
		$this->countyId = $countyId;
		$this->apiParams["countyId"] = $countyId;
	}
	
	public function getHopeArrivalTime() {
		return $this->hopeArrivalTime;
	}
	
	public function setHopeArrivalTime($hopeArrivalTime) {
		$this->hopeArrivalTime = $hopeArrivalTime;
		$this->apiParams["hopeArrivalTime"] = $hopeArrivalTime;
	}
	
	public function getInvoiceState() {
		return $this->invoiceState;
	}
	
	public function setInvoiceState($invoiceState) {
		$this->invoiceState = $invoiceState;
		$this->apiParams["invoiceState"] = $invoiceState;
	}
	
	public function getInvoiceTitle() {
		return $this->invoiceTitle;
	}
	
	public function setInvoiceTitle($invoiceTitle) {
		$this->invoiceTitle = $invoiceTitle;
		$this->apiParams["invoiceTitle"] = $invoiceTitle;
	}
	
	public function getInvoiceType() {
		return $this->invoiceType;
	}
	
	public function setInvoiceType($invoiceType) {
		$this->invoiceType = $invoiceType;
		$this->apiParams["invoiceType"] = $invoiceType;
	}
	
	public function getMobile() {
		return $this->mobile;
	}
	
	public function setMobile($mobile) {
		$this->mobile = $mobile;
		$this->apiParams["mobile"] = $mobile;
	}
	
	public function getPayment() {
		return $this->payment;
	}
	
	public function setPayment($payment) {
		$this->payment = $payment;
		$this->apiParams["payment"] = $payment;
	}
	
	public function getProvinceId() {
		return $this->provinceId;
	}
	
	public function setProvinceId($provinceId) {
		$this->provinceId = $provinceId;
		$this->apiParams["provinceId"] = $provinceId;
	}
	
	public function getReceiverName() {
		return $this->receiverName;
	}
	
	public function setReceiverName($receiverName) {
		$this->receiverName = $receiverName;
		$this->apiParams["receiverName"] = $receiverName;
	}
	
	public function getRemark() {
		return $this->remark;
	}
	
	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getServFee() {
		return $this->servFee;
	}
	
	public function setServFee($servFee) {
		$this->servFee = $servFee;
		$this->apiParams["servFee"] = $servFee;
	}
	
	public function getSku() {
		return $this->sku;
	}
	
	public function setSku($sku) {
		$this->sku = $sku;
		$arr = array();
		foreach ($sku as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["sku"] = $arr;
	}
	
	public function getSpecialVatTicket() {
		return $this->specialVatTicket;
	}
	
	public function setSpecialVatTicket($specialVatTicket) {
		$this->specialVatTicket = $specialVatTicket;
		$this->apiParams["specialVatTicket"] = $specialVatTicket->getApiParams();
	}
	
	public function getTelephone() {
		return $this->telephone;
	}
	
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
		$this->apiParams["telephone"] = $telephone;
	}
	
	public function getTownId() {
		return $this->townId;
	}
	
	public function setTownId($townId) {
		$this->townId = $townId;
		$this->apiParams["townId"] = $townId;
	}
	
	public function getTradeNo() {
		return $this->tradeNo;
	}
	
	public function setTradeNo($tradeNo) {
		$this->tradeNo = $tradeNo;
		$this->apiParams["tradeNo"] = $tradeNo;
	}
	
	public function getApiMethodName(){
		return 'suning.sngoods.order.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->address, 'address');
		RequestCheckUtil::checkNotNull($this->channelcode, 'channelcode');
		RequestCheckUtil::checkNotNull($this->cityId, 'cityId');
		RequestCheckUtil::checkNotNull($this->countyId, 'countyId');
		RequestCheckUtil::checkNotNull($this->invoiceState, 'invoiceState');
		RequestCheckUtil::checkNotNull($this->mobile, 'mobile');
		RequestCheckUtil::checkNotNull($this->payment, 'payment');
		RequestCheckUtil::checkNotNull($this->provinceId, 'provinceId');
		RequestCheckUtil::checkNotNull($this->receiverName, 'receiverName');
		RequestCheckUtil::checkNotNull($this->tradeNo, 'tradeNo');
	}
	
	public function getBizName(){
		return "addOrder";
	}
	
}

class SpecialVatTicket {

	private $apiParams = array();
	
	private $consigneeAddress;
	
	private $consigneeMobileNum;
	
	private $consigneeName;
	
	private $regAccount;
	
	private $regAdd;
	
	private $regBank;
	
	private $regTel;
	
	private $taxNo;
	
	public function getConsigneeAddress() {
		return $this->consigneeAddress;
	}

	public function setConsigneeAddress($consigneeAddress) {
		$this->consigneeAddress = $consigneeAddress;
		$this->apiParams["consigneeAddress"] = $consigneeAddress;
	}
	
	public function getConsigneeMobileNum() {
		return $this->consigneeMobileNum;
	}

	public function setConsigneeMobileNum($consigneeMobileNum) {
		$this->consigneeMobileNum = $consigneeMobileNum;
		$this->apiParams["consigneeMobileNum"] = $consigneeMobileNum;
	}
	
	public function getConsigneeName() {
		return $this->consigneeName;
	}

	public function setConsigneeName($consigneeName) {
		$this->consigneeName = $consigneeName;
		$this->apiParams["consigneeName"] = $consigneeName;
	}
	
	public function getRegAccount() {
		return $this->regAccount;
	}

	public function setRegAccount($regAccount) {
		$this->regAccount = $regAccount;
		$this->apiParams["regAccount"] = $regAccount;
	}
	
	public function getRegAdd() {
		return $this->regAdd;
	}

	public function setRegAdd($regAdd) {
		$this->regAdd = $regAdd;
		$this->apiParams["regAdd"] = $regAdd;
	}
	
	public function getRegBank() {
		return $this->regBank;
	}

	public function setRegBank($regBank) {
		$this->regBank = $regBank;
		$this->apiParams["regBank"] = $regBank;
	}
	
	public function getRegTel() {
		return $this->regTel;
	}

	public function setRegTel($regTel) {
		$this->regTel = $regTel;
		$this->apiParams["regTel"] = $regTel;
	}
	
	public function getTaxNo() {
		return $this->taxNo;
	}

	public function setTaxNo($taxNo) {
		$this->taxNo = $taxNo;
		$this->apiParams["taxNo"] = $taxNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class Sku {

	private $apiParams = array();
	
	private $num;
	
	private $skuId;
	
	private $supplierCode;
	
	private $unitPrice;
	
	public function getNum() {
		return $this->num;
	}

	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}

	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getUnitPrice() {
		return $this->unitPrice;
	}

	public function setUnitPrice($unitPrice) {
		$this->unitPrice = $unitPrice;
		$this->apiParams["unitPrice"] = $unitPrice;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>