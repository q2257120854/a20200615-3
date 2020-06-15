<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-16
 */
class GetbillQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $info;
	
	/**
	 * 
	 */
	private $pageNum;
	
	/**
	 * 
	 */
	private $pgSize;
	
	/**
	 * 
	 */
	private $type;
	
	public function getInfo() {
		return $this->info;
	}
	
	public function setInfo($info) {
		$this->info = $info;
		$this->apiParams["info"] = $info;
	}
	
	public function getPageNum() {
		return $this->pageNum;
	}
	
	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->apiParams["pageNum"] = $pageNum;
	}
	
	public function getPgSize() {
		return $this->pgSize;
	}
	
	public function setPgSize($pgSize) {
		$this->pgSize = $pgSize;
		$this->apiParams["pgSize"] = $pgSize;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.getbill.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->info, 'info');
		RequestCheckUtil::checkNotNull($this->type, 'type');
	}
	
	public function getBizName(){
		return "queryGetbill";
	}
	
}

?>