<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-7-29
 */
class BtborderCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $channelCode;
	
	/**
	 * 
	 */
	private $orderDelivery;
	
	/**
	 * 
	 */
	private $orderInvoice;
	
	/**
	 * 
	 */
	private $orderItemList;
	
	/**
	 * 
	 */
	private $outerOrderNo;
	
	/**
	 * 
	 */
	private $payWay;
	
	/**
	 * 
	 */
	private $remark;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		$this->apiParams["channelCode"] = $channelCode;
	}
	
	public function getOrderDelivery() {
		return $this->orderDelivery;
	}
	
	public function setOrderDelivery($orderDelivery) {
		$this->orderDelivery = $orderDelivery;
		$this->apiParams["orderDelivery"] = $orderDelivery->getApiParams();
	}
	
	public function getOrderInvoice() {
		return $this->orderInvoice;
	}
	
	public function setOrderInvoice($orderInvoice) {
		$this->orderInvoice = $orderInvoice;
		$this->apiParams["orderInvoice"] = $orderInvoice->getApiParams();
	}
	
	public function getOrderItemList() {
		return $this->orderItemList;
	}
	
	public function setOrderItemList($orderItemList) {
		$this->orderItemList = $orderItemList;
		$arr = array();
		foreach ($orderItemList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItemList"] = $arr;
	}
	
	public function getOuterOrderNo() {
		return $this->outerOrderNo;
	}
	
	public function setOuterOrderNo($outerOrderNo) {
		$this->outerOrderNo = $outerOrderNo;
		$this->apiParams["outerOrderNo"] = $outerOrderNo;
	}
	
	public function getPayWay() {
		return $this->payWay;
	}
	
	public function setPayWay($payWay) {
		$this->payWay = $payWay;
		$this->apiParams["payWay"] = $payWay;
	}
	
	public function getRemark() {
		return $this->remark;
	}
	
	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.btborder.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "createBtborder";
	}
	
}

class OrderInvoice {

	private $apiParams = array();
	
	private $invoiceAddress;
	
	private $invoiceReceiverName;
	
	private $invoiceReceiverPhone;
	
	private $invoiceTitle;
	
	private $invoiceTitleType;
	
	private $invoiceType;
	
	private $taxPayerNo;
	
	public function getInvoiceAddress() {
		return $this->invoiceAddress;
	}

	public function setInvoiceAddress($invoiceAddress) {
		$this->invoiceAddress = $invoiceAddress;
		$this->apiParams["invoiceAddress"] = $invoiceAddress;
	}
	
	public function getInvoiceReceiverName() {
		return $this->invoiceReceiverName;
	}

	public function setInvoiceReceiverName($invoiceReceiverName) {
		$this->invoiceReceiverName = $invoiceReceiverName;
		$this->apiParams["invoiceReceiverName"] = $invoiceReceiverName;
	}
	
	public function getInvoiceReceiverPhone() {
		return $this->invoiceReceiverPhone;
	}

	public function setInvoiceReceiverPhone($invoiceReceiverPhone) {
		$this->invoiceReceiverPhone = $invoiceReceiverPhone;
		$this->apiParams["invoiceReceiverPhone"] = $invoiceReceiverPhone;
	}
	
	public function getInvoiceTitle() {
		return $this->invoiceTitle;
	}

	public function setInvoiceTitle($invoiceTitle) {
		$this->invoiceTitle = $invoiceTitle;
		$this->apiParams["invoiceTitle"] = $invoiceTitle;
	}
	
	public function getInvoiceTitleType() {
		return $this->invoiceTitleType;
	}

	public function setInvoiceTitleType($invoiceTitleType) {
		$this->invoiceTitleType = $invoiceTitleType;
		$this->apiParams["invoiceTitleType"] = $invoiceTitleType;
	}
	
	public function getInvoiceType() {
		return $this->invoiceType;
	}

	public function setInvoiceType($invoiceType) {
		$this->invoiceType = $invoiceType;
		$this->apiParams["invoiceType"] = $invoiceType;
	}
	
	public function getTaxPayerNo() {
		return $this->taxPayerNo;
	}

