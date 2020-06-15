<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-28
 */
class CmmdtybaseinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $commoditys;
	
	public function getCommoditys() {
		return $this->commoditys;
	}
	
	public function setCommoditys($commoditys) {
		$this->commoditys = $commoditys;
		$arr = array();
		foreach ($commoditys as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["commoditys"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.online.cmmdtybaseinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryCmmdtybaseinfo";
	}
	
}

class Commoditys {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>