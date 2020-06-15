<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-1-12
 */
class childItemAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $alertQty;
	
	/**
	 * 
	 */
	private $barcode;
	
	/**
	 * 
	 */
	private $barpic;
	
	/**
	 * 
	 */
	private $deductiblePriceChild;
	
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
	private $parentProductCode;
	
	/**
	 * 
	 */
	private $pars;
	
	/**
	 * 
	 */
	private $price;
	
	/**
	 * 
	 */
	private $supplierImg1Url;
	
	public function getAlertQty() {
		return $this->alertQty;
	}
	
	public function setAlertQty($alertQty) {
		$this->alertQty = $alertQty;
		$this->apiParams["alertQty"] = $alertQty;
	}
	
	public function getBarcode() {
		return $this->barcode;
	}
	
	public function setBarcode($barcode) {
		$this->barcode = $barcode;
		$this->apiParams["barcode"] = $barcode;
	}
	
	public function getBarpic() {
		return $this->barpic;
	}
	
	public function setBarpic($barpic) {
		$this->barpic = $barpic;
		$this->apiParams["barpic"] = $barpic;
	}
	
	public function getDeductiblePriceChild() {
		return $this->deductiblePriceChild;
	}
	
	public function setDeductiblePriceChild($deductiblePriceChild) {
		$this->deductiblePriceChild = $deductiblePriceChild;
		$this->apiParams["deductiblePriceChild"] = $deductiblePriceChild;
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
	
	public function getParentProductCode() {
		return $this->parentProductCode;
	}
	
	public function setParentProductCode($parentProductCode) {
		$this->parentProductCode = $parentProductCode;
		$this->apiParams["parentProductCode"] = $parentProductCode;
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
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getSupplierImg1Url() {
		return $this->supplierImg1Url;
	}
	
	public function setSupplierImg1Url($supplierImg1Url) {
		$this->supplierImg1Url = $supplierImg1Url;
		$this->apiParams["supplierImg1Url"] = $supplierImg1Url;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.childitem.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->parentProductCode, 'parentProductCode');
	}
	
	public function getBizName(){
		return "childItem";
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