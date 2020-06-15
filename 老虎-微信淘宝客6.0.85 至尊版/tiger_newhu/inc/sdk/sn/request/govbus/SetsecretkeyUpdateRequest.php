<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-12-17
 */
class SetsecretkeyUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $publicKey;
	
	/**
	 * 
	 */
	private $type;
	
	public function getPublicKey() {
		return $this->publicKey;
	}
	
	public function setPublicKey($publicKey) {
		$this->publicKey = $publicKey;
		$this->apiParams["publicKey"] = $publicKey;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.setsecretkey.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->publicKey, 'publicKey');
		RequestCheckUtil::checkNotNull($this->type, 'type');
	}
	
	public function getBizName(){
		return "updateSetsecretkey";
	}
	
}

?>