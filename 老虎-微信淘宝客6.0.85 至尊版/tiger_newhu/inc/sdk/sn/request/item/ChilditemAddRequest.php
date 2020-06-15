<?php

/**
 * 苏宁开放平台接口 - 商品API - 子商品新增
 *
 * $pack   suning.custom.childitem.add
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */
class ChilditemAddRequest extends SuningRequest {

	/**
	 * 苏宁商品编码。由平台业务-商品服务-获取我的商品库信息接口获取，仅可填写主商品编码
	 */
	private $parentProductCode;

	/**
	 * 商户子商品对应的商户商品编码
	 */
	private $itemCode;

	/**
	 * 子商品的国标码
	 */
	private $barcode;

	/**
	 * 子商品价格。单位：元。精确到小数点后2位。如无子商品，此字段无需填写。价格范围：￥0.01-9,999,999,999,999.99
	 */
	private $price;

	/**
	 * 子商品库存。单位：件。如无子商品，此字段无需填写。库存范围：0-99999
	 */
	private $invQty;

	/**
	 * 子商品的库存预警值。 范围：0-99999
	 */
	private $alertQty;

	/**
	 * 子商品图片1地址url
	 */
	private $img1Url;

	/**
	 * 子商品图片2地址url
	 */
	private $img2Url;

	/**
	 * 子商品图片3地址url
	 */
	private $img3Url;

	/**
	 * 子商品图片4地址url
	 */
	private $img4Url;

	/**
	 * 子商品图片5地址url
	 */
	private $img5Url;

	/**
	 * 子商品
	 * array(
	 * '申请参数编码1' => '申请参数值1',
	 * '申请参数编码2' => '申请参数值2'
	 * [,...]
	 * )
	 *
	 * parCode 子商品的参数代码，通用参数代码。
	 * 可由平台业务-商品服务-获取商品参数模板接口获取。
	 * 需同参数值一一对应，若需填写多个参数，用循环节点形式展示
	 *
	 * parValue 子商品的参数值，通用参数值。
	 * 可由平台业务-商品服务-获取商品参数模板接口获得。需同参数代码一一对应，若需填写多个参数，用循环节点形式展示。
	 * 如无子商品，则无需填写此字段。通用参数中，如需填写可自定义的尺码参数时，参数值必须带上单位，例如38码
	 */
	private $pars;
	
	private $supplierImg1Url;
	
	private $supplierImg2Url;
	
	private $supplierImg3Url;
	
	private $supplierImg4Url;
	
	private $supplierImg5Url;
	
	private $barpic;
	
	public function setBarpic($barpic) {
		$this -> barpic = $barpic;
		$this->apiParams["barpic"] = $barpic;
	}

	public function getBarpic() {
		return $this -> barpic;
	}
	
	public function setSupplierImg1Url($supplierImg1Url) {
		$this -> supplierImg1Url = $supplierImg1Url;
		$this->apiParams["supplierImg1Url"] = $supplierImg1Url;
	}

	public function getSupplierImg1Url() {
		return $this -> supplierImg1Url;
	}
	
	public function setSupplierImg2Url($supplierImg2Url) {
		$this -> supplierImg2Url = $supplierImg2Url;
		$this->apiParams["supplierImg2Url"] = $supplierImg2Url;
	}

	public function getSupplierImg2Url() {
		return $this -> supplierImg2Url;
	}
	
	public function setSupplierImg3Url($supplierImg3Url) {
		$this -> supplierImg3Url = $supplierImg3Url;
		$this->apiParams["supplierImg3Url"] = $supplierImg3Url;
	}

	public function getSupplierImg3Url() {
		return $this -> supplierImg3Url;
	}
	
	public function setSupplierImg4Url($supplierImg4Url) {
		$this -> supplierImg4Url = $supplierImg4Url;
		$this->apiParams["supplierImg4Url"] = $supplierImg4Url;
	}

	public function getSupplierImg4Url() {
		return $this -> supplierImg4Url;
	}
	
	public function setSupplierImg5Url($supplierImg5Url) {
		$this -> supplierImg5Url = $supplierImg5Url;
		$this->apiParams["supplierImg5Url"] = $supplierImg5Url;
	}

	public function getSupplierImg5Url() {
		return $this -> supplierImg5Url;
	}

	public function setParentProductCode($parentProductCode) {
		$this -> parentProductCode = $parentProductCode;
		$this->apiParams["parentProductCode"] = $parentProductCode;
	}

	public function getParentProductCode() {
		return $this -> parentProductCode;
	}

	public function setItemCode($itemCode) {
		$this -> itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}

	public function getItemCode() {
		return $this -> itemCode;
	}

	public function setBarcode($barcode) {
		$this -> barcode = $barcode;
		$this->apiParams["barcode"] = $barcode;
	}

	public function getBarcode() {
		return $this -> barcode;
	}

	public function setPrice($price) {
		$this -> price = $price;
		$this->apiParams["price"] = $price;
	}

	public function getPrice() {
		return $this -> price;
	}

	public function setInvQty($invQty) {
		$this -> invQty = $invQty;
		$this->apiParams["invQty"] = $invQty;
	}

	public function getInvQty() {
		return $this -> invQty;
	}

	public function setAlertQty($alertQty) {
		$this -> alertQty = $alertQty;
		$this->apiParams["alertQty"] = $alertQty;
	}

	public function getAlertQty() {
		return $this -> alertQty;
	}

	public function setImg1Url($img1Url) {
		$this -> img1Url = $img1Url;
		$this->apiParams["img1Url"] = $img1Url;
	}

	public function getImg1Url() {
		return $this -> img1Url;
	}

	public function setImg2Url($img2Url) {
		$this -> img2Url = $img2Url;
		$this->apiParams["img2Url"] = $img2Url;
	}

	public function getImg2Url() {
		return $this -> img2Url;
	}

	public function setImg3Url($img3Url) {
		$this -> img3Url = $img3Url;
		$this->apiParams["img3Url"] = $img3Url;
	}

	public function getImg3Url() {
		return $this -> img3Url;
	}

	public function setImg4Url($img4Url) {
		$this -> img4Url = $img4Url;
		$this->apiParams["img4Url"] = $img4Url;
	}

	public function getImg4Url() {
		return $this -> img4Url;
	}

	public function setImg5Url($img5Url) {
		$this -> img5Url = $img5Url;
		$this->apiParams["img5Url"] = $img5Url;
	}

	public function getImg5Url() {
		return $this -> img5Url;
	}

	public function setPars($pars) {
		$this -> pars = $pars;
		
		$arr = array();
		foreach ($pars as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["pars"] = $arr;
	}

	public function getPars() {
		return $this -> pars;
	}

	public function getApiMethodName() {
		return 'suning.custom.childitem.add';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check() {
	}
	
	public function getBizName(){
		return "childItem";
	}
}

class Pars{
	private $apiParams = array();
	
	private $parCode;
	
	private $parValue;
	/**
	 * @return the $parCode
	 */
	public function getParCode() {
		return $this->parCode;
	}

	/**
	 * @return the $parValue
	 */
	public function getParValue() {
		return $this->parValue;
	}

	/**
	 * @param field_type $parCode
	 */
	public function setParCode($parCode) {
		$this->parCode = $parCode;
		$this->apiParams["parCode"] = $parCode;
	}

	/**
	 * @param field_type $parValue
	 */
	public function setParValue($parValue) {
		$this->parValue = $parValue;
		$this->apiParams["parValue"] = $parValue;
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}
}
?>