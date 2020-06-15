<?php
/**
 * 苏宁开放平台接口 - 交易API - 延迟交易收货时间
 *
 * @author 14042058
 * @date   2014-6-4
 */
class OrderdelayModifyRequest extends SuningRequest{
	/**
	 * 运单号
	 */
	private $expressNo;
	/**
	 * 物流公司编码
	 */
	private $expressCompanyCode;
	/**
	 * 延期收货天数
	 */
	private $delayTime;
	/**
	 * @return the $expressNo
	 */
	public function getExpressNo() {
		return $this->expressNo;
	}

	/**
	 * @return the $expressCompanyCode
	 */
	public function getExpressCompanyCode() {
		return $this->expressCompanyCode;
	}

	/**
	 * @return the $delayTime
	 */
	public function getDelayTime() {
		return $this->delayTime;
	}

	/**
	 * @param field_type $expressNo
	 */
	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}

	/**
	 * @param field_type $expressCompanyCode
	 */
	public function setExpressCompanyCode($expressCompanyCode) {
		$this->expressCompanyCode = $expressCompanyCode;
		$this->apiParams["expressCompanyCode"] = $expressCompanyCode;
	}

	/**
	 * @param field_type $delayTime
	 */
	public function setDelayTime($delayTime) {
		$this->delayTime = $delayTime;
		$this->apiParams["delayTime"] = $delayTime;
	}
	
	public function getApiMethodName()
	{
		return 'suning.custom.orderdelay.modify';
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
	
	public function check()
	{
		//非空校验
		RequestCheckUtil::checkNotNull($this->expressNo, "expressNo");
		RequestCheckUtil::checkNotNull($this->expressCompanyCode, "expressCompanyCode");
		RequestCheckUtil::checkNotNull($this->delayTime, "delayTime");
		//延迟天数校验
		$array = array("1","3","5","7","10");
		RequestCheckUtil::checkValueInItemList($this->delayTime, $array, "delayTime");
		unset($array);
	}

	public function getBizName(){
		return "orderDelay";
	}
}