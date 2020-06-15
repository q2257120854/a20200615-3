<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-14
 */
class InvoicebatchDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $batchInfos;
	
	public function getBatchInfos() {
		return $this->batchInfos;
	}
	
	public function setBatchInfos($batchInfos) {
		$this->batchInfos = $batchInfos;
		$arr = array();
		foreach ($batchInfos as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["batchInfos"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.invoicebatch.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "deleteInvoicebatch";
	}
	
}

class BatchInfos {

	private $apiParams = array();
	
	private $batchNo;
	
	public function getBatchNo() {
		return $this->batchNo;
	}

	public function setBatchNo($batchNo) {
		$this->batchNo = $batchNo;
		$this->apiParams["batchNo"] = $batchNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>