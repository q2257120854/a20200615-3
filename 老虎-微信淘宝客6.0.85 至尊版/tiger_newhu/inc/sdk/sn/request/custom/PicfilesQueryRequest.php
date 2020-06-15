<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-5-14
 */
class PicfilesQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $searchName;
	
	/**
	 * 
	 */
	private $classifysCode;
	
	/**
	 * 
	 */
	private $startDate;
	
	/**
	 * 
	 */
	private $endDate;
	
	/**
	 * 
	 */
	private $fileType;
	
	/**
	 * 
	 */
	private $vendorCode;
	
	
	
	public function getSearchName() {
		return $this->searchName;
	}
	
	public function setSearchName($searchName) {
		$this->searchName = $searchName;
		$this->apiParams["searchName"] = $searchName;
	}
	
	public function getClassifysCode() {
		return $this->classifysCode;
	}
	
	public function setClassifysCode($classifysCode) {
		$this->classifysCode = $classifysCode;
		$this->apiParams["classifysCode"] = $classifysCode;
	}
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getFileType() {
		return $this->fileType;
	}
	
	public function setFileType($fileType) {
		$this->fileType = $fileType;
		$this->apiParams["fileType"] = $fileType;
	}
	
	public function getVendorCode() {
		return $this->vendorCode;
	}
	
	public function setVendorCode($vendorCode) {
		$this->vendorCode = $vendorCode;
		$this->apiParams["vendorCode"] = $vendorCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.picfiles.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
		RequestCheckUtil::checkNotNull($this->fileType, 'fileType');
		RequestCheckUtil::checkNotNull($this->vendorCode, 'vendorCode');
	}
	
	public function getBizName(){
		return "queryPicfiles";
	}
	
}

?>