<?php
/**
 * 苏宁开放平台接口 - 交易API - 订单备注修改
 *
 * @author 14042058
 * @date   2014-6-4
 */
class OrdernoteModifyRequest extends SuningRequest{
	/**
	 * 订单号
	 */
	private $orderCode;
	/**
	 * 备忘内容
	 */
	private $noteContent;
	/**
	 * 订单备注标示
	 */
	private $noteFlag;
	/**
	 * 交易备注旗帜
	 */
	private $colorMarkFlag;
	/**
	 * @return the $orderCode
	 */
	public function getOrderCode() {
		return $this->orderCode;
	}

	/**
	 * @return the $noteContent
	 */
	public function getNoteContent() {
		return $this->noteContent;
	}

	/**
	 * @return the $noteFlag
	 */
	public function getNoteFlag() {
		return $this->noteFlag;
	}

	/**
	 * @return the $colorMarkFlag
	 */
	public function getColorMarkFlag() {
		return $this->colorMarkFlag;
	}

	/**
	 * @param field_type $orderCode
	 */
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}

	/**
	 * @param field_type $noteContent
	 */
	public function setNoteContent($noteContent) {
		$this->noteContent = $noteContent;
		$this->apiParams["noteContent"] = $noteContent;
	}

	/**
	 * @param field_type $noteFlag
	 */
	public function setNoteFlag($noteFlag) {
		$this->noteFlag = $noteFlag;
		$this->apiParams["noteFlag"] = $noteFlag;
	}

	/**
	 * @param field_type $colorMarkFlag
	 */
	public function setColorMarkFlag($colorMarkFlag) {
		$this->colorMarkFlag = $colorMarkFlag;
		$this->apiParams["colorMarkFlag"] = $colorMarkFlag;
	}

	public function getApiMethodName()
	{
		return 'suning.custom.ordernote.modify';
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
	
	public function check()
	{
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, "orderCode");
		RequestCheckUtil::checkNotNull($this->noteContent, "noteContent");
		//值范围校验
		if(!RequestCheckUtil::checkEmpty($this->noteFlag)){
			$array = array("1","2","3");
			RequestCheckUtil::checkValueInItemList($this->noteFlag, $array, "noteFlag");
			unset($array);
		}
		
		if(!RequestCheckUtil::checkEmpty($this->colorMarkFlag)){
			$array = array("1","2","3","4","5");
			RequestCheckUtil::checkValueInItemList($this->colorMarkFlag, $array, "colorMarkFlag");
			unset($array);
		}
	}
	
	public function getBizName(){
		return "orderNote";
	}
}

?>