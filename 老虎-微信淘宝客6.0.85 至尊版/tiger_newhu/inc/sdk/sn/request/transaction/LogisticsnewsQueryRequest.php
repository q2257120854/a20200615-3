<?php 
/**
 * 苏宁开放平台接口 - 交易API - 物流动态查询
 *
 * @author 14042058
 * @date   2014-6-4
 */
class LogisticsnewsQueryRequest extends SuningRequest{
	/**
	 * 物流公司编码
	 */
	private $logisticCode;
	/**
	 * 运单号
	 */
	private $waybillNo;
	/**
	 * @return the $logisticCode
	 */
	public function getLogisticCode() {
		return $this->logisticCode;
	}

	/**
	 * @return the $waybillNo
	 */
	public function getWaybillNo() {
		return $this->waybillNo;
	}

	/**
	 * @param field_type $logisticCode
	 */
	public function setLogisticCode($logisticCode) {
		$this->logisticCode = $logisticCode;
		$this->apiParams["logisticCode"] = $logisticCode;
	}

	/**
	 * @param field_type $waybillNo
	 */
	public function setWaybillNo($waybillNo) {
		$this->waybillNo = $waybillNo;
		$this->apiParams["waybillNo"] = $waybillNo;
	}
	
	public function getApiMethodName()
	{
		return 'suning.custom.logisticsnews.query';
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
	
	public function check()
	{
		RequestCheckUtil::checkNotNull($this->logisticCode,"logisticCode");
		RequestCheckUtil::checkNotNull($this->waybillNo,"waybillNo");
	}
	
	public function getBizName(){
		return "logisticsnews";
	}

}
?>