<?php

/**
 * 苏宁开放平台接口 - 商品API - 产品申请
 *
 * $pack   suning.custom.item.add
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-26
 */
class ItemAddRequest extends SuningRequest {

	/**
	 * 苏宁采购目录编码，需填写最底层采购目录编码。可由平台业务-商品服务-获取商品采购目录信息接口获得
	 */
	private $categoryCode;

	/**
	 * 苏宁品牌编码，注意区分大小写。平台业务-商品服务-获取商品品牌信息接口获得
	 */
	private $brandCode;

	/**
	 * 商品名称，可填写中文。系统根据此字段进行重码校验，商品名称不得与苏宁现有的商品名称重复
	 */
	private $productName;

	/**
	 * 苏宁商品图片1地址url。可通过平台业务-商品服务-图片上传接口获取。如含有子商品，此字段无需填写
	 */
	private $img1Url;

	/**
	 * 苏宁商品图片2地址url。可通过平台业务-商品服务-图片上传接口获取。如含有子商品，此字段无需填写
	 */
	private $img2Url;

	/**
	 * 苏宁商品图片3地址url。可通过平台业务-商品服务-图片上传接口获取。如含有子商品，此字段无需填写
	 */
	private $img3Url;

	/**
	 * 苏宁商品图片4地址url。可通过平台业务-商品服务-图片上传接口获取。如含有子商品，此字段无需填写
	 */
	private $img4Url;

	/**
	 * 苏宁商品图片5地址url。可通过平台业务-商品服务-图片上传接口获取。如含有子商品，此字段无需填写
	 */
	private $img5Url;
	
	private $cmTitle;
	
	private $supplierImg1Url;
	
	private $supplierImg2Url;
	
	private $supplierImg3Url;
	
	private $supplierImg4Url;
	
	private $supplierImg5Url;
	
	private $supplierImg6Url;
	
	private $supplierImg7Url;
	
	private $supplierImg8Url;
	
	private $supplierImg9Url;
	
	private $supplierImg10Url;
	
	private $mobileDetail;

	/**
	 * 商品卖点。中文，对多可填写40个汉字
	 */
	private $sellPoint;

	/**
	 * 商品运费模板编码。可由平台业务-销售准备-运费模板批量查询接口获取。需填写对应商家维护的运维模板编码。每个主商品仅填写一个运费模板
	 */
	private $freightTemplateId;
	
	private $highlightWordone;
	
	private $highlightWordtwo;
	
	private $highlightWordthree;

	/**
	 * 供应商商品编码。如含有子商品，此字段无需填写
	 */
	private $itemCode;

	/**
	 * 主商品价格。单位：元。精确到小数点后2位。如含有子商品，此字段无需填写。价格范围：￥0.01-9,999,999,999,999.99
	 */
	private $price;

	/**
	 * 主商品库存。单位：件。如含有子商品，此字段无需填写。库存范围：0-99999
	 */
	private $invQty;

	/**
	 * 主商品库存预警值。如含有子商品，此字段无需填写，范围：0-99999
	 */
	private $alertQty;

	/**
	 * 商家商品介绍，UTF-8格式。将html内容的txt文本文件读取为字节数组,然后base64加密，
	 * 去除空格回车后作为字段，传输时所涉及的图片不得使用外部url。允许写入CSS（禁止引用外部CSS）不支持JS
	 */
	private $introduction;

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
	 * 商家设定的销售日期。必须为当天之后的日期！仅在销售设定为0时展示。 格式YYYY-MM-DD
	 */
	private $saleDate;
	
	/**
	 * 来源地国家
	 */
	private $sourceCountry;

	/**
	 * array(
	 * '参数编码1' => '参数值1',
	 * '参数编码2' => '参数值2',
	 * [,...]
	 * )
	 *
	 * parCode 参数编码，基本、动态参数代码。可由平台业务-商品服务-获取商品参数模板接口获得。
	 * 若需填写多个参数，需同参数值一一对应，用循环节点形式展示
	 *
	 * parValue参数值，基本、动态参数值。可由平台业务-商品服务-获取商品参数模板接口获得。
	 * 填写时需注意该参数是否含有单位。单选或多选类型参数值需填写对应的可选值代码。
	 * 若需填写多个参数，需同参数代码一一对应，用循环节点形式展示
	 */
	private $pars;

