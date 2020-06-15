<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-10
 */
class InvoicelogistGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $pageNum;
	
	/**
	 * 
	 */
	private $parameter;
	
	/**
	 * 
	 */
	private $parameterInvoice;
	
	/**
	 * 
	 */
	private $type;
	
	public function getPageNum() {
		return $this->pageNum;
	}
	
	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->apiParams["pageNum"] = $pageNum;
	}
	
	public function getParameter() {
		return $this->parameter;
	}
	
	public function setParameter($parameter) {
		$this->parameter = $parameter;
		$this->apiParams["parameter"] = $parameter;
	}
	
	public function getParameterInvoice() {
		return $this->parameterInvoice;
	}
	
	public function setParameterInvoice($parameterInvoice) {
		$this->parameterInvoice = $parameterInvoice;
		$this->apiParams["parameterInvoice"] = $parameterInvoice;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.invoicelogist.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->parameter, 'parameter');
		RequestCheckUtil::checkNotNull($this->type, 'type');
	}
	
	public function getBizName(){
		return "getInvoicelogist";
	}
	
}

?>