	public function setTaxPayerNo($taxPayerNo) {
		$this->taxPayerNo = $taxPayerNo;
		$this->apiParams["taxPayerNo"] = $taxPayerNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class OrderDelivery {

	private $apiParams = array();
	
	private $buyerAddress;
	
	private $cityCode;
	
	private $districtCode;
	
	private $provinceCode;
	
	private $receiverName;
	
	private $receiverPhone;
	
	private $townCode;
	
	public function getBuyerAddress() {
		return $this->buyerAddress;
	}

	public function setBuyerAddress($buyerAddress) {
		$this->buyerAddress = $buyerAddress;
		$this->apiParams["buyerAddress"] = $buyerAddress;
	}
	
	public function getCityCode() {
		return $this->cityCode;
	}

	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
	public function getDistrictCode() {
		return $this->districtCode;
	}

	public function setDistrictCode($districtCode) {
		$this->districtCode = $districtCode;
		$this->apiParams["districtCode"] = $districtCode;
	}
	
	public function getProvinceCode() {
		return $this->provinceCode;
	}

	public function setProvinceCode($provinceCode) {
		$this->provinceCode = $provinceCode;
		$this->apiParams["provinceCode"] = $provinceCode;
	}
	
	public function getReceiverName() {
		return $this->receiverName;
	}

	public function setReceiverName($receiverName) {
		$this->receiverName = $receiverName;
		$this->apiParams["receiverName"] = $receiverName;
	}
	
	public function getReceiverPhone() {
		return $this->receiverPhone;
	}

	public function setReceiverPhone($receiverPhone) {
		$this->receiverPhone = $receiverPhone;
		$this->apiParams["receiverPhone"] = $receiverPhone;
	}
	
	public function getTownCode() {
		return $this->townCode;
	}

	public function setTownCode($townCode) {
		$this->townCode = $townCode;
		$this->apiParams["townCode"] = $townCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class OrderItemList {

	private $apiParams = array();
	
	private $bookTimeDetail;
	
	private $cmmdtyCode;
	
	private $distributorCode;
	
	private $hopeArrivalTime;
	
	private $installFlag;
	
	private $itemTotalFare;
	
	private $outerOrderItemNo;
	
	private $price;
	
	private $quantity;
	
	private $serviceCmmdtyCode;
	
	public function getBookTimeDetail() {
		return $this->bookTimeDetail;
	}

	public function setBookTimeDetail($bookTimeDetail) {
		$this->bookTimeDetail = $bookTimeDetail;
		$this->apiParams["bookTimeDetail"] = $bookTimeDetail;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getDistributorCode() {
		return $this->distributorCode;
	}

	public function setDistributorCode($distributorCode) {
		$this->distributorCode = $distributorCode;
		$this->apiParams["distributorCode"] = $distributorCode;
	}
	
	public function getHopeArrivalTime() {
		return $this->hopeArrivalTime;
	}

	public function setHopeArrivalTime($hopeArrivalTime) {
		$this->hopeArrivalTime = $hopeArrivalTime;
		$this->apiParams["hopeArrivalTime"] = $hopeArrivalTime;
	}
	
	public function getInstallFlag() {
		return $this->installFlag;
	}

	public function setInstallFlag($installFlag) {
		$this->installFlag = $installFlag;
		$this->apiParams["installFlag"] = $installFlag;
	}
	
	public function getItemTotalFare() {
		return $this->itemTotalFare;
	}

	public function setItemTotalFare($itemTotalFare) {
		$this->itemTotalFare = $itemTotalFare;
		$this->apiParams["itemTotalFare"] = $itemTotalFare;
	}
	
	public function getOuterOrderItemNo() {
		return $this->outerOrderItemNo;
	}

	public function setOuterOrderItemNo($outerOrderItemNo) {
		$this->outerOrderItemNo = $outerOrderItemNo;
		$this->apiParams["outerOrderItemNo"] = $outerOrderItemNo;
	}
	
	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getQuantity() {
		return $this->quantity;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
		$this->apiParams["quantity"] = $quantity;
	}
	
	public function getServiceCmmdtyCode() {
		return $this->serviceCmmdtyCode;
	}

	public function setServiceCmmdtyCode($serviceCmmdtyCode) {
		$this->serviceCmmdtyCode = $serviceCmmdtyCode;
		$this->apiParams["serviceCmmdtyCode"] = $serviceCmmdtyCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>