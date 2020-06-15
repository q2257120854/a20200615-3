<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-8
 */
class StoregrouprefAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $groupCode;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getGroupCode() {
		return $this->groupCode;
	}
	
	public function setGroupCode($groupCode) {
		$this->groupCode = $groupCode;
		$this->apiParams["groupCode"] = $groupCode;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.oto.storegroupref.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->groupCode, 'groupCode');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "addStoregroupref";
	}
	
}

?>