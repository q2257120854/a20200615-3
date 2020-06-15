<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-3-8
 */
class ExpressorderAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $expressCompCode;
	
	/**
	 * 
	 */
	private $marketingProduct;
	
	/**
	 * 
	 */
	private $orderSource;
	
	/**
	 * 
	 */
	private $packageList;
	
	/**
	 * 
	 */
	private $receiverAddressDetail;
	
	/**
	 * 
	 */
	private $receiverCity;
	
	/**
	 * 
	 */
	private $receiverCompany;
	
	/**
	 * 
	 */
	private $receiverDistrict;
	
	/**
	 * 
	 */
	private $receiverMobile;
	
	/**
	 * 
	 */
	private $receiverName;
	
	/**
	 * 
	 */
	private $receiverProvince;
	
	/**
	 * 
	 */
	private $receiverTel;
	
	/**
	 * 
	 */
	private $receiverTown;
	
	/**
	 * 
	 */
	private $senderAddressDetail;
	
	/**
	 * 
	 */
	private $senderCity;
	
	/**
	 * 
	 */
	private $senderCompany;
	
	/**
	 * 
	 */
	private $senderDistrict;
	
	/**
	 * 
	 */
	private $senderMobile;
	
	/**
	 * 
	 */
	private $senderName;
	
	/**
	 * 
	 */
	private $senderProvince;
	
	/**
	 * 
	 */
	private $senderTel;
	
	/**
	 * 
	 */
	private $senderTown;
	
	/**
	 * 
	 */
	private $uuid;
	
	public function getExpressCompCode() {
		return $this->expressCompCode;
	}
	
	public function setExpressCompCode($expressCompCode) {
		$this->expressCompCode = $expressCompCode;
		$this->apiParams["expressCompCode"] = $expressCompCode;
	}
	
	public function getMarketingProduct() {
		return $this->marketingProduct;
	}
	
	public function setMarketingProduct($marketingProduct) {
		$this->marketingProduct = $marketingProduct;
		$this->apiParams["marketingProduct"] = $marketingProduct;
	}
	
	public function getOrderSource() {
		return $this->orderSource;
	}
	
	public function setOrderSource($orderSource) {
		$this->orderSource = $orderSource;
		$this->apiParams["orderSource"] = $orderSource;
	}
	
	public function getPackageList() {
		return $this->packageList;
	}
	
	public function setPackageList($packageList) {
		$this->packageList = $packageList;
		$arr = array();
		foreach ($packageList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["packageList"] = $arr;
	}
	
	public function getReceiverAddressDetail() {
		return $this->receiverAddressDetail;
	}
	
	public function setReceiverAddressDetail($receiverAddressDetail) {
		$this->receiverAddressDetail = $receiverAddressDetail;
		$this->apiParams["receiverAddressDetail"] = $receiverAddressDetail;
	}
	
	public function getReceiverCity() {
		return $this->receiverCity;
	}
	
	public function setReceiverCity($receiverCity) {
		$this->receiverCity = $receiverCity;
		$this->apiParams["receiverCity"] = $receiverCity;
	}
	
	public function getReceiverCompany() {
		return $this->receiverCompany;
	}
	
	public function setReceiverCompany($receiverCompany) {
		$this->receiverCompany = $receiverCompany;
		$this->apiParams["receiverCompany"] = $receiverCompany;
	}
	
	public function getReceiverDistrict() {
		return $this->receiverDistrict;
	}
	
	public function setReceiverDistrict($receiverDistrict) {
		$this->receiverDistrict = $receiverDistrict;
		$this->apiParams["receiverDistrict"] = $receiverDistrict;
	}
	
	public function getReceiverMobile() {
		return $this->receiverMobile;
	}
	
	public function setReceiverMobile($receiverMobile) {
		$this->receiverMobile = $receiverMobile;
		$this->apiParams["receiverMobile"] = $receiverMobile;
	}
	
	public function getReceiverName() {
		return $this->receiverName;
	}
	
	public function setReceiverName($receiverName) {
		$this->receiverName = $receiverName;
		$this->apiParams["receiverName"] = $receiverName;
	}
	
	public function getReceiverProvince() {
		return $this->receiverProvince;
	}
	
	public function setReceiverProvince($receiverProvince) {
		$this->receiverProvince = $receiverProvince;
		$this->apiParams["receiverProvince"] = $receiverProvince;
	}
	
	public function getReceiverTel() {
		return $this->receiverTel;
	}
	
	public function setReceiverTel($receiverTel) {
		$this->receiverTel = $receiverTel;
		$this->apiParams["receiverTel"] = $receiverTel;
	}
	
	public function getReceiverTown() {
		return $this->receiverTown;
	}
	
	public function setReceiverTown($receiverTown) {
		$this->receiverTown = $receiverTown;
		$this->apiParams["receiverTown"] = $receiverTown;
	}
	
	public function getSenderAddressDetail() {
		return $this->senderAddressDetail;
	}
	
	public function setSenderAddressDetail($senderAddressDetail) {
		$this->senderAddressDetail = $senderAddressDetail;
		$this->apiParams["senderAddressDetail"] = $senderAddressDetail;
	}
	
	public function getSenderCity() {
		return $this->senderCity;
	}
	
	public function setSenderCity($senderCity) {
		$this->senderCity = $senderCity;
		$this->apiParams["senderCity"] = $senderCity;
	}
	
	public function getSenderCompany() {
		return $this->senderCompany;
	}
	
	public function setSenderCompany($senderCompany) {
		$this->senderCompany = $senderCompany;
		$this->apiParams["senderCompany"] = $senderCompany;
	}
	
	public function getSenderDistrict() {
		return $this->senderDistrict;
	}
	
	public function setSenderDistrict($senderDistrict) {
		$this->senderDistrict = $senderDistrict;
		$this->apiParams["senderDistrict"] = $senderDistrict;
	}
	
	public function getSenderMobile() {
		return $this->senderMobile;
	}
	
	public function setSenderMobile($senderMobile) {
		$this->senderMobile = $senderMobile;
		$this->apiParams["senderMobile"] = $senderMobile;
	}
	
	public function getSenderName() {
		return $this->senderName;
	}
	
	public function setSenderName($senderName) {
		$this->senderName = $senderName;
		$this->apiParams["senderName"] = $senderName;
	}
	
	public function getSenderProvince() {
		return $this->senderProvince;
	}
	
	public function setSenderProvince($senderProvince) {
		$this->senderProvince = $senderProvince;
		$this->apiParams["senderProvince"] = $senderProvince;
	}
	
	public function getSenderTel() {
		return $this->senderTel;
	}
	
	public function setSenderTel($senderTel) {
		$this->senderTel = $senderTel;
		$this->apiParams["senderTel"] = $senderTel;
	}
	
	public function getSenderTown() {
		return $this->senderTown;
	}
	
	public function setSenderTown($senderTown) {
		$this->senderTown = $senderTown;
		$this->apiParams["senderTown"] = $senderTown;
	}
	
	public function getUuid() {
		return $this->uuid;
	}
	
	public function setUuid($uuid) {
		$this->uuid = $uuid;
		$this->apiParams["uuid"] = $uuid;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.expressorder.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->expressCompCode, 'expressCompCode');
		RequestCheckUtil::checkNotNull($this->marketingProduct, 'marketingProduct');
		RequestCheckUtil::checkNotNull($this->orderSource, 'orderSource');
		RequestCheckUtil::checkNotNull($this->receiverAddressDetail, 'receiverAddressDetail');
		RequestCheckUtil::checkNotNull($this->receiverCity, 'receiverCity');
		RequestCheckUtil::checkNotNull($this->receiverDistrict, 'receiverDistrict');
		RequestCheckUtil::checkNotNull($this->receiverName, 'receiverName');
		RequestCheckUtil::checkNotNull($this->receiverProvince, 'receiverProvince');
		RequestCheckUtil::checkNotNull($this->senderAddressDetail, 'senderAddressDetail');
		RequestCheckUtil::checkNotNull($this->senderCity, 'senderCity');
		RequestCheckUtil::checkNotNull($this->senderDistrict, 'senderDistrict');
		RequestCheckUtil::checkNotNull($this->senderName, 'senderName');
		RequestCheckUtil::checkNotNull($this->senderProvince, 'senderProvince');
		RequestCheckUtil::checkNotNull($this->uuid, 'uuid');
	}
	
	public function getBizName(){
		return "addExpressorder";
	}
	
}

