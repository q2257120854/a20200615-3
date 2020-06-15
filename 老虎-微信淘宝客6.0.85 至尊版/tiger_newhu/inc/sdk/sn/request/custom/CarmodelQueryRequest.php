<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-14
 */
class CarmodelQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $nkId;
	
	public function getNkId() {
		return $this->nkId;
	}
	
	public function setNkId($nkId) {
		$this->nkId = $nkId;
		$this->apiParams["nkId"] = $nkId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.carmodel.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->nkId, 'nkId');
	}
	
	public function getBizName(){
		return "queryCarmodel";
	}
	
}

?>