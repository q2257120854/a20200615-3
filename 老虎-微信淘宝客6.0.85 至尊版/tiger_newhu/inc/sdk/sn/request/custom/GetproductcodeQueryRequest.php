<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-3-6
 */
class GetproductcodeQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $applycode;
	
	/**
	 * 
	 */
	private $suppliercmcode;
	
	public function getApplycode() {
		return $this->applycode;
	}
	
	public function setApplycode($applycode) {
		$this->applycode = $applycode;
		$this->apiParams["applycode"] = $applycode;
	}
	
	public function getSuppliercmcode() {
		return $this->suppliercmcode;
	}
	
	public function setSuppliercmcode($suppliercmcode) {
		$this->suppliercmcode = $suppliercmcode;
		$this->apiParams["suppliercmcode"] = $suppliercmcode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.getproductcode.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryGetproductcode";
	}
	
}

?>