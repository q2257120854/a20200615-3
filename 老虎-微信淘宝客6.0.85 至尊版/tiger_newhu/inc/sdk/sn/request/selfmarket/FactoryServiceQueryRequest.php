<?php
/**
 * 苏宁开放平台接口 - 获取厂家安装订单信息
 *
 * @author suning
 * @date   2016-4-20
 */
class FactoryServiceQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 服务订单条目编码
	 */
	private $recordGuId;
	
	/**
	 * 服务订单行项目编码
	 */
	private $itemGuId;
	
	/**
	 * 服务订单编码
	 */
	private $srvOrdId;
	
	/**
	 * 订单系统入库创建起始时间，格式:yyyy-MM-ddHH:mm:ss
	 */
	private $startTime;
	
	/**
	 * 订单系统入库创建截止时间，格式:yyyy-MM-ddHH:mm:ss
	 */
	private $endTime;
	
	
	
	public function getRecordGuId() {
		return $this->recordGuId;
	}
	
	public function setRecordGuId($recordGuId) {
		$this->recordGuId = $recordGuId;
		$this->apiParams["recordGuId"] = $recordGuId;
	}
	
	public function getItemGuId() {
		return $this->itemGuId;
	}
	
	public function setItemGuId($itemGuId) {
		$this->itemGuId = $itemGuId;
		$this->apiParams["itemGuId"] = $itemGuId;
	}
	
	public function getSrvOrdId() {
		return $this->srvOrdId;
	}
	
	public function setSrvOrdId($srvOrdId) {
		$this->srvOrdId = $srvOrdId;
		$this->apiParams["srvOrdId"] = $srvOrdId;
	}
	
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
	
	
	
	public function getApiMethodName(){
		return 'suning.facservice.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
	}
	
	public function getBizName(){
		return "facserviceget";
	}
	
}

?>