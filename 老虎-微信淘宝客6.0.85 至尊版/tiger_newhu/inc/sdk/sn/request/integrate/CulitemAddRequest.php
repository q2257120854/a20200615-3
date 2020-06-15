<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-29
 */
class CulitemAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $afterSaleServiceDec;
	
	/**
	 * 
	 */
	private $alertQty;
	
	/**
	 * 
	 */
	private $assortCode;
	
	/**
	 * 
	 */
	private $auditFlag;
	
	/**
	 * 
	 */
	private $brandCode;
	
	/**
	 * 
	 */
	private $categoryCode;
	
	/**
	 * 
	 */
	private $cmTitle;
	
	/**
	 * 
	 */
	private $detailModule;
	
	/**
	 * 
	 */
	private $introduction;
	
	/**
	 * 
	 */
	private $invQty;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $pars;
	
	/**
	 * 
	 */
	private $peopleNum;
	
	/**
	 * 
	 */
	private $pingouPrice;
	
	/**
	 * 
	 */
	private $price;
	
	/**
	 * 
	 */
	private $productName;
	
	/**
	 * 
	 */
	private $saleCatalogCode;
	
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
	private $sellPoint;
	
	/**
	 * 
	 */
	private $supplierImgAUrl;
	
	/**
	 * 
	 */
	private $supplierImgBUrl;
	
	/**
	 * 
	 */
	private $supplierImgCUrl;
	
	/**
	 * 
	 */
	private $supplierImgDUrl;
	
	/**
	 * 
	 */
	private $supplierImgEUrl;
	
	public function getAfterSaleServiceDec() {
		return $this->afterSaleServiceDec;
	}
	
	public function setAfterSaleServiceDec($afterSaleServiceDec) {
		$this->afterSaleServiceDec = $afterSaleServiceDec;
		$this->apiParams["afterSaleServiceDec"] = $afterSaleServiceDec;
	}
	
	public function getAlertQty() {
		return $this->alertQty;
	}
	
	public function setAlertQty($alertQty) {
		$this->alertQty = $alertQty;
		$this->apiParams["alertQty"] = $alertQty;
	}
	
	public function getAssortCode() {
		return $this->assortCode;
	}
	
	public function setAssortCode($assortCode) {
		$this->assortCode = $assortCode;
		$this->apiParams["assortCode"] = $assortCode;
	}
	
	public function getAuditFlag() {
		return $this->auditFlag;
	}
	
	public function setAuditFlag($auditFlag) {
		$this->auditFlag = $auditFlag;
		$this->apiParams["auditFlag"] = $auditFlag;
	}
	
	public function getBrandCode() {
		return $this->brandCode;
	}
	
	public function setBrandCode($brandCode) {
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getCmTitle() {
		return $this->cmTitle;
	}
	
	public function setCmTitle($cmTitle) {
		$this->cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}
	
	public function getDetailModule() {
		return $this->detailModule;
	}
	
	public function setDetailModule($detailModule) {
		$this->detailModule = $detailModule;
		$arr = array();
		foreach ($detailModule as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["detailModule"] = $arr;
	}
	
	public function getIntroduction() {
		return $this->introduction;
	}
	
	public function setIntroduction($introduction) {
		$this->introduction = $introduction;
		$this->apiParams["introduction"] = $introduction;
	}
	
	public function getInvQty() {
		return $this->invQty;
	}
	
	public function setInvQty($invQty) {
		$this->invQty = $invQty;
		$this->apiParams["invQty"] = $invQty;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getPars() {
		return $this->pars;
	}
	
	public function setPars($pars) {
		$this->pars = $pars;
		$arr = array();
		foreach ($pars as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["pars"] = $arr;
	}
	
	public function getPeopleNum() {
		return $this->peopleNum;
	}
	
	public function setPeopleNum($peopleNum) {
		$this->peopleNum = $peopleNum;
		$this->apiParams["peopleNum"] = $peopleNum;
	}
	
	public function getPingouPrice() {
		return $this->pingouPrice;
	}
	
	public function setPingouPrice($pingouPrice) {
		$this->pingouPrice = $pingouPrice;
		$this->apiParams["pingouPrice"] = $pingouPrice;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getSaleCatalogCode() {
		return $this->saleCatalogCode;
	}
	
	public function setSaleCatalogCode($saleCatalogCode) {
		$this->saleCatalogCode = $saleCatalogCode;
		$this->apiParams["saleCatalogCode"] = $saleCatalogCode;
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
	
	public function getSellPoint() {
		return $this->sellPoint;
	}
	
	public function setSellPoint($sellPoint) {
		$this->sellPoint = $sellPoint;
		$this->apiParams["sellPoint"] = $sellPoint;
	}
	
	public function getSupplierImgAUrl() {
		return $this->supplierImgAUrl;
	}
	
	public function setSupplierImgAUrl($supplierImgAUrl) {
		$this->supplierImgAUrl = $supplierImgAUrl;
		$this->apiParams["supplierImgAUrl"] = $supplierImgAUrl;
	}
	
	public function getSupplierImgBUrl() {
		return $this->supplierImgBUrl;
	}
	
	public function setSupplierImgBUrl($supplierImgBUrl) {
		$this->supplierImgBUrl = $supplierImgBUrl;
		$this->apiParams["supplierImgBUrl"] = $supplierImgBUrl;
	}
	
	public function getSupplierImgCUrl() {
		return $this->supplierImgCUrl;
	}
	
	public function setSupplierImgCUrl($supplierImgCUrl) {
		$this->supplierImgCUrl = $supplierImgCUrl;
		$this->apiParams["supplierImgCUrl"] = $supplierImgCUrl;
	}
	
	public function getSupplierImgDUrl() {
		return $this->supplierImgDUrl;
	}
	
	public function setSupplierImgDUrl($supplierImgDUrl) {
		$this->supplierImgDUrl = $supplierImgDUrl;
		$this->apiParams["supplierImgDUrl"] = $supplierImgDUrl;
	}
	
	public function getSupplierImgEUrl() {
		return $this->supplierImgEUrl;
	}
	
	public function setSupplierImgEUrl($supplierImgEUrl) {
		$this->supplierImgEUrl = $supplierImgEUrl;
		$this->apiParams["supplierImgEUrl"] = $supplierImgEUrl;
	}
	
	public function getApiMethodName(){
		return 'suning.integrate.culitem.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->afterSaleServiceDec, 'afterSaleServiceDec');
		RequestCheckUtil::checkNotNull($this->brandCode, 'brandCode');
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
		RequestCheckUtil::checkNotNull($this->cmTitle, 'cmTitle');
		RequestCheckUtil::checkNotNull($this->peopleNum, 'peopleNum');
		RequestCheckUtil::checkNotNull($this->pingouPrice, 'pingouPrice');
		RequestCheckUtil::checkNotNull($this->price, 'price');
		RequestCheckUtil::checkNotNull($this->productName, 'productName');
		RequestCheckUtil::checkNotNull($this->saleSet, 'saleSet');
		RequestCheckUtil::checkNotNull($this->supplierImgAUrl, 'supplierImgAUrl');
	}
	
	public function getBizName(){
		return "addCulitem";
	}
	
}

class DetailModule {

	private $apiParams = array();
	
	private $content;
	
	private $moduleId;
	
	private $moduleName;
	
	private $num;
	
	private $type;
	
	public function getContent() {
		return $this->content;
	}

	public function setContent($content) {
		$this->content = $content;
		$this->apiParams["content"] = $content;
	}
	
	public function getModuleId() {
		return $this->moduleId;
	}

	public function setModuleId($moduleId) {
		$this->moduleId = $moduleId;
		$this->apiParams["moduleId"] = $moduleId;
	}
	
	public function getModuleName() {
		return $this->moduleName;
	}

	public function setModuleName($moduleName) {
		$this->moduleName = $moduleName;
		$this->apiParams["moduleName"] = $moduleName;
	}
	
	public function getNum() {
		return $this->num;
	}

	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
	}
	
	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class Pars {

	private $apiParams = array();
	
	private $parCode;
	
	private $parValue;
	
	public function getParCode() {
		return $this->parCode;
	}

	public function setParCode($parCode) {
		$this->parCode = $parCode;
		$this->apiParams["parCode"] = $parCode;
	}
	
	public function getParValue() {
		return $this->parValue;
	}

	public function setParValue($parValue) {
		$this->parValue = $parValue;
		$this->apiParams["parValue"] = $parValue;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>