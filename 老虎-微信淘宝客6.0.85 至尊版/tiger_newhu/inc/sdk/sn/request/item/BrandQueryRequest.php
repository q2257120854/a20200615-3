<?php

/**
 * 苏宁开放平台接口 - 商品API - 获取商品品牌信息
 *
 * $pack   suning.custom.brand.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-26
 */
class BrandQueryRequest extends SelectSuningRequest {

	/**
	 * 苏宁品牌名称。根据输入的信息进行关键字模糊查询
	 */
	private $brandName;

	/**
	 * 苏宁品牌编码。根据输入的信息进行关键字精确查询。需注意字母大小写
	 */
	private $brandCode;

	/**
	 * 苏宁底层采购目录编码。可由平台业务-商品服务-获取商品采购目录信息接口获得
	 */
	private $categoryCode;
	
	private $targetChannel;
	
	public function setTargetChannel($targetChannel) {
		$this -> targetChannel = $targetChannel;
		$this->apiParams["targetChannel"] = $targetChannel;
	}

	public function getTargetChannel() {
		return $this -> targetChannel;
	}

	public function setBrandName($brandName) {
		$this -> brandName = $brandName;
		$this->apiParams["brandName"] = $brandName;
	}

	public function getBrandName() {
		return $this -> brandName;
	}

	public function setBrandCode($brandCode) {
		$this -> brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}

	public function getBrandCode() {
		return $this -> brandCode;
	}

	public function setCategoryCode($categoryCode) {
		$this -> categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}

	public function getCategoryCode() {
		return $this -> categoryCode;
	}

	public function getApiMethodName() {
		return 'suning.custom.brand.query';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50) {
		parent::check();
	}
	
	public function getBizName(){
		return "brand";
	}
}
?>