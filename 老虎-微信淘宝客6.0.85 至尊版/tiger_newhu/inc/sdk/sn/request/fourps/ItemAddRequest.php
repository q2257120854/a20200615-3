<?php
/**
 * 苏宁开放平台接口 - 商品申请接口
 *
 * @author suning
 * @date   2016-8-15
 */
class ItemAddRequest  extends SuningRequest{
	
	/**
	 * 商家商品编码(69码)。商家商品编码
	 */
	private $supplierCmCode;
	
	/**
	 * 商品名称。商品名称
	 */
	private $productName;
	
	/**
	 * 商品国标码。必须为英文或数字
	 */
	private $gbCode;
	
	/**
	 * 长（含包装）/mm。最多三位小数，且为非负数，单位：mm
	 */
	private $cmLength;
	
	/**
	 * 宽（含包装）/mm。最多三位小数，且为非负数，单位：mm
	 */
	private $cmWidth;
	
	/**
	 * 高（含包装）/mm。单位：mm
	 */
	private $cmHeight;
	
	/**
	 * 体积。单位：cm3
	 */
	private $cmVolume;
	
	/**
	 * 毛重。单位：kg
	 */
	private $grossWeight;
	
	/**
	 * 净重。单位：kg
	 */
	private $netWeight;
	
	/**
	 * 是否保质期商品。0是、1否
	 */
	private $shelfLifeFlag;
	
	/**
	 * 保质期。单位：天
	 */
	private $shelfLife;
	
	/**
	 * 装箱清单
	 */
	private $packingList;
	
	/**
	 * 商品一级类目。商品一级类目
	 */
	private $categoryName1;
	
	/**
	 * 商品二级类目。商品二级类目
	 */
	private $categoryName2;
	
	/**
	 * 品牌。品牌
	 */
	private $brandName;
	
	/**
	 * 规格。规格
	 */
	private $standard;
	
	/**
	 * 型号。型号
	 */
	private $model;
	
	/**
	 * 类目编码
	 */
	private $categoryCode;
	
	/**
	 * 品牌编码
	 */
	private $brandCode;
	
	/**
	 * 商品类型
	 */
	private $cmType;
	
	/**
	 * 商品标题
	 */
	private $cmTitle;
	
	/**
	 * 产地,默认值：国产产地:00 国产 01 进口
	 */
	private $cmArea;
	
	public function getSupplierCmCode() {
		return $this->supplierCmCode;
	}
	
	public function setSupplierCmCode($supplierCmCode) {
		$this->supplierCmCode = $supplierCmCode;
		$this->apiParams["supplierCmCode"] = $supplierCmCode;
	}
	
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getGbCode() {
		return $this->gbCode;
	}
	
	public function setGbCode($gbCode) {
		$this->gbCode = $gbCode;
		$this->apiParams["gbCode"] = $gbCode;
	}
	
	public function getCmLength() {
		return $this->cmLength;
	}
	
	public function setCmLength($cmLength) {
		$this->cmLength = $cmLength;
		$this->apiParams["cmLength"] = $cmLength;
	}
	
	public function getCmWidth() {
		return $this->cmWidth;
	}
	
	public function setCmWidth($cmWidth) {
		$this->cmWidth = $cmWidth;
		$this->apiParams["cmWidth"] = $cmWidth;
	}
	
	public function getCmHeight() {
		return $this->cmHeight;
	}
	
	public function setCmHeight($cmHeight) {
		$this->cmHeight = $cmHeight;
		$this->apiParams["cmHeight"] = $cmHeight;
	}
	
	public function getCmVolume() {
		return $this->cmVolume;
	}
	
	public function setCmVolume($cmVolume) {
		$this->cmVolume = $cmVolume;
		$this->apiParams["cmVolume"] = $cmVolume;
	}
	
	public function getGrossWeight() {
		return $this->grossWeight;
	}
	
	public function setGrossWeight($grossWeight) {
		$this->grossWeight = $grossWeight;
		$this->apiParams["grossWeight"] = $grossWeight;
	}
	
	public function getNetWeight() {
		return $this->netWeight;
	}
	
	public function setNetWeight($netWeight) {
		$this->netWeight = $netWeight;
		$this->apiParams["netWeight"] = $netWeight;
	}
	
	public function getShelfLifeFlag() {
		return $this->shelfLifeFlag;
	}
	
	public function setShelfLifeFlag($shelfLifeFlag) {
		$this->shelfLifeFlag = $shelfLifeFlag;
		$this->apiParams["shelfLifeFlag"] = $shelfLifeFlag;
	}
	
	public function getShelfLife() {
		return $this->shelfLife;
	}
	
	public function setShelfLife($shelfLife) {
		$this->shelfLife = $shelfLife;
		$this->apiParams["shelfLife"] = $shelfLife;
	}
	
	public function getPackingList() {
		return $this->packingList;
	}
	
	public function setPackingList($packingList) {
		$this->packingList = $packingList;
		$this->apiParams["packingList"] = $packingList;
	}
	
	public function getCategoryName1() {
		return $this->categoryName1;
	}
	
	public function setCategoryName1($categoryName1) {
		$this->categoryName1 = $categoryName1;
		$this->apiParams["categoryName1"] = $categoryName1;
	}
	
	public function getCategoryName2() {
		return $this->categoryName2;
	}
	
	public function setCategoryName2($categoryName2) {
		$this->categoryName2 = $categoryName2;
		$this->apiParams["categoryName2"] = $categoryName2;
	}
	
	public function getBrandName() {
		return $this->brandName;
	}
	
	public function setBrandName($brandName) {
		$this->brandName = $brandName;
		$this->apiParams["brandName"] = $brandName;
	}
	
	public function getStandard() {
		return $this->standard;
	}
	
	public function setStandard($standard) {
		$this->standard = $standard;
		$this->apiParams["standard"] = $standard;
	}
	
	public function getModel() {
		return $this->model;
	}
	
	public function setModel($model) {
		$this->model = $model;
		$this->apiParams["model"] = $model;
	}
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getBrandCode() {
		return $this->brandCode;
	}
	
	public function setBrandCode($brandCode) {
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}
	
	public function getCmType() {
		return $this->cmType;
	}
	
	public function setCmType($cmType) {
		$this->cmType = $cmType;
		$this->apiParams["cmType"] = $cmType;
	}
	
	public function getCmTitle() {
		return $this->cmTitle;
	}
	
	public function setCmTitle($cmTitle) {
		$this->cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}
	
	public function getCmArea() {
		return $this->cmArea;
	}
	
	public function setCmArea($cmArea) {
		$this->cmArea = $cmArea;
		$this->apiParams["cmArea"] = $cmArea;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.item.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCmCode, 'supplierCmCode');
		RequestCheckUtil::checkNotNull($this->productName, 'productName');
		RequestCheckUtil::checkNotNull($this->cmVolume, 'cmVolume');
		RequestCheckUtil::checkNotNull($this->grossWeight, 'grossWeight');
		RequestCheckUtil::checkNotNull($this->shelfLifeFlag, 'shelfLifeFlag');
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
		RequestCheckUtil::checkNotNull($this->brandCode, 'brandCode');
		RequestCheckUtil::checkNotNull($this->cmType, 'cmType');
	}
	
	public function getBizName(){
		return "addItem";
	}
	
}

?>