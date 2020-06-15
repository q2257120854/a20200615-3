<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-1-5
 */
class orderNoteModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $colorMarkFlag;
	
	/**
	 * 
	 */
	private $noteContent;
	
	/**
	 * 
	 */
	private $noteFlag;
	
	/**
	 * 
	 */
	private $orderCode;
	
	public function getColorMarkFlag() {
		return $this->colorMarkFlag;
	}
	
	public function setColorMarkFlag($colorMarkFlag) {
		$this->colorMarkFlag = $colorMarkFlag;
		$this->apiParams["colorMarkFlag"] = $colorMarkFlag;
	}
	
	public function getNoteContent() {
		return $this->noteContent;
	}
	
	public function setNoteContent($noteContent) {
		$this->noteContent = $noteContent;
		$this->apiParams["noteContent"] = $noteContent;
	}
	
	public function getNoteFlag() {
		return $this->noteFlag;
	}
	
	public function setNoteFlag($noteFlag) {
		$this->noteFlag = $noteFlag;
		$this->apiParams["noteFlag"] = $noteFlag;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.ordernote.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->colorMarkFlag, 'colorMarkFlag');
		RequestCheckUtil::checkNotNull($this->noteContent, 'noteContent');
		RequestCheckUtil::checkNotNull($this->noteFlag, 'noteFlag');
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
	}
	
	public function getBizName(){
		return "orderNote";
	}
	
}

?>