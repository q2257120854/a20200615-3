<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-1-12
 */
class StoregroupQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $groupCode;
	
	/**
	 * 
	 */
	private $groupName;
	
	
	
	public function getGroupCode() {
		return $this->groupCode;
	}
	
	public function setGroupCode($groupCode) {
		$this->groupCode = $groupCode;
		$this->apiParams["groupCode"] = $groupCode;
	}
	
	public function getGroupName() {
		return $this->groupName;
	}
	
	public function setGroupName($groupName) {
		$this->groupName = $groupName;
		$this->apiParams["groupName"] = $groupName;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.custom.storegroup.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryStoregroup";
	}
	
}

?>