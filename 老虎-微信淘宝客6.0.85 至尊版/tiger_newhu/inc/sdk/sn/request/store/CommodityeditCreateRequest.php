<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class CommodityeditCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $advertise;
	
	/**
	 * 
	 */
	private $applyCode;
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $attrInfo;
	
	/**
	 * 
	 */
	private $brandCode;
	
	/**
	 * 
	 */
	private $brgew;
	
	/**
	 * 
	 */
	private $categoryCode;
	
	/**
	 * 
	 */
	private $classifyCode;
	
	/**
	 * 
	 */
	private $cmBarcode;
	
	/**
	 * 
	 */
	private $deliveryAttr;
	
	/**
	 * 
	 */
	private $immediateAppoint;
	
	/**
	 * 
	 */
	private $immediateAppointTime;
	
	/**
	 * 
	 */
	private $operType;
	
	/**
	 * 
	 */
	private $packingPrice;
	
	/**
	 * 
	 */
	private $picUrl;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $productName;
	
	/**
	 * 
	 */
	private $purchaseMin;
	
	/**
	 * 
	 */
	private $qty;
	
	/**
	 * 
	 */
	private $secondClassifyCode;
	
	/**
	 * 
	 */
	private $sellHoursType;
	
	/**
	 * 
	 */
	private $sellPrice;
	
	/**
	 * 
	 */
	private $sellStatus;
	
	/**
	 * 
	 */
	private $serviceTime;
	
	/**
	 * 
	 */
	private $standardInfo;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $supplierCmCode;
	
	public function getAdvertise() {
		return $this->advertise;
	}
	
	public function setAdvertise($advertise) {
		$this->advertise = $advertise;
		$this->apiParams["advertise"] = $advertise;
	}
	
	public function getApplyCode() {
		return $this->applyCode;
	}
	
	public function setApplyCode($applyCode) {
		$this->applyCode = $applyCode;
		$this->apiParams["applyCode"] = $applyCode;
	}
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	public function getAttrInfo() {
		return $this->attrInfo;
	}
	
	public function setAttrInfo($attrInfo) {
		$this->attrInfo = $attrInfo;
		$arr = array();
		foreach ($attrInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["attrInfo"] = $arr;
	}
	
	public function getBrandCode() {
		return $this->brandCode;
	}
	
	public function setBrandCode($brandCode) {
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}
	
	public function getBrgew() {
		return $this->brgew;
	}
	
	public function setBrgew($brgew) {
		$this->brgew = $brgew;
		$this->apiParams["brgew"] = $brgew;
	}
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getClassifyCode() {
		return $this->classifyCode;
	}
	
	public function setClassifyCode($classifyCode) {
		$this->classifyCode = $classifyCode;
		$this->apiParams["classifyCode"] = $classifyCode;
	}
	
	public function getCmBarcode() {
		return $this->cmBarcode;
	}
	
	public function setCmBarcode($cmBarcode) {
		$this->cmBarcode = $cmBarcode;
		$this->apiParams["cmBarcode"] = $cmBarcode;
	}
	
	public function getDeliveryAttr() {
		return $this->deliveryAttr;
	}
	
	public function setDeliveryAttr($deliveryAttr) {
		$this->deliveryAttr = $deliveryAttr;
		$this->apiParams["deliveryAttr"] = $deliveryAttr;
	}
	
	public function getImmediateAppoint() {
		return $this->immediateAppoint;
	}
	
	public function setImmediateAppoint($immediateAppoint) {
		$this->immediateAppoint = $immediateAppoint;
		$this->apiParams["immediateAppoint"] = $immediateAppoint;
	}
	
	public function getImmediateAppointTime() {
		return $this->immediateAppointTime;
	}
	
	public function setImmediateAppointTime($immediateAppointTime) {
		$this->immediateAppointTime = $immediateAppointTime;
		$this->apiParams["immediateAppointTime"] = $immediateAppointTime;
	}
	
	public function getOperType() {
		return $this->operType;
	}
	
	public function setOperType($operType) {
		$this->operType = $operType;
		$this->apiParams["operType"] = $operType;
	}
	
	public function getPackingPrice() {
		return $this->packingPrice;
	}
	
	public function setPackingPrice($packingPrice) {
		$this->packingPrice = $packingPrice;
		$this->apiParams["packingPrice"] = $packingPrice;
	}
	
	public function getPicUrl() {
		return $this->picUrl;
	}
	
	public function setPicUrl($picUrl) {
		$this->picUrl = $picUrl;
		$this->apiParams["picUrl"] = $picUrl;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getPurchaseMin() {
		return $this->purchaseMin;
	}
	
	public function setPurchaseMin($purchaseMin) {
		$this->purchaseMin = $purchaseMin;
		$this->apiParams["purchaseMin"] = $purchaseMin;
	}
	
	public function getQty() {
		return $this->qty;
	}
	
	public function setQty($qty) {
		$this->qty = $qty;
		$this->apiParams["qty"] = $qty;
	}
	
	public function getSecondClassifyCode() {
		return $this->secondClassifyCode;
	}
	
	public function setSecondClassifyCode($secondClassifyCode) {
		$this->secondClassifyCode = $secondClassifyCode;
		$this->apiParams["secondClassifyCode"] = $secondClassifyCode;
	}
	
	public function getSellHoursType() {
		return $this->sellHoursType;
	}
	
	public function setSellHoursType($sellHoursType) {
		$this->sellHoursType = $sellHoursType;
		$this->apiParams["sellHoursType"] = $sellHoursType;
	}
	
	public function getSellPrice() {
		return $this->sellPrice;
	}
	
	public function setSellPrice($sellPrice) {
		$this->sellPrice = $sellPrice;
		$this->apiParams["sellPrice"] = $sellPrice;
	}
	
	public function getSellStatus() {
		return $this->sellStatus;
	}
	
	public function setSellStatus($sellStatus) {
		$this->sellStatus = $sellStatus;
		$this->apiParams["sellStatus"] = $sellStatus;
	}
	
	public function getServiceTime() {
		return $this->serviceTime;
	}
	
	public function setServiceTime($serviceTime) {
		$this->serviceTime = $serviceTime;
		$this->apiParams["serviceTime"] = $serviceTime;
	}
	
	public function getStandardInfo() {
		return $this->standardInfo;
	}
	
	public function setStandardInfo($standardInfo) {
		$this->standardInfo = $standardInfo;
		$arr = array();
		foreach ($standardInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["standardInfo"] = $arr;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getSupplierCmCode() {
		return $this->supplierCmCode;
	}
	
	public function setSupplierCmCode($supplierCmCode) {
		$this->supplierCmCode = $supplierCmCode;
		$this->apiParams["supplierCmCode"] = $supplierCmCode;
	}
	
	public function getApiMethodName(){
		return 'suning.store.commodityedit.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
		RequestCheckUtil::checkNotNull($this->classifyCode, 'classifyCode');
		RequestCheckUtil::checkNotNull($this->operType, 'operType');
		RequestCheckUtil::checkNotNull($this->picUrl, 'picUrl');
		RequestCheckUtil::checkNotNull($this->productName, 'productName');
		RequestCheckUtil::checkNotNull($this->purchaseMin, 'purchaseMin');
		RequestCheckUtil::checkNotNull($this->qty, 'qty');
		RequestCheckUtil::checkNotNull($this->sellHoursType, 'sellHoursType');
		RequestCheckUtil::checkNotNull($this->sellPrice, 'sellPrice');
		RequestCheckUtil::checkNotNull($this->sellStatus, 'sellStatus');
	}
	
	public function getBizName(){
		return "createCommodityedit";
	}
	
}

class ChoiceInfo {

	private $apiParams = array();
	
	private $choiceCode;
	
	private $choiceName;
	
	private $choicePrice;
	
	public function getChoiceCode() {
		return $this->choiceCode;
	}

	public function setChoiceCode($choiceCode) {
		$this->choiceCode = $choiceCode;
		$this->apiParams["choiceCode"] = $choiceCode;
	}
	
	public function getChoiceName() {
		return $this->choiceName;
	}

	public function setChoiceName($choiceName) {
		$this->choiceName = $choiceName;
		$this->apiParams["choiceName"] = $choiceName;
	}
	
	public function getChoicePrice() {
		return $this->choicePrice;
	}

	public function setChoicePrice($choicePrice) {
		$this->choicePrice = $choicePrice;
		$this->apiParams["choicePrice"] = $choicePrice;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class AttrInfo {

	private $apiParams = array();
	
	private $attrChoiceInfo;
	
	private $attrCode;
	
	private $attrIsMulti;
	
	private $attrName;
	
	public function getAttrChoiceInfo() {
		return $this->attrChoiceInfo;
	}

	public function setAttrChoiceInfo($attrChoiceInfo) {
		$this->attrChoiceInfo = $attrChoiceInfo;
		$arr = array();
		foreach ($attrChoiceInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["attrChoiceInfo"] = $arr;
	}
	
	public function getAttrCode() {
		return $this->attrCode;
	}

	public function setAttrCode($attrCode) {
		$this->attrCode = $attrCode;
		$this->apiParams["attrCode"] = $attrCode;
	}
	
	public function getAttrIsMulti() {
		return $this->attrIsMulti;
	}

	public function setAttrIsMulti($attrIsMulti) {
		$this->attrIsMulti = $attrIsMulti;
		$this->apiParams["attrIsMulti"] = $attrIsMulti;
	}
	
	public function getAttrName() {
		return $this->attrName;
	}

	public function setAttrName($attrName) {
		$this->attrName = $attrName;
		$this->apiParams["attrName"] = $attrName;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class AttrChoiceInfo {

	private $apiParams = array();
	
	private $attrChoiceCode;
	
	private $attrChoiceName;
	
	public function getAttrChoiceCode() {
		return $this->attrChoiceCode;
	}

	public function setAttrChoiceCode($attrChoiceCode) {
		$this->attrChoiceCode = $attrChoiceCode;
		$this->apiParams["attrChoiceCode"] = $attrChoiceCode;
	}
	
	public function getAttrChoiceName() {
		return $this->attrChoiceName;
	}

	public function setAttrChoiceName($attrChoiceName) {
		$this->attrChoiceName = $attrChoiceName;
		$this->apiParams["attrChoiceName"] = $attrChoiceName;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class StandardInfo {

	private $apiParams = array();
	
	private $choiceInfo;
	
	private $isMulti;
	
	private $standardCode;
	
	private $standardName;
	
	public function getChoiceInfo() {
		return $this->choiceInfo;
	}

	public function setChoiceInfo($choiceInfo) {
		$this->choiceInfo = $choiceInfo;
		$arr = array();
		foreach ($choiceInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["choiceInfo"] = $arr;
	}
	
	public function getIsMulti() {
		return $this->isMulti;
	}

	public function setIsMulti($isMulti) {
		$this->isMulti = $isMulti;
		$this->apiParams["isMulti"] = $isMulti;
	}
	
	public function getStandardCode() {
		return $this->standardCode;
	}

	public function setStandardCode($standardCode) {
		$this->standardCode = $standardCode;
		$this->apiParams["standardCode"] = $standardCode;
	}
	
	public function getStandardName() {
		return $this->standardName;
	}

	public function setStandardName($standardName) {
		$this->standardName = $standardName;
		$this->apiParams["standardName"] = $standardName;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>