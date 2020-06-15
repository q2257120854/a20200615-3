<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-15
 */
class MainpicvideoUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $picUrlEight;
	
	/**
	 * 
	 */
	private $picUrlFive;
	
	/**
	 * 
	 */
	private $picUrlFour;
	
	/**
	 * 
	 */
	private $picUrlNine;
	
	/**
	 * 
	 */
	private $picUrlOne;
	
	/**
	 * 
	 */
	private $picUrlSeven;
	
	/**
	 * 
	 */
	private $picUrlSix;
	
	/**
	 * 
	 */
	private $picUrlTen;
	
	/**
	 * 
	 */
	private $picUrlThree;
	
	/**
	 * 
	 */
	private $picUrlTwo;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	/**
	 * 
	 */
	private $videoCode;
	
	public function getPicUrlEight() {
		return $this->picUrlEight;
	}
	
	public function setPicUrlEight($picUrlEight) {
		$this->picUrlEight = $picUrlEight;
		$this->apiParams["picUrlEight"] = $picUrlEight;
	}
	
	public function getPicUrlFive() {
		return $this->picUrlFive;
	}
	
	public function setPicUrlFive($picUrlFive) {
		$this->picUrlFive = $picUrlFive;
		$this->apiParams["picUrlFive"] = $picUrlFive;
	}
	
	public function getPicUrlFour() {
		return $this->picUrlFour;
	}
	
	public function setPicUrlFour($picUrlFour) {
		$this->picUrlFour = $picUrlFour;
		$this->apiParams["picUrlFour"] = $picUrlFour;
	}
	
	public function getPicUrlNine() {
		return $this->picUrlNine;
	}
	
	public function setPicUrlNine($picUrlNine) {
		$this->picUrlNine = $picUrlNine;
		$this->apiParams["picUrlNine"] = $picUrlNine;
	}
	
	public function getPicUrlOne() {
		return $this->picUrlOne;
	}
	
	public function setPicUrlOne($picUrlOne) {
		$this->picUrlOne = $picUrlOne;
		$this->apiParams["picUrlOne"] = $picUrlOne;
	}
	
	public function getPicUrlSeven() {
		return $this->picUrlSeven;
	}
	
	public function setPicUrlSeven($picUrlSeven) {
		$this->picUrlSeven = $picUrlSeven;
		$this->apiParams["picUrlSeven"] = $picUrlSeven;
	}
	
	public function getPicUrlSix() {
		return $this->picUrlSix;
	}
	
	public function setPicUrlSix($picUrlSix) {
		$this->picUrlSix = $picUrlSix;
		$this->apiParams["picUrlSix"] = $picUrlSix;
	}
	
	public function getPicUrlTen() {
		return $this->picUrlTen;
	}
	
	public function setPicUrlTen($picUrlTen) {
		$this->picUrlTen = $picUrlTen;
		$this->apiParams["picUrlTen"] = $picUrlTen;
	}
	
	public function getPicUrlThree() {
		return $this->picUrlThree;
	}
	
	public function setPicUrlThree($picUrlThree) {
		$this->picUrlThree = $picUrlThree;
		$this->apiParams["picUrlThree"] = $picUrlThree;
	}
	
	public function getPicUrlTwo() {
		return $this->picUrlTwo;
	}
	
	public function setPicUrlTwo($picUrlTwo) {
		$this->picUrlTwo = $picUrlTwo;
		$this->apiParams["picUrlTwo"] = $picUrlTwo;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getVideoCode() {
		return $this->videoCode;
	}
	
	public function setVideoCode($videoCode) {
		$this->videoCode = $videoCode;
		$this->apiParams["videoCode"] = $videoCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.mainpicvideo.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
		RequestCheckUtil::checkNotNull($this->videoCode, 'videoCode');
	}
	
	public function getBizName(){
		return "updateMainpicvideo";
	}
	
}

?>