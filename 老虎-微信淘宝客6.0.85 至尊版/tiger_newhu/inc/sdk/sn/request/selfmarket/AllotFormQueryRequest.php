<?php
/**
 * 苏宁开放平台接口 - 批量获取采购调拨报表
 *
 * @author suning
 * @date   2015-12-14
 */
class AllotFormQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 发货日期开始时间。格式：yyyyMMdd
	 */
	private $startTime;
	
	/**
	 * 发货日期结束时间。格式：yyyyMMdd，时间查询范围为1天内
	 */
	private $endTime;
	
	/**
	 * 苏宁品牌编码，9位数字
	 */
	private $brandCode;
	
	
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getBrandCode() {
		return $this->brandCode;
	}
	
	public function setBrandCode($brandCode) {
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.selfmarket.allotform.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->brandCode, 'brandCode');
	}
	
	public function getBizName(){
		return "queryAllotForm";
	}
	
}

?>