	/**
	 * array(
	 * '名称1' => '数量值1',
	 * '名称2' => '数量值2',
	 * [,...]
	 * )
	 *
	 * packingListName 商品出厂时，包装盒内物品的名称。同“装箱清单-物品数量”一一对应。若多件物品以循环节点形式展示。最多可填写20件物品
	 * packingListQty 商品出厂时，包装盒内物品的数量。同“装箱清单-物品名称”一一对应。若多件物品以循环节点形式展示。最多可填写20件物品
	 */
	private $packingList;

	/**
	 * array(
	 * '名称1' => '数量值1',
	 * '名称2' => '数量值2',
	 * '名称3' => '数量值3',
	 * '名称4' => '数量值4',
	 * '名称5' => '数量值5',
	 * [,...]
	 * )
	 *
	 * num 序号
	 * moduleId 模块ID
	 * moduleName 模块名称
	 * type 模块类型
	 * content 模块内容
	 */
	private $detailModule;
	
	/**
	 * 增加手机端新版商品详情节点
	 */
	private $mobileNew;
	
	/**
	 * 子商品相关信息
	 */
	private $childItem;
	
	private $barpic;
	
	private $verticalPic;
	
	private $sellChannel;
	
	private $priceType;
	
	private $payTemplate;
	
	private $deductiblePrice;
	
	private $extractMode;
	
	private $effectiveDay;
	
	private $bookingShop;
	
	private $writeoffPayment;
	
	private $autoRefund;
	
	private $insaleRefund;
	
	private $writeoffShop;
	
	private $carServiceType;
	
	public function setcarServiceType($carServiceType) {
	    $this -> carServiceType = $carServiceType;
	    $this->apiParams["carServiceType"] = $carServiceType;
	}
	
	public function getcarServiceType() {
	    return $this -> carServiceType;
	}
	
	public function setSellChannel($sellChannel) {
		$this -> sellChannel = $sellChannel;
		$this->apiParams["sellChannel"] = $sellChannel;
	}
	
	public function getSellChannel() {
		return $this -> sellChannel;
	}
	
	public function setPriceType($priceType) {
		$this -> priceType = $priceType;
		$this->apiParams["priceType"] = $priceType;
	}
	
	public function getPriceType() {
		return $this -> priceType;
	}
	
	public function setPayTemplate($payTemplate) {
		$this -> payTemplate = $payTemplate;
		$this->apiParams["payTemplate"] = $payTemplate;
	}
	
	public function getPayTemplate() {
		return $this -> payTemplate;
	}
	
	public function setDeductiblePrice($deductiblePrice) {
		$this -> deductiblePrice = $deductiblePrice;
		$this->apiParams["deductiblePrice"] = $deductiblePrice;
	}
	
	public function getDeductiblePrice() {
		return $this -> deductiblePrice;
	}
	
	public function setExtractMode($extractMode) {
		$this -> extractMode = $extractMode;
		$this->apiParams["extractMode"] = $extractMode;
	}
	
	public function getExtractMode() {
		return $this -> extractMode;
	}
	
	public function setEffectiveDay($effectiveDay) {
		$this -> effectiveDay = $effectiveDay;
		$this->apiParams["effectiveDay"] = $effectiveDay;
	}
	
	public function getEffectiveDay() {
		return $this -> effectiveDay;
	}
	
	public function setBookingShop($bookingShop) {
		$this -> bookingShop = $bookingShop;
		$this->apiParams["bookingShop"] = $bookingShop;
	}
	
	public function getBookingShop() {
		return $this -> bookingShop;
	}
	
