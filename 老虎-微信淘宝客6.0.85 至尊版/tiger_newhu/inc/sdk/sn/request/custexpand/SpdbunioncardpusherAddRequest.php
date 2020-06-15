<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-7-12
 */
class SpdbunioncardpusherAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $data;
	
	/**
	 * 
	 */
	private $sign;
	
	public function getData() {
		return $this->data;
	}
	
	public function setData($data) {
		$this->data = $data;
		$this->apiParams["data"] = $data;
	}
	
	public function getSign() {
		return $this->sign;
	}
	
	public function setSign($sign) {
		$this->sign = $sign;
		$this->apiParams["sign"] = $sign;
	}
	
	public function getApiMethodName(){
		return 'suning.custexpand.spdbunioncardpusher.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addSpdbunioncardpusher";
	}
	
}

?>