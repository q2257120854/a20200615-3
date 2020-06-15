<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-29
 */
class CmmdtyinfoModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityPic;
	
	/**
	 * 
	 */
	private $afterSaleServiceDec;
	
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
	private $detailModule;
	
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
	private $ltpic;
	
	/**
	 * 
	 */
	private $mainPicVideoCode;
	
	/**
	 * 
	 */
	private $packingList;
	
	/**
	 * 
	 */
	private $productCode;
	
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
	
	/**
	 * 
	 */
	private $videoCode;
	
	public function getActivityPic() {
		return $this->activityPic;
	}
	
	public function setActivityPic($activityPic) {
		$this->activityPic = $activityPic;
		$this->apiParams["activityPic"] = $activityPic;
	}
	
	public function getAfterSaleServiceDec() {
		return $this->afterSaleServiceDec;
	}
	
	public function setAfterSaleServiceDec($afterSaleServiceDec) {
		$this->afterSaleServiceDec = $afterSaleServiceDec;
		$this->apiParams["afterSaleServiceDec"] = $afterSaleServiceDec;
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
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getLtpic() {
		return $this->ltpic;
	}
	
	public function setLtpic($ltpic) {
		$this->ltpic = $ltpic;
		$this->apiParams["ltpic"] = $ltpic;
	}
	
	public function getMainPicVideoCode() {
		return $this->mainPicVideoCode;
	}
	
	public function setMainPicVideoCode($mainPicVideoCode) {
		$this->mainPicVideoCode = $mainPicVideoCode;
		$this->apiParams["mainPicVideoCode"] = $mainPicVideoCode;
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
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
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
	
	public function getVideoCode() {
		return $this->videoCode;
	}
	
	public function setVideoCode($videoCode) {
		$this->videoCode = $videoCode;
		$this->apiParams["videoCode"] = $videoCode;
	}
	
	public function getApiMethodName(){
		return 'suning.saleoff.cmmdtyinfo.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "modifyCmmdtyinfo";
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

class ChildItem {

	private $apiParams = array();
	
	private $itemCodeX;
	
	private $productCodeX;
	
	private $supplierImgAUrlX;
	
	public function getItemCodeX() {
		return $this->itemCodeX;
	}

	public function setItemCodeX($itemCodeX) {
		$this->itemCodeX = $itemCodeX;
		$this->apiParams["itemCodeX"] = $itemCodeX;
	}
	
	public function getProductCodeX() {
		return $this->productCodeX;
	}

	public function setProductCodeX($productCodeX) {
		$this->productCodeX = $productCodeX;
		$this->apiParams["productCodeX"] = $productCodeX;
	}
	
	public function getSupplierImgAUrlX() {
		return $this->supplierImgAUrlX;
	}

	public function setSupplierImgAUrlX($supplierImgAUrlX) {
		$this->supplierImgAUrlX = $supplierImgAUrlX;
		$this->apiParams["supplierImgAUrlX"] = $supplierImgAUrlX;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>