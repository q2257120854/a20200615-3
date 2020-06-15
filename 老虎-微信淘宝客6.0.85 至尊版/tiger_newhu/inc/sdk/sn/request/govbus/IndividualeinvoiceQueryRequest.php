<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-10
 */
class IndividualeinvoiceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $gcItemNo;
	
	/**
	 * 
	 */
	private $gcOrderNo;
	
	public function getGcItemNo() {
		return $this->gcItemNo;
	}
	
	public function setGcItemNo($gcItemNo) {
		$this->gcItemNo = $gcItemNo;
		$this->apiParams["gcItemNo"] = $gcItemNo;
	}
	
	public function getGcOrderNo() {
		return $this->gcOrderNo;
	}
	
	public function setGcOrderNo($gcOrderNo) {
		$this->gcOrderNo = $gcOrderNo;
		$this->apiParams["gcOrderNo"] = $gcOrderNo;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.individualeinvoice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->gcItemNo, 'gcItemNo');
		RequestCheckUtil::checkNotNull($this->gcOrderNo, 'gcOrderNo');
	}
	
	public function getBizName(){
		return "queryIndividualeinvoice";
	}
	
}

?>