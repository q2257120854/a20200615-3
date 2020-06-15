<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-29
 */
class CulitemcontentreviseModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $afterSaleServiceDec;
	
	/**
	 * 
	 */
	private $assortCode;
	
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
	private $freightTemplateId;
	
	/**
	 * 
	 */
	private $highlightWordone;
	
	/**
	 * 
	 */
	private $highlightWordthree;
	
	/**
	 * 
	 */
	private $highlightWordtwo;
	
	/**
	 * 
	 */
	private $introduction;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $mainPicVideoCode;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $salesDate;
	
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
	
	public function getAssortCode() {
		return $this->assortCode;
	}
	
	public function setAssortCode($assortCode) {
		$this->assortCode = $assortCode;
		$this->apiParams["assortCode"] = $assortCode;
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
	
	public function getFreightTemplateId() {
		return $this->freightTemplateId;
	}
	
	public function setFreightTemplateId($freightTemplateId) {
		$this->freightTemplateId = $freightTemplateId;
		$this->apiParams["freightTemplateId"] = $freightTemplateId;
	}
	
	public function getHighlightWordone() {
		return $this->highlightWordone;
	}
	
	public function setHighlightWordone($highlightWordone) {
		$this->highlightWordone = $highlightWordone;
		$this->apiParams["highlightWordone"] = $highlightWordone;
	}
	
	public function getHighlightWordthree() {
		return $this->highlightWordthree;
	}
	
	public function setHighlightWordthree($highlightWordthree) {
		$this->highlightWordthree = $highlightWordthree;
		$this->apiParams["highlightWordthree"] = $highlightWordthree;
	}
	
	public function getHighlightWordtwo() {
		return $this->highlightWordtwo;
	}
	
	public function setHighlightWordtwo($highlightWordtwo) {
		$this->highlightWordtwo = $highlightWordtwo;
		$this->apiParams["highlightWordtwo"] = $highlightWordtwo;
	}
	
	public function getIntroduction() {
		return $this->introduction;
	}
	
	public function setIntroduction($introduction) {
		$this->introduction = $introduction;
		$this->apiParams["introduction"] = $introduction;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getMainPicVideoCode() {
		return $this->mainPicVideoCode;
	}
	
	public function setMainPicVideoCode($mainPicVideoCode) {
		$this->mainPicVideoCode = $mainPicVideoCode;
		$this->apiParams["mainPicVideoCode"] = $mainPicVideoCode;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getSalesDate() {
		return $this->salesDate;
	}
	
	public function setSalesDate($salesDate) {
		$this->salesDate = $salesDate;
		$this->apiParams["salesDate"] = $salesDate;
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
		return 'suning.custom.culitemcontentrevise.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "modifyCulitemcontentrevise";
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

?>