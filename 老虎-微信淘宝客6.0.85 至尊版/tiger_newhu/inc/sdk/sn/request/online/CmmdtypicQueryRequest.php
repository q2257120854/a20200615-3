<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-9
 */
class CmmdtypicQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cmmdtyCode;
	
	/**
	 * 
	 */
	private $picType;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}
	
	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getPicType() {
		return $this->picType;
	}
	
	public function setPicType($picType) {
		$this->picType = $picType;
		$this->apiParams["picType"] = $picType;
	}
	
	public function getApiMethodName(){
		return 'suning.online.cmmdtypic.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cmmdtyCode, 'cmmdtyCode');
		RequestCheckUtil::checkNotNull($this->picType, 'picType');
	}
	
	public function getBizName(){
		return "queryCmmdtypic";
	}
	
}

?>