<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class BatchactivityinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $chanId;
	
	/**
	 * 
	 */
	private $pageNum;
	
	public function getChanId() {
		return $this->chanId;
	}
	
	public function setChanId($chanId) {
		$this->chanId = $chanId;
		$this->apiParams["chanId"] = $chanId;
	}
	
	public function getPageNum() {
		return $this->pageNum;
	}
	
	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->apiParams["pageNum"] = $pageNum;
	}
	
	public function getApiMethodName(){
		return 'suning.online.batchactivityinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->chanId, 'chanId');
		RequestCheckUtil::checkNotNull($this->pageNum, 'pageNum');
	}
	
	public function getBizName(){
		return "queryBatchactivityinfo";
	}
	
}

?>