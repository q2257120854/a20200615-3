<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-18
 */
class MvstockReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $deliNumber;
	
	/**
	 * 
	 */
	private $deliType;
	
	/**
	 * 
	 */
	private $soCreatDate;
	
	/**
	 * 
	 */
	private $soCreatTime;
	
	/**
	 * 
	 */
	private $cmmdtyMvStockInfoList;
	
	public function getDeliNumber() {
		return $this->deliNumber;
	}
	
	public function setDeliNumber($deliNumber) {
		$this->deliNumber = $deliNumber;
		$this->apiParams["deliNumber"] = $deliNumber;
	}
	
	public function getDeliType() {
		return $this->deliType;
	}
	
	public function setDeliType($deliType) {
		$this->deliType = $deliType;
		$this->apiParams["deliType"] = $deliType;
	}
	
	public function getSoCreatDate() {
		return $this->soCreatDate;
	}
	
	public function setSoCreatDate($soCreatDate) {
		$this->soCreatDate = $soCreatDate;
		$this->apiParams["soCreatDate"] = $soCreatDate;
	}
	
	public function getSoCreatTime() {
		return $this->soCreatTime;
	}
	
	public function setSoCreatTime($soCreatTime) {
		$this->soCreatTime = $soCreatTime;
		$this->apiParams["soCreatTime"] = $soCreatTime;
	}
	
	public function getCmmdtyMvStockInfoList() {
		return $this->cmmdtyMvStockInfoList;
	}
	
	public function setCmmdtyMvStockInfoList($cmmdtyMvStockInfoList) {
		$this->cmmdtyMvStockInfoList = $cmmdtyMvStockInfoList;
		$arr = array();
		foreach ($cmmdtyMvStockInfoList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtyMvStockInfoList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.customjlf.mvstock.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->deliNumber, 'deliNumber');
		RequestCheckUtil::checkNotNull($this->deliType, 'deliType');
		RequestCheckUtil::checkNotNull($this->soCreatDate, 'soCreatDate');
		RequestCheckUtil::checkNotNull($this->soCreatTime, 'soCreatTime');
	}
	
	public function getBizName(){
		return "receiveMvstock";
	}
	
}

class CmmdtyMvStockInfoList {

	private $apiParams = array();
	
	private $taskNumber;
	
	private $taskLinage;
	
	private $deliSort;
	
	private $provideAddressa;
	
	private $stockAreaa;
	
	private $provideAddressb;
	
	private $stockAreab;
	
	private $commodityCode;
	
	private $commodityDes;
	
	private $deliNum;
	
	public function getTaskNumber() {
		return $this->taskNumber;
	}

	public function setTaskNumber($taskNumber) {
		$this->taskNumber = $taskNumber;
		$this->apiParams["taskNumber"] = $taskNumber;
	}
	
	public function getTaskLinage() {
		return $this->taskLinage;
	}

	public function setTaskLinage($taskLinage) {
		$this->taskLinage = $taskLinage;
		$this->apiParams["taskLinage"] = $taskLinage;
	}
	
	public function getDeliSort() {
		return $this->deliSort;
	}

	public function setDeliSort($deliSort) {
		$this->deliSort = $deliSort;
		$this->apiParams["deliSort"] = $deliSort;
	}
	
	public function getProvideAddressa() {
		return $this->provideAddressa;
	}

	public function setProvideAddressa($provideAddressa) {
		$this->provideAddressa = $provideAddressa;
		$this->apiParams["provideAddressa"] = $provideAddressa;
	}
	
	public function getStockAreaa() {
		return $this->stockAreaa;
	}

	public function setStockAreaa($stockAreaa) {
		$this->stockAreaa = $stockAreaa;
		$this->apiParams["stockAreaa"] = $stockAreaa;
	}
	
	public function getProvideAddressb() {
		return $this->provideAddressb;
	}

	public function setProvideAddressb($provideAddressb) {
		$this->provideAddressb = $provideAddressb;
		$this->apiParams["provideAddressb"] = $provideAddressb;
	}
	
	public function getStockAreab() {
		return $this->stockAreab;
	}

	public function setStockAreab($stockAreab) {
		$this->stockAreab = $stockAreab;
		$this->apiParams["stockAreab"] = $stockAreab;
	}
	
	public function getCommodityCode() {
		return $this->commodityCode;
	}

	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
	}
	
	public function getCommodityDes() {
		return $this->commodityDes;
	}

	public function setCommodityDes($commodityDes) {
		$this->commodityDes = $commodityDes;
		$this->apiParams["commodityDes"] = $commodityDes;
	}
	
	public function getDeliNum() {
		return $this->deliNum;
	}

	public function setDeliNum($deliNum) {
		$this->deliNum = $deliNum;
		$this->apiParams["deliNum"] = $deliNum;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>