<?php
/**
 * 苏宁开放平台接口 - 商品API - 文化制品类商品内容维护
 *
 * $pack   suning.custom.book.itemcontents.add
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-27
 */

class BookItemcontentsAddRequest extends SuningRequest
{
	/**
	 * 苏宁商品编码。可由平台业务-商品服务-获取苏宁产品信息接口获取
	 */
	private $productCode;

    /**
     * 商品卖点。中文，最多可填写40个汉字
     */
    private $sellPoint;

    /**
     * 商品运费模板编码。可由平台业务-销售准备-运费模板批量查询接口获取。需填写对应商家维护的运维模板id
     */
    private $freightTemplateId;

    /**
     * 商家商品编码
     */
    private $itemCode;

    /**
     * 主商品价格。单位：元。精确到小数点后2位
     */
    private $price;

    /**
     * 主商品库存。单位：件。如含有子商品，此字段无需填写。库存范围：0-99999
     */
    private $invQty;

    /**
     * 主商品库存预警值。如含有子商品，此字段无需填写。范围：0-99999
     */
    private $alertQty;

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

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setInvQty($invQty)
	{
		$this->invQty = $invQty;
		$this->apiParams["invQty"] = $invQty;
	}

	public function getInvQty()
	{
		return $this->invQty;
	}

	public function setAlertQty($alertQty)
	{
		$this->alertQty = $alertQty;
		$this->apiParams["alertQty"] = $alertQty;
	}

	public function getAlertQty()
	{
		return $this->alertQty;
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

    public function getApiMethodName()
	{
		return 'suning.custom.book.itemcontents.add';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
        if (!RequestCheckUtil::checkEmpty($this->sellPoint)) {
            RequestCheckUtil::checkMaxLength($this->sellPoint, 40, 'sellPoint');
        }
        RequestCheckUtil::checkNotNull($this->freightTemplateId, 'freightTemplateId');
        RequestCheckUtil::checkNotNull($this->itemCode, 'itemCode');
        RequestCheckUtil::checkNotNull($this->price, 'price');
        RequestCheckUtil::checkFormatNumber($this->price, 'price');
        RequestCheckUtil::checkNotNull($this->invQty, 'invQty');
        RequestCheckUtil::checkNotNull($this->alertQty, 'alertQty');
        RequestCheckUtil::checkNotNull($this->afterSaleServiceDec, 'afterSaleServiceDec');
        RequestCheckUtil::checkMaxLength($this->afterSaleServiceDec, 254, 'afterSaleServiceDec');
        RequestCheckUtil::checkNotNull($this->saleSet, 'saleSet');
        RequestCheckUtil::checkValueInItemList($this->saleSet, array(0, 1, 2), 'saleSet');
        if (!RequestCheckUtil::checkEmpty($this->saleDate)) {
            RequestCheckUtil::checkDateValue($this->saleDate, 'saleDate');
        }
	}
	
	public function getBizName(){
		return "itemContents";
	}
}
?>