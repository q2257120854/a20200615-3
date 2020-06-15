<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-3
 */
class InvorderReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $buySign;
	
	/**
	 * 
	 */
	private $clientAddress;
	
	/**
	 * 
	 */
	private $clientBank;
	
	/**
	 * 
	 */
	private $clientBankNum;
	
	/**
	 * 
	 */
	private $clientEmail;
	
	/**
	 * 
	 */
	private $clientName;
	
	/**
	 * 
	 */
	private $clientPhone;
	
	/**
	 * 
	 */
	private $clientTaxNum;
	
	/**
	 * 
	 */
	private $clientTel;
	
	/**
	 * 
	 */
	private $clientType;
	
	/**
	 * 
	 */
	private $cmmdtys;
	
	/**
	 * 
	 */
	private $countMoney;
	
	/**
	 * 
	 */
	private $detialSign;
	
	/**
	 * 
	 */
	private $extendField;
	
	/**
	 * 
	 */
	private $howtoPrint;
	
	/**
	 * 
	 */
	private $oldTicketCode;
	
	/**
	 * 
	 */
	private $oldTicketNum;
	
	/**
	 * 
	 */
	private $orderNum;
	
	/**
	 * 
	 */
	private $orderNumPwd;
	
	/**
	 * 
	 */
	private $orderReturnNum;
	
	/**
	 * 
	 */
	private $orderTime;
	
	/**
	 * 
	 */
	private $payeeName;
	
	/**
	 * 
	 */
	private $platformCoding;
	
	/**
	 * 
	 */
	private $receiveMode;
	
	/**
	 * 
	 */
	private $remark;
	
	/**
	 * 
	 */
	private $reviwerName;
	
	/**
	 * 
	 */
	private $saleAddress;
	
	/**
	 * 
	 */
	private $saleBank;
	
	/**
	 * 
	 */
	private $saleBankNum;
	
	/**
	 * 
	 */
	private $saleName;
	
	/**
	 * 
	 */
	private $saleTaxNum;
	
	/**
	 * 
	 */
	private $saleTel;
	
	/**
	 * 
	 */
	private $specialRedSign;
	
	/**
	 * 
	 */
	private $sysSource;
	
	/**
	 * 
	 */
	private $ticketName;
	
	/**
	 * 
	 */
	private $ticketType;
	
	public function getBuySign() {
		return $this->buySign;
	}
	
	public function setBuySign($buySign) {
		$this->buySign = $buySign;
		$this->apiParams["buySign"] = $buySign;
	}
	
	public function getClientAddress() {
		return $this->clientAddress;
	}
	
	public function setClientAddress($clientAddress) {
		$this->clientAddress = $clientAddress;
		$this->apiParams["clientAddress"] = $clientAddress;
	}
	
	public function getClientBank() {
		return $this->clientBank;
	}
	
	public function setClientBank($clientBank) {
		$this->clientBank = $clientBank;
		$this->apiParams["clientBank"] = $clientBank;
	}
	
	public function getClientBankNum() {
		return $this->clientBankNum;
	}
	
	public function setClientBankNum($clientBankNum) {
		$this->clientBankNum = $clientBankNum;
		$this->apiParams["clientBankNum"] = $clientBankNum;
	}
	
	public function getClientEmail() {
		return $this->clientEmail;
	}
	
	public function setClientEmail($clientEmail) {
		$this->clientEmail = $clientEmail;
		$this->apiParams["clientEmail"] = $clientEmail;
	}
	
	public function getClientName() {
		return $this->clientName;
	}
	
	public function setClientName($clientName) {
		$this->clientName = $clientName;
		$this->apiParams["clientName"] = $clientName;
	}
	
	public function getClientPhone() {
		return $this->clientPhone;
	}
	
	public function setClientPhone($clientPhone) {
		$this->clientPhone = $clientPhone;
		$this->apiParams["clientPhone"] = $clientPhone;
	}
	
	public function getClientTaxNum() {
		return $this->clientTaxNum;
	}
	
	public function setClientTaxNum($clientTaxNum) {
		$this->clientTaxNum = $clientTaxNum;
		$this->apiParams["clientTaxNum"] = $clientTaxNum;
	}
	
	public function getClientTel() {
		return $this->clientTel;
	}
	
	public function setClientTel($clientTel) {
		$this->clientTel = $clientTel;
		$this->apiParams["clientTel"] = $clientTel;
	}
	
	public function getClientType() {
		return $this->clientType;
	}
	
	public function setClientType($clientType) {
		$this->clientType = $clientType;
		$this->apiParams["clientType"] = $clientType;
	}
	
	public function getCmmdtys() {
		return $this->cmmdtys;
	}
	
	public function setCmmdtys($cmmdtys) {
		$this->cmmdtys = $cmmdtys;
		$arr = array();
		foreach ($cmmdtys as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtys"] = $arr;
	}
	
	public function getCountMoney() {
		return $this->countMoney;
	}
	
	public function setCountMoney($countMoney) {
		$this->countMoney = $countMoney;
		$this->apiParams["countMoney"] = $countMoney;
	}
	
	public function getDetialSign() {
		return $this->detialSign;
	}
	
	public function setDetialSign($detialSign) {
		$this->detialSign = $detialSign;
		$this->apiParams["detialSign"] = $detialSign;
	}
	
	public function getExtendField() {
		return $this->extendField;
	}
	
	public function setExtendField($extendField) {
		$this->extendField = $extendField;
		$this->apiParams["extendField"] = $extendField;
	}
	
	public function getHowtoPrint() {
		return $this->howtoPrint;
	}
	
	public function setHowtoPrint($howtoPrint) {
		$this->howtoPrint = $howtoPrint;
		$this->apiParams["howtoPrint"] = $howtoPrint;
	}
	
	public function getOldTicketCode() {
		return $this->oldTicketCode;
	}
	
	public function setOldTicketCode($oldTicketCode) {
		$this->oldTicketCode = $oldTicketCode;
		$this->apiParams["oldTicketCode"] = $oldTicketCode;
	}
	
	public function getOldTicketNum() {
		return $this->oldTicketNum;
	}
	
	public function setOldTicketNum($oldTicketNum) {
		$this->oldTicketNum = $oldTicketNum;
		$this->apiParams["oldTicketNum"] = $oldTicketNum;
	}
	
	public function getOrderNum() {
		return $this->orderNum;
	}
	
	public function setOrderNum($orderNum) {
		$this->orderNum = $orderNum;
		$this->apiParams["orderNum"] = $orderNum;
	}
	
	public function getOrderNumPwd() {
		return $this->orderNumPwd;
	}
	
	public function setOrderNumPwd($orderNumPwd) {
		$this->orderNumPwd = $orderNumPwd;
		$this->apiParams["orderNumPwd"] = $orderNumPwd;
	}
	
	public function getOrderReturnNum() {
		return $this->orderReturnNum;
	}
	
	public function setOrderReturnNum($orderReturnNum) {
		$this->orderReturnNum = $orderReturnNum;
		$this->apiParams["orderReturnNum"] = $orderReturnNum;
	}
	
	public function getOrderTime() {
		return $this->orderTime;
	}
	
	public function setOrderTime($orderTime) {
		$this->orderTime = $orderTime;
		$this->apiParams["orderTime"] = $orderTime;
	}
	
	public function getPayeeName() {
		return $this->payeeName;
	}
	
	public function setPayeeName($payeeName) {
		$this->payeeName = $payeeName;
		$this->apiParams["payeeName"] = $payeeName;
	}
	
	public function getPlatformCoding() {
		return $this->platformCoding;
	}
	
	public function setPlatformCoding($platformCoding) {
		$this->platformCoding = $platformCoding;
		$this->apiParams["platformCoding"] = $platformCoding;
	}
	
	public function getReceiveMode() {
		return $this->receiveMode;
	}
	
	public function setReceiveMode($receiveMode) {
		$this->receiveMode = $receiveMode;
		$this->apiParams["receiveMode"] = $receiveMode;
	}
	
	public function getRemark() {
		return $this->remark;
	}
	
	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getReviwerName() {
		return $this->reviwerName;
	}
	
	public function setReviwerName($reviwerName) {
		$this->reviwerName = $reviwerName;
		$this->apiParams["reviwerName"] = $reviwerName;
	}
	
	public function getSaleAddress() {
		return $this->saleAddress;
	}
	
	public function setSaleAddress($saleAddress) {
		$this->saleAddress = $saleAddress;
		$this->apiParams["saleAddress"] = $saleAddress;
	}
	
	public function getSaleBank() {
		return $this->saleBank;
	}
	
	public function setSaleBank($saleBank) {
		$this->saleBank = $saleBank;
		$this->apiParams["saleBank"] = $saleBank;
	}
	
	public function getSaleBankNum() {
		return $this->saleBankNum;
	}
	
	public function setSaleBankNum($saleBankNum) {
		$this->saleBankNum = $saleBankNum;
		$this->apiParams["saleBankNum"] = $saleBankNum;
	}
	
	public function getSaleName() {
		return $this->saleName;
	}
	
	public function setSaleName($saleName) {
		$this->saleName = $saleName;
		$this->apiParams["saleName"] = $saleName;
	}
	
	public function getSaleTaxNum() {
		return $this->saleTaxNum;
	}
	
	public function setSaleTaxNum($saleTaxNum) {
		$this->saleTaxNum = $saleTaxNum;
		$this->apiParams["saleTaxNum"] = $saleTaxNum;
	}
	
	public function getSaleTel() {
		return $this->saleTel;
	}
	
	public function setSaleTel($saleTel) {
		$this->saleTel = $saleTel;
		$this->apiParams["saleTel"] = $saleTel;
	}
	
	public function getSpecialRedSign() {
		return $this->specialRedSign;
	}
	
	public function setSpecialRedSign($specialRedSign) {
		$this->specialRedSign = $specialRedSign;
		$this->apiParams["specialRedSign"] = $specialRedSign;
	}
	
	public function getSysSource() {
		return $this->sysSource;
	}
	
	public function setSysSource($sysSource) {
		$this->sysSource = $sysSource;
		$this->apiParams["sysSource"] = $sysSource;
	}
	
	public function getTicketName() {
		return $this->ticketName;
	}
	
	public function setTicketName($ticketName) {
		$this->ticketName = $ticketName;
		$this->apiParams["ticketName"] = $ticketName;
	}
	
	public function getTicketType() {
		return $this->ticketType;
	}
	
	public function setTicketType($ticketType) {
		$this->ticketType = $ticketType;
		$this->apiParams["ticketType"] = $ticketType;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.invorder.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->countMoney, 'countMoney');
		RequestCheckUtil::checkNotNull($this->detialSign, 'detialSign');
		RequestCheckUtil::checkNotNull($this->orderNum, 'orderNum');
		RequestCheckUtil::checkNotNull($this->orderTime, 'orderTime');
		RequestCheckUtil::checkNotNull($this->platformCoding, 'platformCoding');
		RequestCheckUtil::checkNotNull($this->saleTaxNum, 'saleTaxNum');
		RequestCheckUtil::checkNotNull($this->ticketType, 'ticketType');
	}
	
	public function getBizName(){
		return "receiveInvorder";
	}
	
}

