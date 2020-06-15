<?php
/**
 * 苏宁开放平台接口 - 顾客投诉记录处理
 *
 * @author suning
 * @date   2014-9-25
 */
class ComphandleAddRequest  extends SuningRequest{
	
	/**
	 * 苏宁投诉编码
	 */
	private $complaintCode;
	
	/**
	 * 处理类型。1商家回复；2商家举证
	 */
	private $handleType;
	
	/**
	 * 处理内容（文字）。不超过150个汉字
	 */
	private $handleText;
	
	public function getComplaintCode() {
		return $this->complaintCode;
	}
	
	public function setComplaintCode($complaintCode) {
		$this->complaintCode = $complaintCode;
		$this->apiParams["complaintCode"] = $complaintCode;
	}
	
	public function getHandleType() {
		return $this->handleType;
	}
	
	public function setHandleType($handleType) {
		$this->handleType = $handleType;
		$this->apiParams["handleType"] = $handleType;
	}
	
	public function getHandleText() {
		return $this->handleText;
	}
	
	public function setHandleText($handleText) {
		$this->handleText = $handleText;
		$this->apiParams["handleText"] = $handleText;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.comphandle.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->complaintCode, 'complaintCode');
		RequestCheckUtil::checkNotNull($this->handleType, 'handleType');
		RequestCheckUtil::checkNotNull($this->handleText, 'handleText');
	}
	
	public function getBizName(){
		return "addComplaintHandle";
	}
	
}

?>