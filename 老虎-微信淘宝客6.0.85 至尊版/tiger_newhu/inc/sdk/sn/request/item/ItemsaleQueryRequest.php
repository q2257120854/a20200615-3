<?php

/**
 * 苏宁开放平台接口 - 商品API - 获取商品销售情况
 *
 * $pack   suning.custom.itemsale.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-28
 */
class ItemsaleQueryRequest extends SelectSuningRequest {

	/**
	 * 苏宁商品名称。可通过平台业务-商品服务-获取我的商品库信息接口获取。根据接口输入内容进行精确查询,可输入中文
	 */
	private $productName;

	/**
	 * 苏宁商品编码。可通过平台业务-商品服务-获取我的商品库信息接口获取。根据接口输入内容进行精确查询
	 */
	private $productCode;

	/**
	 * 苏宁底层采购目录编码。可由平台业务-商品服务获取商品采购目录信息接口获得。根据接口输入内容进行精确查询,不可输入中文
	 */
	private $categoryCode;

	/**
	 * 查询价格区间最低值。单位:元。可精确至小数点后2位
	 */
	private $priceLimit;

	/**
	 * 查询价格区间最高值。单位:元。可精确至小数点后2位
	 */
	private $priceUpper;

	/**
	 * 商品销售状态。0：待售；1：在售；2：停售
	 */
	private $saleStatus;
	
	private $cmTitle;
	
	public function setCmTitle($cmTitle) {
		$this -> cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}

	public function getCmTitle() {
		return $this -> cmTitle;
	}

	public function setProductName($productName) {
		$this -> productName = $productName;
		$this->apiParams["productName"] = $productName;
	}

	public function getProductName() {
		return $this -> productName;
	}

	public function setProductCode($productCode) {
		$this -> productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}

	public function getProductCode() {
		return $this -> productCode;
	}

	public function setCategoryCode($categoryCode) {
		$this -> categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}

	public function getCategoryCode() {
		return $this -> categoryCode;
	}

	public function setPriceLimit($priceLimit) {
		$this -> priceLimit = $priceLimit;
		$this->apiParams["priceLimit"] = $priceLimit;
	}

	public function getPriceLimit() {
		return $this -> priceLimit;
	}

	public function setPriceUpper($priceUpper) {
		$this -> priceUpper = $priceUpper;
		$this->apiParams["priceUpper"] = $priceUpper;
	}

	public function getPriceUpper() {
		return $this -> priceUpper;
	}

	public function setSaleStatus($saleStatus) {
		$this -> saleStatus = $saleStatus;
		$this->apiParams["saleStatus"] = $saleStatus;
	}

	public function getSaleStatus() {
		return $this -> saleStatus;
	}

	public function getApiMethodName() {
		return 'suning.custom.itemsale.query';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50) {
		if(! RequestCheckUtil::checkEmpty($this -> priceLimit)){
			RequestCheckUtil::checkFormatNumber($this -> priceLimit, 'priceLimit');
		}
		
		if(! RequestCheckUtil::checkEmpty($this -> priceUpper)){
			RequestCheckUtil::checkFormatNumber($this -> priceUpper, 'priceUpper');
		}
		
		if(! RequestCheckUtil::checkEmpty($this -> saleStatus)){
			RequestCheckUtil::checkValueInItemList($this -> saleStatus, array(0,1,2), 'saleStatus');
		}
	}
	
	public function getBizName(){
		return "itemSale";
	}
}
?>