	public function setWriteoffPayment($writeoffPayment) {
		$this -> writeoffPayment = $writeoffPayment;
		$this->apiParams["writeoffPayment"] = $writeoffPayment;
	}
	
	public function getWriteoffPayment() {
		return $this -> writeoffPayment;
	}
	
	public function setAutoRefund($autoRefund) {
		$this -> autoRefund = $autoRefund;
		$this->apiParams["autoRefund"] = $autoRefund;
	}
	
	public function getAutoRefund() {
		return $this -> autoRefund;
	}
	
	public function setInsaleRefund($insaleRefund) {
		$this -> insaleRefund = $insaleRefund;
		$this->apiParams["insaleRefund"] = $insaleRefund;
	}
	
	public function getInsaleRefund() {
		return $this -> insaleRefund;
	}
	
	public function setWriteoffShop($writeoffShop) {
		$this -> writeoffShop = $writeoffShop;
		$this->apiParams["writeoffShop"] = $writeoffShop;
	}
	
	public function getWriteoffShop() {
		return $this -> writeoffShop;
	}
	
	public function setVerticalPic($verticalPic) {
		$this -> verticalPic = $verticalPic;
		$this->apiParams["verticalPic"] = $verticalPic;
	}
	
	public function getVerticalPic() {
		return $this -> verticalPic;
	}
	
	public function setBarpic($barpic) {
		$this -> barpic = $barpic;
		$this->apiParams["barpic"] = $barpic;
	}

	public function getBarpic() {
		return $this -> barpic;
	}

	public function setCategoryCode($categoryCode) {
		$this -> categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}

