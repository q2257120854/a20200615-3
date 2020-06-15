<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-12-29
 */
class GetinvoiceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $field;
	
	/**
	 * 
	 */
	private $type;
	
	public function getField() {
		return $this->field;
	}
	
	public function setField($field) {
		$this->field = $field;
		$this->apiParams["field"] = $field;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.getinvoice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->field, 'field');
		RequestCheckUtil::checkNotNull($this->type, 'type');
	}
	
	public function getBizName(){
		return "queryGetinvoice";
	}
	
}

?>