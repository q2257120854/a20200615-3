<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-28
 */
class JsydcmmdtycategoryQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $catClass;
	
	/**
	 * 
	 */
	private $parentId;
	
	/**
	 * 
	 */
	private $pnumber;
	
	/**
	 * 
	 */
	private $psize;
	
	/**
	 * 
	 */
	private $token;
	
	public function getCatClass() {
		return $this->catClass;
	}
	
	public function setCatClass($catClass) {
		$this->catClass = $catClass;
		$this->apiParams["catClass"] = $catClass;
	}
	
	public function getParentId() {
		return $this->parentId;
	}
	
	public function setParentId($parentId) {
		$this->parentId = $parentId;
		$this->apiParams["parentId"] = $parentId;
	}
	
	public function getPnumber() {
		return $this->pnumber;
	}
	
	public function setPnumber($pnumber) {
		$this->pnumber = $pnumber;
		$this->apiParams["pnumber"] = $pnumber;
	}
	
	public function getPsize() {
		return $this->psize;
	}
	
	public function setPsize($psize) {
		$this->psize = $psize;
		$this->apiParams["psize"] = $psize;
	}
	
	public function getToken() {
		return $this->token;
	}
	
	public function setToken($token) {
		$this->token = $token;
		$this->apiParams["token"] = $token;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.jsydcmmdtycategory.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->pnumber, 'pnumber');
		RequestCheckUtil::checkNotNull($this->psize, 'psize');
		RequestCheckUtil::checkNotNull($this->token, 'token');
	}
	
	public function getBizName(){
		return "queryJsydcmmdtycategory";
	}
	
}

?>