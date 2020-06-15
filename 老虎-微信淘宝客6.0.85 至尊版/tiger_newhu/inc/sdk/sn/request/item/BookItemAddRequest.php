<?php

/**
 * 苏宁开放平台接口 - 商品API - 产品申请（文化制品类商品）
 *
 * $pack   suning.custom.book.item.add
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-26
 */
class BookItemAddRequest extends SuningRequest {

	/**
	 * 苏宁采购目录编码，需填写最底层采购目录编码。可由平台业务-商品服务-获取商品采购目录信息接口获得
	 */
	private $categoryCode;

	/**
	 * 苏宁销售目录编码。可由平台业务-商品服务-获取商品销售目录信息（文化制品类）接口获得。需填写最底层销售目录
	 */
	private $saleCatalogCode;

	/**
	 * 苏宁出版社编码。可由平台业务-商品服务-获取商品品牌信息（文化制品类）接口获得。注意区分大小写
	 */
	private $brandCode;

	/**
	 * 商品名称，可填写中文。系统根据此字段进行重码校验，商品名称不得与苏宁现有的商品名称重复
	 */
	private $productName;

	/**
	 * 苏宁商品图片1地址url。至少维护一张商品主图，最多5张
	 */
	private $img1Url;

	/**
	 * 苏宁商品图片2地址url。至少维护一张商品主图，最多5张
	 */
	private $img2Url;

	/**
	 * 苏宁商品图片3地址url。至少维护一张商品主图，最多5张
	 */
	private $img3Url;

	/**
	 * 苏宁商品图片4地址url。至少维护一张商品主图，最多5张
	 */
	private $img4Url;

	/**
	 * 苏宁商品图片5地址url。至少维护一张商品主图，最多5张
	 */
	private $img5Url;

	/**
	 * 商品卖点。中文，对多可填写40个汉字
	 */
	private $sellPoint;

	/**
	 * 商品运费模板编码。需填写对应商家维护的运维模板编码。可由平台业务-销售准备-运费模板批量查询接口获取
	 */
	private $freightTemplateId;

	/**
	 * 供应商商品编码
	 */
	private $itemCode;

	/**
	 * 商品价格。单位：元。精确到小数点后2位
	 */
	private $price;

	/**
	 * 商品库存。单位：件。库存范围：0-99999
	 */
	private $invQty;

	/**
	 * 商品库存预警值。范围：0-99999
	 */
	private $alertQty;

	/**
	 * 商品售后服务内容。最多可填写254个汉字或字符
	 */
	private $afterSaleServiceDec;

	/**
	 * 商家商品销售设定。0：设定日期；1：立即；2：放入仓库。
	 * 0表示商品申请处理成功后，在设定的日期，系统自动上架；
	 * 1表示商品申请处理成功后，系统立即进行上架；
	 * 2表示商品申请处理成功后，商品状态为待售状态。
	 * 商户可通过平台业务-商品服务-商品上架接口对待售状态的商品进行上架操作
	 */
	private $saleSet;

	/**
	 * 商家设定的销售日期。仅在销售设定为0时展示。 格式YYYY-MM-DD
	 */
	private $saleDate;

	/**
	 * 子商品
	 * array(
	 * '申请参数编码1' => '申请参数值1',
	 * '申请参数编码2' => '申请参数值2'
	 * [,...]
	 * )
	 *
	 * parCode 申请参数编码，基本、动态参数编码。可由平台业务-商品服务-获取商品参数模板接口获得。
	 * 若需填写多个参数，需同参数值一一对应，用循环节点形式展示
	 *
	 * parValue 申请参数值
	 * 1.申请参数值。填写时需注意该参数是否含有单位。单选或多选类型参数值需填写对应的可选值编码。
	 * 若需填写多个参数，需同参数编码一一对应，用循环节点形式展示。商品名称参数请按照：品牌+类目+型号组合命名。
	 * 2.注意点：当parCode值为(media_comm 媒体评论,brief_intro 内容简介,about_author 作者简介,
	 * editors_choice 编辑推荐,directory 目录,book_excerpt 图书摘要,magazine_profile 杂志社简介,
	 * about_journal 期刊简介)这些值时， 需要将parValue对应的值以UTF-8字符编码进行Base64编码作为请求的参数值
	 */
	private $pars;