class PackageList {

	private $apiParams = array();
	
	private $agentAmount;
	
	private $agentOption;
	
	private $carFlag;
	
	private $dstributeAndInstall;
	
	private $expressNo;
	
	private $fullCarType;
	
	private $goodsQty;
	
	private $insyredValue;
	
	private $outOrderNum;
	
	private $packageComment;
	
	private $packageHeight;
	
	private $packageLength;
	
	private $packageName;
	
	private $packageNo;
	
	private $packageVolume;
	
	private $packageWeight;
	
	private $packageWidth;
	
	private $packing;
	
	private $pickupMode;
	
	private $selfFeedingPoint;
	
	private $serviceMode;
	
	private $signReturn;
	
	private $specialCarType;
	
	private $transportType;
	
	public function getAgentAmount() {
		return $this->agentAmount;
	}

	public function setAgentAmount($agentAmount) {
		$this->agentAmount = $agentAmount;
		$this->apiParams["agentAmount"] = $agentAmount;
	}
	
	public function getAgentOption() {
		return $this->agentOption;
	}

	public function setAgentOption($agentOption) {
		$this->agentOption = $agentOption;
		$this->apiParams["agentOption"] = $agentOption;
	}
	
	public function getCarFlag() {
		return $this->carFlag;
	}

	public function setCarFlag($carFlag) {
		$this->carFlag = $carFlag;
		$this->apiParams["carFlag"] = $carFlag;
	}
	
