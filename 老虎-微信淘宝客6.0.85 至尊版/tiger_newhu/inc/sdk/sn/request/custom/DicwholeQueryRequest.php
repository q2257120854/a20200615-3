<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-7-12
 */
class DicwholeQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $operType;
	
	
	
	public function getOperType() {
		return $this->operType;
	}
	
	public function setOperType($operType) {
		$this->operType = $operType;
		$this->apiParams["operType"] = $operType;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.custom.dicwhole.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->operType, 'operType');
	}
	
	public function getBizName(){
		return "queryDicwhole";
	}
	
}

?>