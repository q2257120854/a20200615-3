<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-22
 */
class InvoiceinfoGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $platformCoding;
	
	/**
	 * 
	 */
	private $requestSeialNum;
	
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
		return 'suning.custom.invoiceinfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->platformCoding, 'platformCoding');
		RequestCheckUtil::checkNotNull($this->requestSeialNum, 'requestSeialNum');
	}
	
	public function getBizName(){
		return "getInvoiceinfo";
	}
	
}

?>