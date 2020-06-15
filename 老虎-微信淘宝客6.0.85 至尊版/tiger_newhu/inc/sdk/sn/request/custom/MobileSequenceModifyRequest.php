<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-8-24
 */
class MobileSequenceModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $moduleInfo;
	
	public function getModuleInfo() {
		return $this->moduleInfo;
	}
	
	public function setModuleInfo($moduleInfo) {
		$this->moduleInfo = $moduleInfo;
		$arr = array();
		foreach ($moduleInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["moduleInfo"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.mobilesequence.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "modifyMobileSequence";
	}
	
}

class ModuleInfo {

	private $apiParams = array();
	
	private $moduleName;
	
	private $moduleOrder;
	
	public function getModuleName() {
		return $this->moduleName;
	}

	public function setModuleName($moduleName) {
		$this->moduleName = $moduleName;
		$this->apiParams["moduleName"] = $moduleName;
	}
	
	public function getModuleOrder() {
		return $this->moduleOrder;
	}

	public function setModuleOrder($moduleOrder) {
		$this->moduleOrder = $moduleOrder;
		$this->apiParams["moduleOrder"] = $moduleOrder;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>