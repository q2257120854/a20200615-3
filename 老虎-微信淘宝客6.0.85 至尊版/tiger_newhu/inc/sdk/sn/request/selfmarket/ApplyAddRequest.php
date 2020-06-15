<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-29
 */
class ApplyAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $barpic;
	
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
	private $childItem;
	
	/**
	 * 
	 */
	private $cmTitle;
	
	/**
	 * 
	 */
	private $conventionBeginTime;
	
	/**
	 * 
	 */
	private $conventionEndTime;
	
	/**
	 * 
	 */
	private $conventionPoints;
	
	/**
	 * 
	 */
	private $detailModule;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $highBeginTime;
	
	/**
	 * 
	 */
	private $highEndTime;
	
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
	private $highPoints;
	
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
	private $mobilePromotionLink;
	
	/**
	 * 
	 */
	private $packingList;
	
	/**
	 * 
	 */
	private $pars;
	
	/**
	 * 
	 */
	private $productName;
	
	/**
	 * 
	 */
	private $promotionFlag;
	
	/**
	 * 
	 */
	private $promotionLink;
	
	/**
	 * 
	 */
	private $promotionPoints;
	
	/**
	 * 
	 */
	private $sellingPoints;
	
	/**
	 * 
	 */
	private $startTime;
	
	/**
	 * 
	 */
	private $supplierImgUrl;
	
	/**
	 * 
	 */
	private $videoCode;
	
	public function getBarpic() {
		return $this->barpic;
	}
	
	public function setBarpic($barpic) {
		$this->barpic = $barpic;
		$this->apiParams["barpic"] = $barpic;
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
	
	public function getCmTitle() {
		return $this->cmTitle;
	}
	
	public function setCmTitle($cmTitle) {
		$this->cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}
	
	public function getConventionBeginTime() {
		return $this->conventionBeginTime;
	}
	
	public function setConventionBeginTime($conventionBeginTime) {
		$this->conventionBeginTime = $conventionBeginTime;
		$this->apiParams["conventionBeginTime"] = $conventionBeginTime;
	}
	
	public function getConventionEndTime() {
		return $this->conventionEndTime;
	}
	
	public function setConventionEndTime($conventionEndTime) {
		$this->conventionEndTime = $conventionEndTime;
		$this->apiParams["conventionEndTime"] = $conventionEndTime;
	}
	
	public function getConventionPoints() {
		return $this->conventionPoints;
	}
	
	public function setConventionPoints($conventionPoints) {
		$this->conventionPoints = $conventionPoints;
		$this->apiParams["conventionPoints"] = $conventionPoints;
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
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getHighBeginTime() {
		return $this->highBeginTime;
	}
	
	public function setHighBeginTime($highBeginTime) {
		$this->highBeginTime = $highBeginTime;
		$this->apiParams["highBeginTime"] = $highBeginTime;
	}
	
	public function getHighEndTime() {
		return $this->highEndTime;
	}
	
	public function setHighEndTime($highEndTime) {
		$this->highEndTime = $highEndTime;
		$this->apiParams["highEndTime"] = $highEndTime;
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
	
	public function getHighPoints() {
		return $this->highPoints;
	}
	
	public function setHighPoints($highPoints) {
		$this->highPoints = $highPoints;
		$this->apiParams["highPoints"] = $highPoints;
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
	
	public function getMobilePromotionLink() {
		return $this->mobilePromotionLink;
	}
	
	public function setMobilePromotionLink($mobilePromotionLink) {
		$this->mobilePromotionLink = $mobilePromotionLink;
		$this->apiParams["mobilePromotionLink"] = $mobilePromotionLink;
	}
	
	public function getPackingList() {
		return $this->packingList;
	}
	
	public function setPackingList($packingList) {
		$this->packingList = $packingList;
		$arr = array();
		foreach ($packingList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["packingList"] = $arr;
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
	
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getPromotionFlag() {
		return $this->promotionFlag;
	}
	
	public function setPromotionFlag($promotionFlag) {
		$this->promotionFlag = $promotionFlag;
		$this->apiParams["promotionFlag"] = $promotionFlag;
	}
	
	public function getPromotionLink() {
		return $this->promotionLink;
	}
	
	public function setPromotionLink($promotionLink) {
		$this->promotionLink = $promotionLink;
		$this->apiParams["promotionLink"] = $promotionLink;
	}
	
	public function getPromotionPoints() {
		return $this->promotionPoints;
	}
	
	public function setPromotionPoints($promotionPoints) {
		$this->promotionPoints = $promotionPoints;
		$this->apiParams["promotionPoints"] = $promotionPoints;
	}
	
	public function getSellingPoints() {
		return $this->sellingPoints;
	}
	
	public function setSellingPoints($sellingPoints) {
		$this->sellingPoints = $sellingPoints;
		$this->apiParams["sellingPoints"] = $sellingPoints;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getSupplierImgUrl() {
		return $this->supplierImgUrl;
	}
	
	public function setSupplierImgUrl($supplierImgUrl) {
		$this->supplierImgUrl = $supplierImgUrl;
		$arr = array();
		foreach ($supplierImgUrl as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["supplierImgUrl"] = $arr;
	}
	
	public function getVideoCode() {
		return $this->videoCode;
	}
	
	public function setVideoCode($videoCode) {
		$this->videoCode = $videoCode;
		$this->apiParams["videoCode"] = $videoCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.apply.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->brandCode, 'brandCode');
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
		RequestCheckUtil::checkNotNull($this->productName, 'productName');
	}
	
	public function getBizName(){
		return "addApply";
	}
	
}

class ParsX {

	private $apiParams = array();
	
	private $parCodeX;
	
	private $parValueX;
	
	public function getParCodeX() {
		return $this->parCodeX;
	}

	public function setParCodeX($parCodeX) {
		$this->parCodeX = $parCodeX;
		$this->apiParams["parCodeX"] = $parCodeX;
	}
	
	public function getParValueX() {
		return $this->parValueX;
	}

	public function setParValueX($parValueX) {
		$this->parValueX = $parValueX;
		$this->apiParams["parValueX"] = $parValueX;
	}
	
	public function getApiParams(){
		return $this->apiParams;
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

class PackingList {

	private $apiParams = array();
	
	private $packingListName;
	
	private $packingListQty;
	
	public function getPackingListName() {
		return $this->packingListName;
	}

	public function setPackingListName($packingListName) {
		$this->packingListName = $packingListName;
		$this->apiParams["packingListName"] = $packingListName;
	}
	
	public function getPackingListQty() {
		return $this->packingListQty;
	}

	public function setPackingListQty($packingListQty) {
		$this->packingListQty = $packingListQty;
		$this->apiParams["packingListQty"] = $packingListQty;
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

class SupplierImgUrl {

	private $apiParams = array();
	
	private $urlA;
	
	private $urlB;
	
	private $urlC;
	
	private $urlD;
	
	private $urlE;
	
	public function getUrlA() {
		return $this->urlA;
	}

	public function setUrlA($urlA) {
		$this->urlA = $urlA;
		$this->apiParams["urlA"] = $urlA;
	}
	
	public function getUrlB() {
		return $this->urlB;
	}

	public function setUrlB($urlB) {
		$this->urlB = $urlB;
		$this->apiParams["urlB"] = $urlB;
	}
	
	public function getUrlC() {
		return $this->urlC;
	}

	public function setUrlC($urlC) {
		$this->urlC = $urlC;
		$this->apiParams["urlC"] = $urlC;
	}
	
	public function getUrlD() {
		return $this->urlD;
	}

	public function setUrlD($urlD) {
		$this->urlD = $urlD;
		$this->apiParams["urlD"] = $urlD;
	}
	
	public function getUrlE() {
		return $this->urlE;
	}

	public function setUrlE($urlE) {
		$this->urlE = $urlE;
		$this->apiParams["urlE"] = $urlE;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ChildItem {

	private $apiParams = array();
	
	private $barcode;
	
	private $barpicX;
	
	private $itemCodeX;
	
	private $parsX;
	
	private $supplierImgAUrl;
	
	public function getBarcode() {
		return $this->barcode;
	}

	public function setBarcode($barcode) {
		$this->barcode = $barcode;
		$this->apiParams["barcode"] = $barcode;
	}
	
	public function getBarpicX() {
		return $this->barpicX;
	}

	public function setBarpicX($barpicX) {
		$this->barpicX = $barpicX;
		$this->apiParams["barpicX"] = $barpicX;
	}
	
	public function getItemCodeX() {
		return $this->itemCodeX;
	}

	public function setItemCodeX($itemCodeX) {
		$this->itemCodeX = $itemCodeX;
		$this->apiParams["itemCodeX"] = $itemCodeX;
	}
	
	public function getParsX() {
		return $this->parsX;
	}

	public function setParsX($parsX) {
		$this->parsX = $parsX;
		$arr = array();
		foreach ($parsX as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["parsX"] = $arr;
	}
	
	public function getSupplierImgAUrl() {
		return $this->supplierImgAUrl;
	}

	public function setSupplierImgAUrl($supplierImgAUrl) {
		$this->supplierImgAUrl = $supplierImgAUrl;
		$this->apiParams["supplierImgAUrl"] = $supplierImgAUrl;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>