<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-4
 */
class ExchangegoodsQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $changeApplyIds;
	
	/**
	 * 
	 */
	private $changeStatus;
	
	/**
	 * 
	 */
	private $endModified;
	
	
	
	/**
	 * 
	 */
	private $startModified;
	
	public function getChangeApplyIds() {
		return $this->changeApplyIds;
	}
	
	public function setChangeApplyIds($changeApplyIds) {
		$this->changeApplyIds = $changeApplyIds;
		$arr = array();
		foreach ($changeApplyIds as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["changeApplyIds"] = $arr;
	}
	
	public function getChangeStatus() {
		return $this->changeStatus;
	}
	
	public function setChangeStatus($changeStatus) {
		$this->changeStatus = $changeStatus;
		$this->apiParams["changeStatus"] = $changeStatus;
	}
	
	public function getEndModified() {
		return $this->endModified;
	}
	
	public function setEndModified($endModified) {
		$this->endModified = $endModified;
		$this->apiParams["endModified"] = $endModified;
	}
	
	
	
	public function getStartModified() {
		return $this->startModified;
	}
	
	public function setStartModified($startModified) {
		$this->startModified = $startModified;
		$this->apiParams["startModified"] = $startModified;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.exchangegoods.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
	}
	
	public function getBizName(){
		return "queryExchangegoods";
	}
	
}

class ChangeApplyIds {

	private $apiParams = array();
	
	private $changeApplyId;
	
	public function getChangeApplyId() {
		return $this->changeApplyId;
	}

	public function setChangeApplyId($changeApplyId) {
		$this->changeApplyId = $changeApplyId;
		$this->apiParams["changeApplyId"] = $changeApplyId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>