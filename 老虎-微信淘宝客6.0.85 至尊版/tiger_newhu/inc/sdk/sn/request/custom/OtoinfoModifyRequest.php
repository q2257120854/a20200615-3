<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-29
 */
class OtoinfoModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $autoRefund;
	
	/**
	 * 
	 */
	private $bookingShop;
	
	/**
	 * 
	 */
	private $childItem;
	
	/**
	 * 
	 */
	private $deductiblePrice;
	
	/**
	 * 
	 */
	private $effectiveDay;
	
	/**
	 * 
	 */
	private $extractMode;
	
	/**
	 * 
	 */
	private $insaleRefund;
	
	/**
	 * 
	 */
	private $payTemplate;
	
	/**
	 * 
	 */
	private $price;
	
	/**
	 * 
	 */
	private $priceType;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $saleDate;
	
	/**
	 * 
	 */
	private $saleSet;
	
	/**
	 * 
	 */
	private $sellChannel;
	
	/**
	 * 
	 */
	private $writeoffPayment;
	
	/**
	 * 
	 */
	private $writeoffShop;
	
	public function getAutoRefund() {
		return $this->autoRefund;
	}
	
	public function setAutoRefund($autoRefund) {
		$this->autoRefund = $autoRefund;
		$this->apiParams["autoRefund"] = $autoRefund;
	}
	
	public function getBookingShop() {
		return $this->bookingShop;
	}
	
	public function setBookingShop($bookingShop) {
		$this->bookingShop = $bookingShop;
		$this->apiParams["bookingShop"] = $bookingShop;
	}
	
	public function getChildItem() {
		return $this->childItem;
	}
	
	public function setChildItem($childItem) {
		$this->childItem = $childItem;
		$arr = array();
		foreach ($childItem as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["childItem"] = $arr;
	}
	
	public function getDeductiblePrice() {
		return $this->deductiblePrice;
	}
	
	public function setDeductiblePrice($deductiblePrice) {
		$this->deductiblePrice = $deductiblePrice;
		$this->apiParams["deductiblePrice"] = $deductiblePrice;
	}
	
	public function getEffectiveDay() {
		return $this->effectiveDay;
	}
	
	public function setEffectiveDay($effectiveDay) {
		$this->effectiveDay = $effectiveDay;
		$this->apiParams["effectiveDay"] = $effectiveDay;
	}
	
	public function getExtractMode() {
		return $this->extractMode;
	}
	
	public function setExtractMode($extractMode) {
		$this->extractMode = $extractMode;
		$this->apiParams["extractMode"] = $extractMode;
	}
	
	public function getInsaleRefund() {
		return $this->insaleRefund;
	}
	
	public function setInsaleRefund($insaleRefund) {
		$this->insaleRefund = $insaleRefund;
		$this->apiParams["insaleRefund"] = $insaleRefund;
	}
	
	public function getPayTemplate() {
		return $this->payTemplate;
	}
	
	public function setPayTemplate($payTemplate) {
		$this->payTemplate = $payTemplate;
		$this->apiParams["payTemplate"] = $payTemplate;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getPriceType() {
		return $this->priceType;
	}
	
	public function setPriceType($priceType) {
		$this->priceType = $priceType;
		$this->apiParams["priceType"] = $priceType;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getSaleDate() {
		return $this->saleDate;
	}
	
	public function setSaleDate($saleDate) {
		$this->saleDate = $saleDate;
		$this->apiParams["saleDate"] = $saleDate;
	}
	
	public function getSaleSet() {
		return $this->saleSet;
	}
	
	public function setSaleSet($saleSet) {
		$this->saleSet = $saleSet;
		$this->apiParams["saleSet"] = $saleSet;
	}
	
	public function getSellChannel() {
		return $this->sellChannel;
	}
	
	public function setSellChannel($sellChannel) {
		$this->sellChannel = $sellChannel;
		$this->apiParams["sellChannel"] = $sellChannel;
	}
	
	public function getWriteoffPayment() {
		return $this->writeoffPayment;
	}
	
	public function setWriteoffPayment($writeoffPayment) {
		$this->writeoffPayment = $writeoffPayment;
		$this->apiParams["writeoffPayment"] = $writeoffPayment;
	}
	
	public function getWriteoffShop() {
		return $this->writeoffShop;
	}
	
	public function setWriteoffShop($writeoffShop) {
		$this->writeoffShop = $writeoffShop;
		$this->apiParams["writeoffShop"] = $writeoffShop;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.otoinfo.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "modifyOtoinfo";
	}
	
}

class ChildItem {

	private $apiParams = array();
	
	private $deductiblePriceChild;
	
	private $priceChild;
	
	private $productCodeChild;
	
	public function getDeductiblePriceChild() {
		return $this->deductiblePriceChild;
	}

	public function setDeductiblePriceChild($deductiblePriceChild) {
		$this->deductiblePriceChild = $deductiblePriceChild;
		$this->apiParams["deductiblePriceChild"] = $deductiblePriceChild;
	}
	
	public function getPriceChild() {
		return $this->priceChild;
	}

	public function setPriceChild($priceChild) {
		$this->priceChild = $priceChild;
		$this->apiParams["priceChild"] = $priceChild;
	}
	
	public function getProductCodeChild() {
		return $this->productCodeChild;
	}

	public function setProductCodeChild($productCodeChild) {
		$this->productCodeChild = $productCodeChild;
		$this->apiParams["productCodeChild"] = $productCodeChild;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>