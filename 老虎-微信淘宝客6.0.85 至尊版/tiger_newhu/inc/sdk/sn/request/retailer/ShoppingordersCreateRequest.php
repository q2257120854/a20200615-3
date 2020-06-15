<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-3
 */
class ShoppingordersCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $buyerName;
	
	/**
	 * 
	 */
	private $buyerPhone;
	
	/**
	 * 
	 */
	private $createCode;
	
	/**
	 * 
	 */
	private $discountAmount;
	
	/**
	 * 
	 */
	private $discountCode;
	
	/**
	 * 
	 */
	private $installDelivery;
	
	/**
	 * 
	 */
	private $merchantCustNo;
	
	/**
	 * 
	 */
	private $orderAmount;
	
	/**
	 * 
	 */
	private $orderDelivery;
	
	/**
	 * 
	 */
	private $orderFrom;
	
	/**
	 * 
	 */
	private $orderItem;
	
	/**
	 * 
	 */
	private $outerOrderNo;
	
	/**
	 * 
	 */
	private $payAmount;
	
	/**
	 * 
	 */
	private $posCode;
	
	/**
	 * 
	 */
	private $remark;
	
	/**
	 * 
	 */
	private $salesMode;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $userCode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getBuyerName() {
		return $this->buyerName;
	}
	
	public function setBuyerName($buyerName) {
		$this->buyerName = $buyerName;
		$this->apiParams["buyerName"] = $buyerName;
	}
	
	public function getBuyerPhone() {
		return $this->buyerPhone;
	}
	
	public function setBuyerPhone($buyerPhone) {
		$this->buyerPhone = $buyerPhone;
		$this->apiParams["buyerPhone"] = $buyerPhone;
	}
	
	public function getCreateCode() {
		return $this->createCode;
	}
	
	public function setCreateCode($createCode) {
		$this->createCode = $createCode;
		$this->apiParams["createCode"] = $createCode;
	}
	
	public function getDiscountAmount() {
		return $this->discountAmount;
	}
	
	public function setDiscountAmount($discountAmount) {
		$this->discountAmount = $discountAmount;
		$this->apiParams["discountAmount"] = $discountAmount;
	}
	
	public function getDiscountCode() {
		return $this->discountCode;
	}
	
	public function setDiscountCode($discountCode) {
		$this->discountCode = $discountCode;
		$this->apiParams["discountCode"] = $discountCode;
	}
	
	public function getInstallDelivery() {
		return $this->installDelivery;
	}
	
	public function setInstallDelivery($installDelivery) {
		$this->installDelivery = $installDelivery;
		$this->apiParams["installDelivery"] = $installDelivery->getApiParams();
	}
	
	public function getMerchantCustNo() {
		return $this->merchantCustNo;
	}
	
	public function setMerchantCustNo($merchantCustNo) {
		$this->merchantCustNo = $merchantCustNo;
		$this->apiParams["merchantCustNo"] = $merchantCustNo;
	}
	
	public function getOrderAmount() {
		return $this->orderAmount;
	}
	
	public function setOrderAmount($orderAmount) {
		$this->orderAmount = $orderAmount;
		$this->apiParams["orderAmount"] = $orderAmount;
	}
	
	public function getOrderDelivery() {
		return $this->orderDelivery;
	}
	
	public function setOrderDelivery($orderDelivery) {
		$this->orderDelivery = $orderDelivery;
		$this->apiParams["orderDelivery"] = $orderDelivery->getApiParams();
	}
	
	public function getOrderFrom() {
		return $this->orderFrom;
	}
	
	public function setOrderFrom($orderFrom) {
		$this->orderFrom = $orderFrom;
		$this->apiParams["orderFrom"] = $orderFrom;
	}
	
	public function getOrderItem() {
		return $this->orderItem;
	}
	
	public function setOrderItem($orderItem) {
		$this->orderItem = $orderItem;
		$arr = array();
		foreach ($orderItem as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItem"] = $arr;
	}
	
	public function getOuterOrderNo() {
		return $this->outerOrderNo;
	}
	
	public function setOuterOrderNo($outerOrderNo) {
		$this->outerOrderNo = $outerOrderNo;
		$this->apiParams["outerOrderNo"] = $outerOrderNo;
	}
	
	public function getPayAmount() {
		return $this->payAmount;
	}
	
	public function setPayAmount($payAmount) {
		$this->payAmount = $payAmount;
		$this->apiParams["payAmount"] = $payAmount;
	}
	
	public function getPosCode() {
		return $this->posCode;
	}
	
	public function setPosCode($posCode) {
		$this->posCode = $posCode;
		$this->apiParams["posCode"] = $posCode;
	}
	
	public function getRemark() {
		return $this->remark;
	}
	
	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getSalesMode() {
		return $this->salesMode;
	}
	
	public function setSalesMode($salesMode) {
		$this->salesMode = $salesMode;
		$this->apiParams["salesMode"] = $salesMode;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getUserCode() {
		return $this->userCode;
	}
	
	public function setUserCode($userCode) {
		$this->userCode = $userCode;
		$this->apiParams["userCode"] = $userCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.shoppingorders.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->buyerPhone, 'buyerPhone');
		RequestCheckUtil::checkNotNull($this->discountAmount, 'discountAmount');
		RequestCheckUtil::checkNotNull($this->merchantCustNo, 'merchantCustNo');
		RequestCheckUtil::checkNotNull($this->orderAmount, 'orderAmount');
		RequestCheckUtil::checkNotNull($this->orderFrom, 'orderFrom');
		RequestCheckUtil::checkNotNull($this->outerOrderNo, 'outerOrderNo');
		RequestCheckUtil::checkNotNull($this->payAmount, 'payAmount');
		RequestCheckUtil::checkNotNull($this->salesMode, 'salesMode');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "createShoppingorders";
	}
	
}

