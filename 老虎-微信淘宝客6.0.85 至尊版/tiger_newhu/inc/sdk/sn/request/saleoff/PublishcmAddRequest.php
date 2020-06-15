<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-18
 */
class PublishcmAddRequest  extends SuningRequest{
	
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
	private $cmTitle;
	
	/**
	 * 
	 */
	private $price;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $introduction;
	
	/**
	 * 
	 */
	private $packingList;
	
	/**
	 * 
	 */
	private $childItem;
	
	/**
	 * 
	 */
	private $detailModule;
	
	/**
	 * 
	 */
	private $supplierImgUrlA;
	
	/**
	 * 
	 */
	private $supplierImgUrlB;
	
	/**
	 * 
	 */
	private $supplierImgUrlC;
	
	/**
	 * 
	 */
	private $supplierImgUrlD;
	
	/**
	 * 
	 */
	private $supplierImgUrlE;
	
	/**
	 * 
	 */
	private $ltpic;
	
	/**
	 * 
	 */
	private $afterSaleServiceDec;
	
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
	
	public function getCmTitle() {
		return $this->cmTitle;
	}
	
	public function setCmTitle($cmTitle) {
		$this->cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getIntroduction() {
		return $this->introduction;
	}
	
	public function setIntroduction($introduction) {
		$this->introduction = $introduction;
		$this->apiParams["introduction"] = $introduction;
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
	
	public function getSupplierImgUrlA() {
		return $this->supplierImgUrlA;
	}
	
	public function setSupplierImgUrlA($supplierImgUrlA) {
		$this->supplierImgUrlA = $supplierImgUrlA;
		$this->apiParams["supplierImgUrlA"] = $supplierImgUrlA;
	}
	
	public function getSupplierImgUrlB() {
		return $this->supplierImgUrlB;
	}
	
	public function setSupplierImgUrlB($supplierImgUrlB) {
		$this->supplierImgUrlB = $supplierImgUrlB;
		$this->apiParams["supplierImgUrlB"] = $supplierImgUrlB;
	}
	
	public function getSupplierImgUrlC() {
		return $this->supplierImgUrlC;
	}
	
	public function setSupplierImgUrlC($supplierImgUrlC) {
		$this->supplierImgUrlC = $supplierImgUrlC;
		$this->apiParams["supplierImgUrlC"] = $supplierImgUrlC;
	}
	
	public function getSupplierImgUrlD() {
		return $this->supplierImgUrlD;
	}
	
	public function setSupplierImgUrlD($supplierImgUrlD) {
		$this->supplierImgUrlD = $supplierImgUrlD;
		$this->apiParams["supplierImgUrlD"] = $supplierImgUrlD;
	}
	
	public function getSupplierImgUrlE() {
		return $this->supplierImgUrlE;
	}
	
	public function setSupplierImgUrlE($supplierImgUrlE) {
		$this->supplierImgUrlE = $supplierImgUrlE;
		$this->apiParams["supplierImgUrlE"] = $supplierImgUrlE;
	}
	
	public function getLtpic() {
		return $this->ltpic;
	}
	
	public function setLtpic($ltpic) {
		$this->ltpic = $ltpic;
		$this->apiParams["ltpic"] = $ltpic;
	}
	
	public function getAfterSaleServiceDec() {
		return $this->afterSaleServiceDec;
	}
	
	public function setAfterSaleServiceDec($afterSaleServiceDec) {
		$this->afterSaleServiceDec = $afterSaleServiceDec;
		$this->apiParams["afterSaleServiceDec"] = $afterSaleServiceDec;
	}
	
	public function getApiMethodName(){
		return 'suning.saleoff.publishcm.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
		RequestCheckUtil::checkNotNull($this->sellPoint, 'sellPoint');
		RequestCheckUtil::checkNotNull($this->cmTitle, 'cmTitle');
		RequestCheckUtil::checkNotNull($this->price, 'price');
		RequestCheckUtil::checkNotNull($this->supplierImgUrlB, 'supplierImgUrlB');
		RequestCheckUtil::checkNotNull($this->supplierImgUrlC, 'supplierImgUrlC');
		RequestCheckUtil::checkNotNull($this->supplierImgUrlD, 'supplierImgUrlD');
		RequestCheckUtil::checkNotNull($this->supplierImgUrlE, 'supplierImgUrlE');
		RequestCheckUtil::checkNotNull($this->ltpic, 'ltpic');
	}
	
	public function getBizName(){
		return "addPublishcm";
	}
	
}

class DetailModule {

	private $apiParams = array();
	
	private $content;
	
	private $num;
	
	private $moduleId;
	
	private $moduleName;
	
	private $type;
	
	public function getContent() {
		return $this->content;
	}

	public function setContent($content) {
		$this->content = $content;
		$this->apiParams["content"] = $content;
	}
	
	public function getNum() {
		return $this->num;
	}

	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
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
	
	private $packingListQty;
	
	private $packingListName;
	
	public function getPackingListQty() {
		return $this->packingListQty;
	}

	public function setPackingListQty($packingListQty) {
		$this->packingListQty = $packingListQty;
		$this->apiParams["packingListQty"] = $packingListQty;
	}
	
	public function getPackingListName() {
		return $this->packingListName;
	}

	public function setPackingListName($packingListName) {
		$this->packingListName = $packingListName;
		$this->apiParams["packingListName"] = $packingListName;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ChildItem {

	private $apiParams = array();
	
	private $productCodeX;
	
	private $itemCodeX;
	
	private $priceX;
	
	private $supplierImgAUrl;
	
	public function getProductCodeX() {
		return $this->productCodeX;
	}

	public function setProductCodeX($productCodeX) {
		$this->productCodeX = $productCodeX;
		$this->apiParams["productCodeX"] = $productCodeX;
	}
	
	public function getItemCodeX() {
		return $this->itemCodeX;
	}

	public function setItemCodeX($itemCodeX) {
		$this->itemCodeX = $itemCodeX;
		$this->apiParams["itemCodeX"] = $itemCodeX;
	}
	
	public function getPriceX() {
		return $this->priceX;
	}

	public function setPriceX($priceX) {
		$this->priceX = $priceX;
		$this->apiParams["priceX"] = $priceX;
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