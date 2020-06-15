<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-11-16
 */
class SupplyapplyingAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $physicalCode;
	
	/**
	 * 
	 */
	private $price;
	
	/**
	 * 
	 */
	private $invQtyTar;
	
	/**
	 * 
	 */
	private $salesStatus;
	
	/**
	 * 
	 */
	private $childItem;
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getPhysicalCode() {
		return $this->physicalCode;
	}
	
	public function setPhysicalCode($physicalCode) {
		$this->physicalCode = $physicalCode;
		$this->apiParams["physicalCode"] = $physicalCode;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getInvQtyTar() {
		return $this->invQtyTar;
	}
	
	public function setInvQtyTar($invQtyTar) {
		$this->invQtyTar = $invQtyTar;
		$this->apiParams["invQtyTar"] = $invQtyTar;
	}
	
	public function getSalesStatus() {
		return $this->salesStatus;
	}
	
	public function setSalesStatus($salesStatus) {
		$this->salesStatus = $salesStatus;
		$this->apiParams["salesStatus"] = $salesStatus;
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
	
	public function getApiMethodName(){
		return 'suning.oto.supplyapplying.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
		RequestCheckUtil::checkNotNull($this->physicalCode, 'physicalCode');
	}
	
	public function getBizName(){
		return "addSupplyapplying";
	}
	
}

class ChildItem {

	private $apiParams = array();
	
	private $productCode;
	
	private $price;
	
	private $invQtyTar;
	
	private $salesStatus;
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getInvQtyTar() {
		return $this->invQtyTar;
	}

	public function setInvQtyTar($invQtyTar) {
		$this->invQtyTar = $invQtyTar;
		$this->apiParams["invQtyTar"] = $invQtyTar;
	}
	
	public function getSalesStatus() {
		return $this->salesStatus;
	}

	public function setSalesStatus($salesStatus) {
		$this->salesStatus = $salesStatus;
		$this->apiParams["salesStatus"] = $salesStatus;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>