class InstallDelivery {

	private $apiParams = array();
	
	private $installBuyerAddress;
	
	private $installCityCode;
	
	private $installCityName;
	
	private $installDistrictCode;
	
	private $installDistrictName;
	
	private $installName;
	
	private $installPhone;
	
	private $installProvinceCode;
	
	private $installProvinceName;
	
	private $installTownCode;
	
	private $installTownName;
	
	public function getInstallBuyerAddress() {
		return $this->installBuyerAddress;
	}

	public function setInstallBuyerAddress($installBuyerAddress) {
		$this->installBuyerAddress = $installBuyerAddress;
		$this->apiParams["installBuyerAddress"] = $installBuyerAddress;
	}
	
	public function getInstallCityCode() {
		return $this->installCityCode;
	}

	public function setInstallCityCode($installCityCode) {
		$this->installCityCode = $installCityCode;
		$this->apiParams["installCityCode"] = $installCityCode;
	}
	
	public function getInstallCityName() {
		return $this->installCityName;
	}

	public function setInstallCityName($installCityName) {
		$this->installCityName = $installCityName;
		$this->apiParams["installCityName"] = $installCityName;
	}
	
	public function getInstallDistrictCode() {
		return $this->installDistrictCode;
	}

	public function setInstallDistrictCode($installDistrictCode) {
		$this->installDistrictCode = $installDistrictCode;
		$this->apiParams["installDistrictCode"] = $installDistrictCode;
	}
	
	public function getInstallDistrictName() {
		return $this->installDistrictName;
	}

	public function setInstallDistrictName($installDistrictName) {
		$this->installDistrictName = $installDistrictName;
		$this->apiParams["installDistrictName"] = $installDistrictName;
	}
	
	public function getInstallName() {
		return $this->installName;
	}

	public function setInstallName($installName) {
		$this->installName = $installName;
		$this->apiParams["installName"] = $installName;
	}
	
	public function getInstallPhone() {
		return $this->installPhone;
	}

	public function setInstallPhone($installPhone) {
		$this->installPhone = $installPhone;
		$this->apiParams["installPhone"] = $installPhone;
	}
	
	public function getInstallProvinceCode() {
		return $this->installProvinceCode;
	}

	public function setInstallProvinceCode($installProvinceCode) {
		$this->installProvinceCode = $installProvinceCode;
		$this->apiParams["installProvinceCode"] = $installProvinceCode;
	}
	
	public function getInstallProvinceName() {
		return $this->installProvinceName;
	}

	public function setInstallProvinceName($installProvinceName) {
		$this->installProvinceName = $installProvinceName;
		$this->apiParams["installProvinceName"] = $installProvinceName;
	}
	
	public function getInstallTownCode() {
		return $this->installTownCode;
	}

	public function setInstallTownCode($installTownCode) {
		$this->installTownCode = $installTownCode;
		$this->apiParams["installTownCode"] = $installTownCode;
	}
	
	public function getInstallTownName() {
		return $this->installTownName;
	}

