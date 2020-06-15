<?php
/**
 * 苏宁开放平台接口 - 商品API - 商品内容修改
 *
 * $pack   suning.custom.itemcontents.modify
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-28
 */

class ItemcontentsModifyRequest extends SuningRequest
{
	/**
	 * 苏宁商品编码。可由平台业务-商品服务-获取我的商品库信息接口获取，只可填写主商品编码
	 */
	private $productCode;

    /**
     * 商品卖点。中文，对多可填写40个汉字
     */
    private $sellPoint;

    /**
     * 商品运费模板编码。可由平台业务-销售准备-运费模板批量查询接口获取。需填写对应商家维护的运维模板id。每个主商品仅填写一个运费模板
     */
    private $freightTemplateId;

    /**
     * 商家商品编码。如含有子商品，此字段无需填写
     */
    private $itemCode;

    /**
     * 商家商品介绍，UTF-8格式。将html内容的txt文本文件读取为字节数组,然后base64加密，去除空格回车后作为字段，
     * 传输时所涉及的图片不得使用外部url。允许写入CSS（禁止引用外部CSS）不支持JS
     */
    private $introduction;

    /**
     * 商品售后服务内容。最多可填写254个字或字符
     */
    private $afterSaleServiceDec;

    /**
     * 商家商品销售设定。0：设定日期；1：立即；2：放入仓库。
     * 0表示商品申请处理成功后，在设定的日期，系统自动上架；
     * 1表示商品申请处理成功后，系统立即进行上架；
     * 2表示商品申请处理成功后，商品状态为待售状态。商户可通过平台业务-商品服务-商品上架接口对待售状态的商品进行上架操作
     */
    private $saleSet;

    /**
     * 商家设定的销售日期。必须为当天之后的日期！仅在销售设定为0时展示。格式YYYY-MM-DD
     */
    private $saleDate;

    /**
     * 子商品
     */
    private $childItem;
	
	/**
	 * 来源地国家
	 */
	private $sourceCountry;
	
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
	
	private $verticalPic;
	
	private $mobileDetail;
	
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
	
	public function setVerticalPic($verticalPic) {
	    $this -> verticalPic = $verticalPic;
	    $this->apiParams["verticalPic"] = $verticalPic;
	}
	
	public function getVerticalPic() {
	    return $this -> verticalPic;
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
	
	public function setMobileDetail($mobileDetail) {
		$this -> mobileDetail = $mobileDetail;
		$this->apiParams["mobile"] = $mobileDetail->getApiParams();
	}

	public function getMobileDetail() {
		return $this -> mobileDetail;
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
	
	public function setSourceCountry($sourceCountry) {
		$this -> sourceCountry = $sourceCountry;
		$this->apiParams["sourceCountry"] = $sourceCountry;
	}

	public function getSourceCountry() {
		return $this -> sourceCountry;
	}

	public function setProductCode($productCode)
	{
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}

	public function getProductCode()
	{
		return $this->productCode;
	}

	public function setSellPoint($sellPoint)
	{
		$this->sellPoint = $sellPoint;
		$this->apiParams["sellPoint"] = $sellPoint;
	}

	public function getSellPoint()
	{
		return $this->sellPoint;
	}

	public function setFreightTemplateId($freightTemplateId)
	{
		$this->freightTemplateId = $freightTemplateId;
		$this->apiParams["freightTemplateId"] = $freightTemplateId;
	}

	public function getFreightTemplateId()
	{
		return $this->freightTemplateId;
	}

    public function setItemCode($itemCode)
	{
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}

	public function getItemCode()
	{
		return $this->itemCode;
	}

	public function setIntroduction($introduction)
	{
		$this->introduction = $introduction;
		$this->apiParams["introduction"] = $introduction;
	}

	public function getIntroduction()
	{
		return $this->introduction;
	}

	public function setAfterSaleServiceDec($afterSaleServiceDec)
	{
		$this->afterSaleServiceDec = $afterSaleServiceDec;
		$this->apiParams["afterSaleServiceDec"] = $afterSaleServiceDec;
	}

	public function getAfterSaleServiceDec()
	{
		return $this->afterSaleServiceDec;
	}

	public function setSaleSet($saleSet)
	{
		$this->saleSet = $saleSet;
		$this->apiParams["saleSet"] = $saleSet;
	}

	public function getSaleSet()
	{
		return $this->saleSet;
	}

	public function setSaleDate($saleDate)
	{
		$this->saleDate = $saleDate;
		$this->apiParams["saleDate"] = $saleDate;
	}

	public function getSaleDate()
	{
		return $this->saleDate;
	}

	public function setChildItem($childItem)
	{
		$this->childItem = $childItem;
		$arr = array();
		foreach ($childItem as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["childItem"] = $arr;
	}

	public function getChildItem()
	{
		return $this->childItem;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.itemcontents.modify';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

	public function setMobileNew($mobileNew) {
		$this -> mobileNew = $mobileNew;
		$this->apiParams["mobileNew"] = $mobileNew;
	}

	public function getMobileNew() {
		return $this -> mobileNew;
	}
	
    public function check()
	{
        RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
        if (!RequestCheckUtil::checkEmpty($this->sellPoint)) {
            RequestCheckUtil::checkMaxLength($this->sellPoint, 40, 'sellPoint');
        }
        if (!RequestCheckUtil::checkEmpty($this->afterSaleServiceDec)) {
            RequestCheckUtil::checkMaxLength($this->afterSaleServiceDec, 254, 'afterSaleServiceDec');
        }
        if (!RequestCheckUtil::checkEmpty($this->saleSet)) {
            RequestCheckUtil::checkValueInItemList($this->saleSet, array(0, 1, 2), 'saleSet');
        }
        if (!RequestCheckUtil::checkEmpty($this->saleDate)) {
            RequestCheckUtil::checkDateValue($this->saleDate, 'saleDate');
        }
	}
	
	public function getBizName(){
		return "itemContents";
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
class ChildItem
{

	private $apiParams = array();
    /**
	 * 子商品的苏宁商品编码。可由平台业务-商品服务-获取我的商品库信息接口获取，仅可填写子商品编码。如无子商品，则无需填写此字段
	 */
	private $productCode;

    /**
	 * 子商品的商家商品编码。可由平台业务-商品服务-获取我的商品库信息接口获取，如修改此字段，子商品-苏宁商品编码字段必填。如无子商品，则无需填写此字段
	 */
	private $itemCode;
	
	private $supplierImg1Url;
	
	public function setSupplierImg1Url($supplierImg1Url) {
		$this -> supplierImg1Url = $supplierImg1Url;
		$this->apiParams["supplierImg1Url"] = $supplierImg1Url;
	}

	public function getSupplierImg1Url() {
		return $this -> supplierImg1Url;
	}

    public function setProductCode($productCode)
	{
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}

	public function getProductCode()
	{
		return $this->productCode;
	}

    public function setItemCode($itemCode)
	{
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}

	public function getItemCode()
	{
		return $this->itemCode;
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
	private $apiParams = array();
	
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
		$arr = array();
		foreach ($imgUrl as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["imgUrl"] = $arr;
	}
}
?>