class Cmmdtys {

	private $apiParams = array();
	
	private $goodContainTaxSign;
	
	private $goodCountAmount;
	
	private $goodDeductions;
	
	private $goodDiscount;
	
	private $goodGovSign;
	
	private $goodId;
	
	private $goodModel;
	
	private $goodNum;
	
	private $goodPrice;
	
	private $goodRate;
	
	private $goodsCode;
	
	private $goodSerialNum;
	
	private $goodsName;
	
	private $goodSpecialSign;
	
	private $goodTaxAmount;
	
	private $goodTaxCode;
	
	private $goodUnit;
	
	private $goodZeroTaxSign;
	
	public function getGoodContainTaxSign() {
		return $this->goodContainTaxSign;
	}

	public function setGoodContainTaxSign($goodContainTaxSign) {
		$this->goodContainTaxSign = $goodContainTaxSign;
		$this->apiParams["goodContainTaxSign"] = $goodContainTaxSign;
	}
	
	public function getGoodCountAmount() {
		return $this->goodCountAmount;
	}

	public function setGoodCountAmount($goodCountAmount) {
		$this->goodCountAmount = $goodCountAmount;
		$this->apiParams["goodCountAmount"] = $goodCountAmount;
	}
	
	public function getGoodDeductions() {
		return $this->goodDeductions;
	}

