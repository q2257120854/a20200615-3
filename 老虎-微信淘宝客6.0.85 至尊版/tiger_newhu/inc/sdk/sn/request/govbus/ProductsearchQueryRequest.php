<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-4-20
 */
class ProductsearchQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $aggregate;
	
	/**
	 * 
	 */
	private $attrList;
	
	/**
	 * 
	 */
	private $brandId;
	
	/**
	 * 
	 */
	private $categoryIdOne;
	
	/**
	 * 
	 */
	private $categoryIdThree;
	
	/**
	 * 
	 */
	private $categoryIdTwo;
	
	/**
	 * 
	 */
	private $cityCode;
	
	/**
	 * 
	 */
	private $limit;
	
	/**
	 * 
	 */
	private $max;
	
	/**
	 * 
	 */
	private $min;
	
	/**
	 * 
	 */
	private $page;
	
	/**
	 * 
	 */
	private $searchContent;
	
	/**
	 * 
	 */
	private $sortType;
	
	public function getAggregate() {
		return $this->aggregate;
	}
	
	public function setAggregate($aggregate) {
		$this->aggregate = $aggregate;
		$this->apiParams["aggregate"] = $aggregate;
	}
	
	public function getAttrList() {
		return $this->attrList;
	}
	
	public function setAttrList($attrList) {
		$this->attrList = $attrList;
		$this->apiParams["attrList"] = $attrList;
	}
	
	public function getBrandId() {
		return $this->brandId;
	}
	
	public function setBrandId($brandId) {
		$this->brandId = $brandId;
		$this->apiParams["brandId"] = $brandId;
	}
	
	public function getCategoryIdOne() {
		return $this->categoryIdOne;
	}
	
	public function setCategoryIdOne($categoryIdOne) {
		$this->categoryIdOne = $categoryIdOne;
		$this->apiParams["categoryIdOne"] = $categoryIdOne;
	}
	
	public function getCategoryIdThree() {
		return $this->categoryIdThree;
	}
	
	public function setCategoryIdThree($categoryIdThree) {
		$this->categoryIdThree = $categoryIdThree;
		$this->apiParams["categoryIdThree"] = $categoryIdThree;
	}
	
	public function getCategoryIdTwo() {
		return $this->categoryIdTwo;
	}
	
	public function setCategoryIdTwo($categoryIdTwo) {
		$this->categoryIdTwo = $categoryIdTwo;
		$this->apiParams["categoryIdTwo"] = $categoryIdTwo;
	}
	
	public function getCityCode() {
		return $this->cityCode;
	}
	
	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
	public function getLimit() {
		return $this->limit;
	}
	
	public function setLimit($limit) {
		$this->limit = $limit;
		$this->apiParams["limit"] = $limit;
	}
	
	public function getMax() {
		return $this->max;
	}
	
	public function setMax($max) {
		$this->max = $max;
		$this->apiParams["max"] = $max;
	}
	
	public function getMin() {
		return $this->min;
	}
	
	public function setMin($min) {
		$this->min = $min;
		$this->apiParams["min"] = $min;
	}
	
	public function getPage() {
		return $this->page;
	}
	
	public function setPage($page) {
		$this->page = $page;
		$this->apiParams["page"] = $page;
	}
	
	public function getSearchContent() {
		return $this->searchContent;
	}
	
	public function setSearchContent($searchContent) {
		$this->searchContent = $searchContent;
		$this->apiParams["searchContent"] = $searchContent;
	}
	
	public function getSortType() {
		return $this->sortType;
	}
	
	public function setSortType($sortType) {
		$this->sortType = $sortType;
		$this->apiParams["sortType"] = $sortType;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.productsearch.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cityCode, 'cityCode');
	}
	
	public function getBizName(){
		return "queryProductsearch";
	}
	
}

?>