	/**
	 * X：表示审核。商品系统中已存在此商品，继续发布新商品，需要审核
	 */
	private $auditFlag;
	
	private $cmTitle;
	
	private $supplierImg1Url;
	
	private $supplierImg2Url;
	
	private $supplierImg3Url;
	
	private $supplierImg4Url;
	
	private $supplierImg5Url;
	
	public function setCmTitle($cmTitle) {
		$this -> cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}

	public function getCmTitle() {
		return $this -> cmTitle;
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

	public function setCategoryCode($categoryCode) {
		$this -> categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}

	public function getCategoryCode() {
		return $this -> categoryCode;
	}

	public function setSaleCatalogCode($saleCatalogCode) {
		$this -> saleCatalogCode = $saleCatalogCode;
		$this->apiParams["saleCatalogCode"] = $saleCatalogCode;
	}

	public function getSaleCatalogCode() {
		return $this -> saleCatalogCode;
	}

	public function setBrandCode($brandCode) {
		$this -> brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}

	public function getBrandCode() {
		return $this -> brandCode;
	}

	public function setProductName($productName) {
		$this -> productName = $productName;
		$this->apiParams["productName"] = $productName;
	}

	public function getProductName() {
		return $this -> productName;
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

	public function setSellPoint($sellPoint) {
		$this -> sellPoint = $sellPoint;
		$this->apiParams["sellPoint"] = $sellPoint;
	}

	public function getSellPoint() {
		return $this -> sellPoint;
	}

	public function setFreightTemplateId($freightTemplateId) {
		$this -> freightTemplateId = $freightTemplateId;
		$this->apiParams["freightTemplateId"] = $freightTemplateId;
	}

	public function getFreightTemplateId() {
		return $this -> freightTemplateId;
	}

	public function setItemCode($itemCode) {
		$this -> itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}

	public function getItemCode() {
		return $this -> itemCode;
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

	public function setAfterSaleServiceDec($afterSaleServiceDec) {
		$this -> afterSaleServiceDec = $afterSaleServiceDec;
		$this->apiParams["afterSaleServiceDec"] = $afterSaleServiceDec;
	}

	public function getAfterSaleServiceDec() {
		return $this -> afterSaleServiceDec;
	}

	public function setSaleSet($saleSet) {
		$this -> saleSet = $saleSet;
		$this->apiParams["saleSet"] = $saleSet;
	}

	public function getSaleSet() {
		return $this -> saleSet;
	}

	public function setSaleDate($saleDate) {
		$this -> saleDate = $saleDate;
		$this->apiParams["saleDate"] = $saleDate;
	}

	public function getSaleDate() {
		return $this -> saleDate;
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

	public function setAuditFlag($auditFlag) {
		$this -> auditFlag = $auditFlag;
		$this->apiParams["auditFlag"] = $auditFlag;
	}

	public function getAuditFlag() {
		return $this -> auditFlag;
	}

	public function getApiMethodName() {
		return 'suning.custom.book.item.add';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check() {
	}
	
	public function getBizName(){
		return "item";
	}
}

class Pars {
	private $apiParams = array();

	private $parCode;

	private $parValue;

	public function getParCode() {
		return $this -> parCode;
	}

	public function getParValue() {
		return $this -> parValue;
	}

	public function setParCode($parCode) {
		$this -> parCode = $parCode;
		$this->apiParams["parCode"] = $parCode;
	}

	public function setParValue($parValue) {
		$this -> parValue = $parValue;
		$this->apiParams["parValue"] = $parValue;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
}
?>