	public function setGoodDeductions($goodDeductions) {
		$this->goodDeductions = $goodDeductions;
		$this->apiParams["goodDeductions"] = $goodDeductions;
	}
	
	public function getGoodDiscount() {
		return $this->goodDiscount;
	}

	public function setGoodDiscount($goodDiscount) {
		$this->goodDiscount = $goodDiscount;
		$this->apiParams["goodDiscount"] = $goodDiscount;
	}
	
	public function getGoodGovSign() {
		return $this->goodGovSign;
	}

	public function setGoodGovSign($goodGovSign) {
		$this->goodGovSign = $goodGovSign;
		$this->apiParams["goodGovSign"] = $goodGovSign;
	}
	
	public function getGoodId() {
		return $this->goodId;
	}

	public function setGoodId($goodId) {
		$this->goodId = $goodId;
		$this->apiParams["goodId"] = $goodId;
	}
	
	public function getGoodModel() {
		return $this->goodModel;
	}

	public function setGoodModel($goodModel) {
		$this->goodModel = $goodModel;
		$this->apiParams["goodModel"] = $goodModel;
	}
	
	public function getGoodNum() {
		return $this->goodNum;
	}

	public function setGoodNum($goodNum) {
		$this->goodNum = $goodNum;
		$this->apiParams["goodNum"] = $goodNum;
	}
	
