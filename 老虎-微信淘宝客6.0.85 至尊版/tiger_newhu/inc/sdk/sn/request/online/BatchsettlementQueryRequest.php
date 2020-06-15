<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-29
 */
class BatchsettlementQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cmmdtyList;
	
	public function getCmmdtyList() {
		return $this->cmmdtyList;
	}
	
	public function setCmmdtyList($cmmdtyList) {
		$this->cmmdtyList = $cmmdtyList;
		$arr = array();
		foreach ($cmmdtyList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtyList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.online.batchsettlement.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryBatchsettlement";
	}
	
}

class CmmdtyList {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	private $settlementType;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getSettlementType() {
		return $this->settlementType;
	}

	public function setSettlementType($settlementType) {
		$this->settlementType = $settlementType;
		$this->apiParams["settlementType"] = $settlementType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>