	public function getCategoryCode() {
		return $this -> categoryCode;
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
	
	public function setSupplierImg6Url($supplierImg6Url) {
		$this -> supplierImg6Url = $supplierImg6Url;
		$this->apiParams["supplierImg6Url"] = $supplierImg6Url;
	}

	public function getSupplierImg6Url() {
		return $this -> supplierImg6Url;
	}
	
	public function setSupplierImg7Url($supplierImg7Url) {
		$this -> supplierImg7Url = $supplierImg7Url;
		$this->apiParams["supplierImg7Url"] = $supplierImg7Url;
	}

	public function getSupplierImg7Url() {
		return $this -> supplierImg7Url;
	}
	
	public function setSupplierImg8Url($supplierImg8Url) {
		$this -> supplierImg8Url = $supplierImg8Url;
		$this->apiParams["supplierImg8Url"] = $supplierImg8Url;
	}

	public function getSupplierImg8Url() {
		return $this -> supplierImg8Url;
	}
	
	public function setSupplierImg9Url($supplierImg9Url) {
		$this -> supplierImg9Url = $supplierImg9Url;
		$this->apiParams["supplierImg9Url"] = $supplierImg9Url;
	}

	public function getSupplierImg9Url() {
		return $this -> supplierImg9Url;
	}
	
	public function setSupplierImg10Url($supplierImg10Url) {
		$this -> supplierImg10Url = $supplierImg10Url;
		$this->apiParams["supplierImg10Url"] = $supplierImg10Url;
	}

	public function getSupplierImg10Url() {
		return $this -> supplierImg10Url;
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
	
	public function setHighlightWordone($highlightWordone) {
	    $this -> highlightWordone = $highlightWordone;
	    $this->apiParams["highlightWordone"] = $highlightWordone;
	}
	
	public function getHighlightWordone() {
	    return $this -> highlightWordone;
	}
	
	public function setHighlightWordtwo($highlightWordtwo) {
	    $this -> highlightWordtwo = $highlightWordtwo;
	    $this->apiParams["highlightWordtwo"] = $highlightWordtwo;
	}
	
	public function getHighlightWordtwo() {
	    return $this -> highlightWordtwo;
	}
	
	public function setHighlightWordthree($highlightWordthree) {
	    $this -> highlightWordthree = $highlightWordthree;
	    $this->apiParams["highlightWordthree"] = $highlightWordthree;
	}
	
	public function getHighlightWordthree() {
	    return $this -> highlightWordthree;
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

	public function setIntroduction($introduction) {
		$this -> introduction = $introduction;
		$this->apiParams["introduction"] = $introduction;
	}

	public function getIntroduction() {
		return $this -> introduction;
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
	
	public function setSourceCountry($sourceCountry) {
		$this -> sourceCountry = $sourceCountry;
		$this->apiParams["sourceCountry"] = $sourceCountry;
	}

	public function getSourceCountry() {
		return $this -> sourceCountry;
	}
	
	public function setMobileDetail($mobileDetail) {
		$this -> mobileDetail = $mobileDetail;
		$this->apiParams["mobile"] = $mobileDetail->getApiParams();
	}

	public function getMobileDetail() {
		return $this -> mobileDetail;
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

	public function setDetailModule($detailModule) {
		$this -> detailModule = $detailModule;
		$arr = array();
		foreach ($detailModule as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["detailModule"] = $arr;
	}

	public function getDetailModule() {
		return $this -> detailModule;
	}

	public function setMobileNew($mobileNew) {
		$this -> mobileNew = $mobileNew;
		$this->apiParams["mobileNew"] = $mobileNew;
	}

	public function getMobileNew() {
		return $this -> mobileNew;
	}
	
	public function setPackingList($packingList) {
		$this -> packingList = $packingList;
		$arr = array();
		foreach ($packingList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["packingList"] = $arr;
	}

	public function getPackingList() {
		return $this -> packingList;
	}
	
	public function setChildItem($childItem) {
		$this -> childItem = $childItem;
		$arr = array();
		foreach ($childItem as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["childItem"] = $arr;
	}

	public function getChildItem() {
		return $this -> childItem;
	}

	public function getApiMethodName() {
		return 'suning.custom.item.add';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this -> categoryCode, 'categoryCode');
		RequestCheckUtil::checkNotNull($this -> brandCode, 'brandCode');
		RequestCheckUtil::checkNotNull($this -> productName, 'productName');
		RequestCheckUtil::checkNotNull($this -> sellPoint, 'sellPoint');
		RequestCheckUtil::checkMaxLength($this -> sellPoint, 40, 'sellPoint');
		RequestCheckUtil::checkNotNull($this -> itemCode, 'itemCode');
		RequestCheckUtil::checkNotNull($this -> price, 'price');
		RequestCheckUtil::checkNotNull($this -> introduction, 'introduction');
		RequestCheckUtil::checkNotNull($this -> afterSaleServiceDec, 'afterSaleServiceDec');
		RequestCheckUtil::checkMaxLength($this -> afterSaleServiceDec, 254, 'afterSaleServiceDec');
		RequestCheckUtil::checkNotNull($this -> saleSet, 'saleSet');
		RequestCheckUtil::checkValueInItemList($this -> saleSet, array(
			0,
			1,
			2
		), 'saleSet');
		RequestCheckUtil::checkNotNull($this -> saleDate, 'saleDate');
		RequestCheckUtil::checkDateValue($this -> saleDate, 'saleDate');
	}
	
	public function getBizName(){
		return "item";
	}
}

class MobileDetail{
	
	private $apiParams = array();
	
	private $summary;
	
	private $mobileContent;
	
	public function setSummary($summary) {
		$this -> summary = $summary;
		$this->apiParams["summary"] = $summary;
	}

	public function getSummary() {
		return $this -> summary;
	}
	
	public function setMobileContent($mobileContent) {
		$this -> mobileContent = $mobileContent;
		$arr = array();
		foreach ($mobileContent as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["list"] = $arr;
	}

	public function getMobileContent() {
		return $this -> mobileContent;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
	
}

class MobileContent{
	
	private $apiParams = array();
	
	private $num;
	
	private $pic;
	
	private $text;
	
	public function setNum($num) {
		$this -> num = $num;
		$this->apiParams["num"] = $num;
	}

	public function getNum() {
		return $this -> num;
	}
	
	public function setPic($pic) {
		$this -> pic = $pic;
		$this->apiParams["pic"] = $pic;
	}

	public function getPic() {
		return $this -> pic;
	}
	
	public function setText($text) {
		$this -> text = $text;
		$this->apiParams["text"] = $text;
	}

	public function getText() {
		return $this -> text;
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
	
}


/**
 * 子商品
 */
class ChildItem {
	private $apiParams = array();

	/**
	 * 子商品的商家商品编码。如无子商品，则无需填写此字段
	 */
	private $itemCode;
	
	private $barpic;

	/**
	 * 子商品的国标码。如无子商品，则无需填写此字段
	 */
	private $barcode;

	/**
	 * 子商品价格。单位：元。精确到小数点后2位。如无子商品，此字段无需填写。价格范围：0.01-9999999999999.99
	 */
	private $price;

	/**
	 * 子商品库存。单位：件。如无子商品，此字段无需填写。库存范围：0-999999
	 */
	private $invQty;

	/**
	 * 子商品的库存预警值。如无子商品，则无需填写此
	 */
	private $alertQty;

	/**
	 * 子商品图片1地址url。可通过平台业务-商品服务-图片上传接口获取。如无子商品，则无需填写此字段
	 */
	private $img1Url;

	/**
	 * 子商品图片2地址url。可通过平台业务-商品服务-图片上传接口获取。如无子商品，则无需填写此字段
	 */
	private $img2Url;

	/**
	 * 子商品图片3地址url。可通过平台业务-商品服务-图片上传接口获取。如无子商品，则无需填写此字段
	 */
	private $img3Url;

	/**
	 * 子商品图片4地址url。可通过平台业务-商品服务-图片上传接口获取。如无子商品，则无需填写此字段
	 */
	private $img4Url;

	/**
	 * 子商品图片5地址url。可通过平台业务-商品服务-图片上传接口获取。如无子商品，则无需填写此字段
	 */
	private $img5Url;
	
	private $supplierImg1Url;

	private $deductiblePriceChild;

	public function setItemCode($deductiblePriceChild) {
		$this -> deductiblePriceChild = $deductiblePriceChild;
		$this->apiParams["deductiblePriceChild"] = $deductiblePriceChild;
	}

	public function getDeductiblePriceChild() {
		return $this -> deductiblePriceChild;
	}
	
	/**
	 * array(
	 * '子商品的参数编码1' => '子商品的参数值1',
	 * '子商品的参数编码2' => '子商品的参数值2',
	 * [,...]
	 * )
	 *
	 * parCode 子商品的参数代码，通用参数代码。可由平台业务-商品服务-获取商品参数模板接口获得。
	 * 需同参数值一一对应，若需填写多个参数，用循环节点形式展示。如无子商品，则无需填写此字段
	 *
	 * parValue 子商品的参数值，通用参数值。可由平台业务-商品服务-获取商品参数模板接口获得。
	 * 需同参数代码一一对应，若需填写多个参数，用循环节点形式展示。如无子商品，则无需填写此字段。
	 * 通用参数中，如需填写可自定义的尺码参数时，参数值必须带上单位，例如38码
	 */
	private $pars;

	public function setItemCode($itemCode) {
		$this -> itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}

	public function getItemCode() {
		return $this -> itemCode;
	}
	
	public function setBarpic($barpic) {
		$this -> barpic = $barpic;
		$this->apiParams["barpic"] = $barpic;
	}

	public function getBarpic() {
		return $this -> barpic;
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
	
	public function setSupplierImg1Url($supplierImg1Url) {
		$this -> supplierImg1Url = $supplierImg1Url;
		$this->apiParams["supplierImg1Url"] = $supplierImg1Url;
	}

	public function getSupplierImg1Url() {
		return $this -> supplierImg1Url;
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
	
	public function getApiParams()
	{
		return $this->apiParams;
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

class PackingList{
	private $apiParams = array();
	
	private $packingListName;
	
	private $packingListQty;
	/**
	 * @return the $packingListName
	 */
	public function getPackingListName() {
		return $this->packingListName;
	}

	/**
	 * @return the $packingListQty
	 */
	public function getPackingListQty() {
		return $this->packingListQty;
	}

	/**
	 * @param field_type $packingListName
	 */
	public function setPackingListName($packingListName) {
		$this->packingListName = $packingListName;
		$this->apiParams["packingListName"] = $packingListName;
	}

	/**
	 * @param field_type $packingListQty
	 */
	public function setPackingListQty($packingListQty) {
		$this->packingListQty = $packingListQty;
		$this->apiParams["packingListQty"] = $packingListQty;
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}
}

class DetailModule{
	private $apiParams = array();
	
	private $num;
	
	private $moduleId;
	
	private $moduleName;
	
	private $type;
	
	private $content;

	/**
	 * @return the $num
	 */
	public function getNum() {
		return $this->num;
	}

	/**
	 * @return the $moduleId
	 */
	public function getModuleId() {
		return $this->moduleId;
	}

	/**
	 * @return the $moduleName
	 */
	public function getModuleName() {
		return $this->moduleName;
	}

	/**
	 * @return the $type
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 * @return the $content
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * @param field_type $num
	 */
	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
	}

	/**
	 * @param field_type $moduleId
	 */
	public function setModuleId($moduleId) {
		$this->moduleId = $moduleId;
		$this->apiParams["moduleId"] = $moduleId;
	}
	
	/**
	 * @param field_type $moduleName
	 */
	public function setModuleName($moduleName) {
		$this->moduleName = $moduleName;
		$this->apiParams["moduleName"] = $moduleName;
	}

	/**
	 * @param field_type $type
	 */
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	/**
	 * @param field_type $content
	 */
	public function setContent($content) {
		$this->content = $content;
		$this->apiParams["content"] = $content;
	}
}

class MobileNew{
	
	private $module;

	/**
	 * @return the $module
	 */
	public function getModule() {
		return $this->module;
	}

	public function setModule($module) {
		$this -> module = $module;
		$arr = array();
		foreach ($module as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["module"] = $arr;
	}
}	

class Module{
	
	private $moduleName;
	
	private $moduleStatus;
	
	private $couponId;
	
	private $tuijianId;
	
	private $imgUrl;

	/**
	 * @return the $moduleName
	 */
	public function getModuleName() {
		return $this->moduleName;
	}

	/**
	 * @return the $moduleId
	 */
	public function getModuleStatus() {
		return $this->moduleStatus;
	}

	/**
	 * @return the $couponId
	 */
	public function getCouponId() {
		return $this->couponId;
	}

	/**
	 * @return the $tuijianId
	 */
	public function getTuijianId() {
		return $this->tuijianId;
	}
	
	/**
	 * @return the $imgUrl
	 */
	public function getImgUrl() {
		return $this->imgUrl;
	}

	/**
	 * @param field_type $moduleName
	 */
	public function setModuleName($moduleName) {
		$this->moduleName = $moduleName;
		$this->apiParams["moduleName"] = $moduleName;
	}

	/**
	 * @param field_type $moduleStatus
	 */
	public function setModuleStatus($moduleStatus) {
		$this->moduleStatus = $moduleStatus;
		$this->apiParams["moduleStatus"] = $moduleStatus;
	}
	
	/**
	 * @param field_type $couponId
	 */
	public function setCouponId($couponId) {
		$this->couponId = $couponId;
		$this->apiParams["couponId"] = $couponId;
	}

	/**
	 * @param field_type $tuijianId
	 */
	public function setTuijianId($tuijianId) {
		$this->tuijianId = $tuijianId;
		$this->apiParams["tuijianId"] = $tuijianId;
	}
	
	/**
	 * @param field_type $imgUrl
	 */	
	public function setImgUrl($imgUrl) {
		$this -> imgUrl = $imgUrl;		
		$this->apiParams["imgUrl"] = $imgUrl;
	}
}
?>