	public function getGoodPrice() {
		return $this->goodPrice;
	}

	public function setGoodPrice($goodPrice) {
		$this->goodPrice = $goodPrice;
		$this->apiParams["goodPrice"] = $goodPrice;
	}
	
	public function getGoodRate() {
		return $this->goodRate;
	}

	public function setGoodRate($goodRate) {
		$this->goodRate = $goodRate;
		$this->apiParams["goodRate"] = $goodRate;
	}
	
	public function getGoodsCode() {
		return $this->goodsCode;
	}

	public function setGoodsCode($goodsCode) {
		$this->goodsCode = $goodsCode;
		$this->apiParams["goodsCode"] = $goodsCode;
	}
	
	public function getGoodSerialNum() {
		return $this->goodSerialNum;
	}

	public function setGoodSerialNum($goodSerialNum) {
		$this->goodSerialNum = $goodSerialNum;
		$this->apiParams["goodSerialNum"] = $goodSerialNum;
	}
	
	public function getGoodsName() {
		return $this->goodsName;
	}

	public function setGoodsName($goodsName) {
		$this->goodsName = $goodsName;
		$this->apiParams["goodsName"] = $goodsName;
	}
	
	public function getGoodSpecialSign() {
		return $this->goodSpecialSign;
	}

	public function setGoodSpecialSign($goodSpecialSign) {
		$this->goodSpecialSign = $goodSpecialSign;
		$this->apiParams["goodSpecialSign"] = $goodSpecialSign;
	}
	
	public function getGoodTaxAmount() {
		return $this->goodTaxAmount;
	}

	public function setGoodTaxAmount($goodTaxAmount) {
		$this->goodTaxAmount = $goodTaxAmount;
		$this->apiParams["goodTaxAmount"] = $goodTaxAmount;
	}
	
	public function getGoodTaxCode() {
		return $this->goodTaxCode;
	}

	public function setGoodTaxCode($goodTaxCode) {
		$this->goodTaxCode = $goodTaxCode;
		$this->apiParams["goodTaxCode"] = $goodTaxCode;
	}
	
	public function getGoodUnit() {
		return $this->goodUnit;
	}

	public function setGoodUnit($goodUnit) {
		$this->goodUnit = $goodUnit;
		$this->apiParams["goodUnit"] = $goodUnit;
	}
	
	public function getGoodZeroTaxSign() {
		return $this->goodZeroTaxSign;
	}

	public function setGoodZeroTaxSign($goodZeroTaxSign) {
		$this->goodZeroTaxSign = $goodZeroTaxSign;
		$this->apiParams["goodZeroTaxSign"] = $goodZeroTaxSign;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>