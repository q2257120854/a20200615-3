<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-12-18
 */
class GetcardsecretkeyQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $currentPage;
	
	/**
	 * 
	 */
	private $gcOrderNo;
	
	/**
	 * 
	 */
	private $pageNumber;
	
	public function getCurrentPage() {
		return $this->currentPage;
	}
	
	public function setCurrentPage($currentPage) {
		$this->currentPage = $currentPage;
		$this->apiParams["currentPage"] = $currentPage;
	}
	
	public function getGcOrderNo() {
		return $this->gcOrderNo;
	}
	
	public function setGcOrderNo($gcOrderNo) {
		$this->gcOrderNo = $gcOrderNo;
		$this->apiParams["gcOrderNo"] = $gcOrderNo;
	}
	
	public function getPageNumber() {
		return $this->pageNumber;
	}
	
	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->apiParams["pageNumber"] = $pageNumber;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.getcardsecretkey.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->currentPage, 'currentPage');
		RequestCheckUtil::checkNotNull($this->gcOrderNo, 'gcOrderNo');
		RequestCheckUtil::checkNotNull($this->pageNumber, 'pageNumber');
	}
	
	public function getBizName(){
		return "queryGetcardsecretkey";
	}
	
}

?>