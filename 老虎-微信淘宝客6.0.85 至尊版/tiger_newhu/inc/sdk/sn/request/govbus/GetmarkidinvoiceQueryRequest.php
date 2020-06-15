<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-2
 */
class GetmarkidinvoiceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $currentPage;
	
	/**
	 * 
	 */
	private $markId;
	
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
	
	public function getMarkId() {
		return $this->markId;
	}
	
	public function setMarkId($markId) {
		$this->markId = $markId;
		$this->apiParams["markId"] = $markId;
	}
	
	public function getPageNumber() {
		return $this->pageNumber;
	}
	
	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->apiParams["pageNumber"] = $pageNumber;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.getmarkidinvoice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->currentPage, 'currentPage');
		RequestCheckUtil::checkNotNull($this->markId, 'markId');
		RequestCheckUtil::checkNotNull($this->pageNumber, 'pageNumber');
	}
	
	public function getBizName(){
		return "queryGetmarkidinvoice";
	}
	
}

?>