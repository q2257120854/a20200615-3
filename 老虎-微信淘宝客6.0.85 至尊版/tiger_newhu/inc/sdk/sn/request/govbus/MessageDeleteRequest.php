<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-8-24
 */
class MessageDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $id;
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
		$this->apiParams["id"] = $id;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.message.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->id, 'id');
	}
	
	public function getBizName(){
		return "deleteMessage";
	}
	
}

?>