	public function setInstallTownName($installTownName) {
		$this->installTownName = $installTownName;
		$this->apiParams["installTownName"] = $installTownName;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class OrderDelivery {

	private $apiParams = array();
	
	private $buyerAddress;
	
	private $cityCode;
	
	private $cityName;
	
	private $districtCode;
	
	private $districtName;
	
	private $provinceCode;
	
	private $provinceName;
	
	private $receiverName;
	
	private $receiverPhone;
	
	private $townCode;
	
	private $townName;
	
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
	
	public function getCityName() {
		return $this->cityName;
	}

	public function setCityName($cityName) {
		$this->cityName = $cityName;
		$this->apiParams["cityName"] = $cityName;
	}
	
	public function getDistrictCode() {
		return $this->districtCode;
	}

	public function setDistrictCode($districtCode) {
		$this->districtCode = $districtCode;
		$this->apiParams["districtCode"] = $districtCode;
	}
	
	public function getDistrictName() {
		return $this->districtName;
	}

	public function setDistrictName($districtName) {
		$this->districtName = $districtName;
		$this->apiParams["districtName"] = $districtName;
	}
	
	public function getProvinceCode() {
		return $this->provinceCode;
	}

	public function setProvinceCode($provinceCode) {
		$this->provinceCode = $provinceCode;
		$this->apiParams["provinceCode"] = $provinceCode;
	}
	
	public function getProvinceName() {
		return $this->provinceName;
	}

	public function setProvinceName($provinceName) {
		$this->provinceName = $provinceName;
		$this->apiParams["provinceName"] = $provinceName;
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
	
	public function getTownName() {
		return $this->townName;
	}

	public function setTownName($townName) {
		$this->townName = $townName;
		$this->apiParams["townName"] = $townName;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class OrderItem {

	private $apiParams = array();
	
	private $bookTimeDetail;
	
	private $cmmdtyCode;
	
	private $cmmdtyName;
	
	private $hopeArrivalTime;
	
	private $installFlag;
	
	private $orderType;
	
	private $outerOrderItemNo;
	
	private $quantity;
	
	private $sellPrice;
	
	private $serviceCode;
	
	private $shipMethod;
	
	private $supplierCode;
	
	private $supplierName;
	
	private $totalPayAmount;
	
	private $unitPrice;
	
	private $distributorCode;
	
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
	
	public function getCmmdtyName() {
		return $this->cmmdtyName;
	}

	public function setCmmdtyName($cmmdtyName) {
		$this->cmmdtyName = $cmmdtyName;
		$this->apiParams["cmmdtyName"] = $cmmdtyName;
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
	
	public function getOrderType() {
		return $this->orderType;
	}

	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	public function getOuterOrderItemNo() {
		return $this->outerOrderItemNo;
	}

	public function setOuterOrderItemNo($outerOrderItemNo) {
		$this->outerOrderItemNo = $outerOrderItemNo;
		$this->apiParams["outerOrderItemNo"] = $outerOrderItemNo;
	}
	
	public function getQuantity() {
		return $this->quantity;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
		$this->apiParams["quantity"] = $quantity;
	}
	
	public function getSellPrice() {
		return $this->sellPrice;
	}

	public function setSellPrice($sellPrice) {
		$this->sellPrice = $sellPrice;
		$this->apiParams["sellPrice"] = $sellPrice;
	}
	
	public function getServiceCode() {
		return $this->serviceCode;
	}

	public function setServiceCode($serviceCode) {
		$this->serviceCode = $serviceCode;
		$this->apiParams["serviceCode"] = $serviceCode;
	}
	
	public function getShipMethod() {
		return $this->shipMethod;
	}

	public function setShipMethod($shipMethod) {
		$this->shipMethod = $shipMethod;
		$this->apiParams["shipMethod"] = $shipMethod;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getSupplierName() {
		return $this->supplierName;
	}

	public function setSupplierName($supplierName) {
		$this->supplierName = $supplierName;
		$this->apiParams["supplierName"] = $supplierName;
	}
	
	public function getTotalPayAmount() {
		return $this->totalPayAmount;
	}

	public function setTotalPayAmount($totalPayAmount) {
		$this->totalPayAmount = $totalPayAmount;
		$this->apiParams["totalPayAmount"] = $totalPayAmount;
	}
	
	public function getUnitPrice() {
		return $this->unitPrice;
	}

	public function setUnitPrice($unitPrice) {
		$this->unitPrice = $unitPrice;
		$this->apiParams["unitPrice"] = $unitPrice;
	}
	
	public function getDistributorCode() {
		return $this->distributorCode;
	}

	public function setDistributorCode($distributorCode) {
		$this->distributorCode = $distributorCode;
		$this->apiParams["distributorCode"] = $distributorCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>