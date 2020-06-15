<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-9
 */
class AddchildAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $barpic;
	
	/**
	 * 
	 */
	private $pars;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $supplierImgUrlA;
	
	/**
	 * 
	 */
	private $price;
	
	/**
	 * 
	 */
	private $parentProductCode;
	
	/**
	 * 
	 */
	private $barcode;
	
	public function getBarpic() {
		return $this->barpic;
	}
	
	public function setBarpic($barpic) {
		$this->barpic = $barpic;
		$this->apiParams["barpic"] = $barpic;
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
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getSupplierImgUrlA() {
		return $this->supplierImgUrlA;
	}
	
	public function setSupplierImgUrlA($supplierImgUrlA) {
		$this->supplierImgUrlA = $supplierImgUrlA;
		$this->apiParams["supplierImgUrlA"] = $supplierImgUrlA;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getParentProductCode() {
		return $this->parentProductCode;
	}
	
	public function setParentProductCode($parentProductCode) {
		$this->parentProductCode = $parentProductCode;
		$this->apiParams["parentProductCode"] = $parentProductCode;
	}
	
	public function getBarcode() {
		return $this->barcode;
	}
	
	public function setBarcode($barcode) {
		$this->barcode = $barcode;
		$this->apiParams["barcode"] = $barcode;
	}
	
	public function getApiMethodName(){
		return 'suning.saleoff.addchild.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->parentProductCode, 'parentProductCode');
	}
	
	public function getBizName(){
		return "addAddchild";
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