	public function getDstributeAndInstall() {
		return $this->dstributeAndInstall;
	}

	public function setDstributeAndInstall($dstributeAndInstall) {
		$this->dstributeAndInstall = $dstributeAndInstall;
		$this->apiParams["dstributeAndInstall"] = $dstributeAndInstall;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}

	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getFullCarType() {
		return $this->fullCarType;
	}

	public function setFullCarType($fullCarType) {
		$this->fullCarType = $fullCarType;
		$this->apiParams["fullCarType"] = $fullCarType;
	}
	
	public function getGoodsQty() {
		return $this->goodsQty;
	}

	public function setGoodsQty($goodsQty) {
		$this->goodsQty = $goodsQty;
		$this->apiParams["goodsQty"] = $goodsQty;
	}
	
	public function getInsyredValue() {
		return $this->insyredValue;
	}

	public function setInsyredValue($insyredValue) {
		$this->insyredValue = $insyredValue;
		$this->apiParams["insyredValue"] = $insyredValue;
	}
	
	public function getOutOrderNum() {
		return $this->outOrderNum;
	}

	public function setOutOrderNum($outOrderNum) {
		$this->outOrderNum = $outOrderNum;
		$this->apiParams["outOrderNum"] = $outOrderNum;
	}
	
	public function getPackageComment() {
		return $this->packageComment;
	}

	public function setPackageComment($packageComment) {
		$this->packageComment = $packageComment;
		$this->apiParams["packageComment"] = $packageComment;
	}
	
	public function getPackageHeight() {
		return $this->packageHeight;
	}

	public function setPackageHeight($packageHeight) {
		$this->packageHeight = $packageHeight;
		$this->apiParams["packageHeight"] = $packageHeight;
	}
	
	public function getPackageLength() {
		return $this->packageLength;
	}

	public function setPackageLength($packageLength) {
		$this->packageLength = $packageLength;
		$this->apiParams["packageLength"] = $packageLength;
	}
	
	public function getPackageName() {
		return $this->packageName;
	}

	public function setPackageName($packageName) {
		$this->packageName = $packageName;
		$this->apiParams["packageName"] = $packageName;
	}
	
	public function getPackageNo() {
		return $this->packageNo;
	}

	public function setPackageNo($packageNo) {
		$this->packageNo = $packageNo;
		$this->apiParams["packageNo"] = $packageNo;
	}
	
	public function getPackageVolume() {
		return $this->packageVolume;
	}

	public function setPackageVolume($packageVolume) {
		$this->packageVolume = $packageVolume;
		$this->apiParams["packageVolume"] = $packageVolume;
	}
	
	public function getPackageWeight() {
		return $this->packageWeight;
	}

	public function setPackageWeight($packageWeight) {
		$this->packageWeight = $packageWeight;
		$this->apiParams["packageWeight"] = $packageWeight;
	}
	
	public function getPackageWidth() {
		return $this->packageWidth;
	}

	public function setPackageWidth($packageWidth) {
		$this->packageWidth = $packageWidth;
		$this->apiParams["packageWidth"] = $packageWidth;
	}
	
	public function getPacking() {
		return $this->packing;
	}

	public function setPacking($packing) {
		$this->packing = $packing;
		$this->apiParams["packing"] = $packing;
	}
	
	public function getPickupMode() {
		return $this->pickupMode;
	}

	public function setPickupMode($pickupMode) {
		$this->pickupMode = $pickupMode;
		$this->apiParams["pickupMode"] = $pickupMode;
	}
	
	public function getSelfFeedingPoint() {
		return $this->selfFeedingPoint;
	}

	public function setSelfFeedingPoint($selfFeedingPoint) {
		$this->selfFeedingPoint = $selfFeedingPoint;
		$this->apiParams["selfFeedingPoint"] = $selfFeedingPoint;
	}
	
	public function getServiceMode() {
		return $this->serviceMode;
	}

	public function setServiceMode($serviceMode) {
		$this->serviceMode = $serviceMode;
		$this->apiParams["serviceMode"] = $serviceMode;
	}
	
	public function getSignReturn() {
		return $this->signReturn;
	}

	public function setSignReturn($signReturn) {
		$this->signReturn = $signReturn;
		$this->apiParams["signReturn"] = $signReturn;
	}
	
	public function getSpecialCarType() {
		return $this->specialCarType;
	}

	public function setSpecialCarType($specialCarType) {
		$this->specialCarType = $specialCarType;
		$this->apiParams["specialCarType"] = $specialCarType;
	}
	
	public function getTransportType() {
		return $this->transportType;
	}

	public function setTransportType($transportType) {
		$this->transportType = $transportType;
		$this->apiParams["transportType"] = $transportType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>