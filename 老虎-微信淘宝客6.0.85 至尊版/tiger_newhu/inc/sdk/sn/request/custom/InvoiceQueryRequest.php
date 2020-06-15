<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-18
 */
class InvoiceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderNum;
	
	/**
	 * 
	 */
	private $pageNum;
	
	/**
	 * 
	 */
	private $pageRow;
	
	/**
	 * 
	 */
	private $platformCoding;
	
	/**
	 * 
	 */
	private $requestSeialNum;
	
	public function getOrderNum() {
		return $this->orderNum;
	}
	
	public function setOrderNum($orderNum) {
		$this->orderNum = $orderNum;
		$this->apiParams["orderNum"] = $orderNum;
	}
	
	public function getPageNum() {
		return $this->pageNum;
	}
	
	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->apiParams["pageNum"] = $pageNum;
	}
	
	public function getPageRow() {
		return $this->pageRow;
	}
	
	public function setPageRow($pageRow) {
		$this->pageRow = $pageRow;
		$this->apiParams["pageRow"] = $pageRow;
	}
	
	public function getPlatformCoding() {
		return $this->platformCoding;
	}
	
	public function setPlatformCoding($platformCoding) {
		$this->platformCoding = $platformCoding;
		$this->apiParams["platformCoding"] = $platformCoding;
	}
	
	public function getRequestSeialNum() {
		return $this->requestSeialNum;
	}
	
	public function setRequestSeialNum($requestSeialNum) {
		$this->requestSeialNum = $requestSeialNum;
		$this->apiParams["requestSeialNum"] = $requestSeialNum;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.invoice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->platformCoding, 'platformCoding');
	}
	
	public function getBizName(){
		return "queryInvoice";
	}
	
}

?>