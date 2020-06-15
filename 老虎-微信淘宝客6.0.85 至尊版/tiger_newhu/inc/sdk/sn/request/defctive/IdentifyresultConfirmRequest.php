<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class IdentifyresultConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $isAll;
	
	/**
	 * 
	 */
	private $serialList;
	
	/**
	 * 
	 */
	private $tripCode;
	
	public function getIsAll() {
		return $this->isAll;
	}
	
	public function setIsAll($isAll) {
		$this->isAll = $isAll;
		$this->apiParams["isAll"] = $isAll;
	}
	
	public function getSerialList() {
		return $this->serialList;
	}
	
	public function setSerialList($serialList) {
		$this->serialList = $serialList;
		$arr = array();
		foreach ($serialList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["serialList"] = $arr;
	}
	
	public function getTripCode() {
		return $this->tripCode;
	}
	
	public function setTripCode($tripCode) {
		$this->tripCode = $tripCode;
		$this->apiParams["tripCode"] = $tripCode;
	}
	
	public function getApiMethodName(){
		return 'suning.defctive.identifyresult.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->isAll, 'isAll');
		RequestCheckUtil::checkNotNull($this->tripCode, 'tripCode');
	}
	
	public function getBizName(){
		return "confirmIdentifyresult";
	}
	
}

class BasicProjecList {

	private $apiParams = array();
	
	private $basicProjecNo;
	
	private $basicProjecValue;
	
	public function getBasicProjecNo() {
		return $this->basicProjecNo;
	}

	public function setBasicProjecNo($basicProjecNo) {
		$this->basicProjecNo = $basicProjecNo;
		$this->apiParams["basicProjecNo"] = $basicProjecNo;
	}
	
	public function getBasicProjecValue() {
		return $this->basicProjecValue;
	}

	public function setBasicProjecValue($basicProjecValue) {
		$this->basicProjecValue = $basicProjecValue;
		$this->apiParams["basicProjecValue"] = $basicProjecValue;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class BlpList {

	private $apiParams = array();
	
	private $abnormalReport;
	
	private $basicProjecList;
	
	private $imperfectGrade;
	
	private $imperfectProjectList;
	
	private $updateTime;
	
	private $viewNum;
	
	public function getAbnormalReport() {
		return $this->abnormalReport;
	}

	public function setAbnormalReport($abnormalReport) {
		$this->abnormalReport = $abnormalReport;
		$this->apiParams["abnormalReport"] = $abnormalReport;
	}
	
	public function getBasicProjecList() {
		return $this->basicProjecList;
	}

	public function setBasicProjecList($basicProjecList) {
		$this->basicProjecList = $basicProjecList;
		$arr = array();
		foreach ($basicProjecList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["basicProjecList"] = $arr;
	}
	
	public function getImperfectGrade() {
		return $this->imperfectGrade;
	}

	public function setImperfectGrade($imperfectGrade) {
		$this->imperfectGrade = $imperfectGrade;
		$this->apiParams["imperfectGrade"] = $imperfectGrade;
	}
	
	public function getImperfectProjectList() {
		return $this->imperfectProjectList;
	}

	public function setImperfectProjectList($imperfectProjectList) {
		$this->imperfectProjectList = $imperfectProjectList;
		$arr = array();
		foreach ($imperfectProjectList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["imperfectProjectList"] = $arr;
	}
	
	public function getUpdateTime() {
		return $this->updateTime;
	}

	public function setUpdateTime($updateTime) {
		$this->updateTime = $updateTime;
		$this->apiParams["updateTime"] = $updateTime;
	}
	
	public function getViewNum() {
		return $this->viewNum;
	}

	public function setViewNum($viewNum) {
		$this->viewNum = $viewNum;
		$this->apiParams["viewNum"] = $viewNum;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class SerialList {

	private $apiParams = array();
	
	private $blpList;
	
	private $itemNo;
	
	private $serialNum;
	
	public function getBlpList() {
		return $this->blpList;
	}

	public function setBlpList($blpList) {
		$this->blpList = $blpList;
		$arr = array();
		foreach ($blpList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["blpList"] = $arr;
	}
	
	public function getItemNo() {
		return $this->itemNo;
	}

	public function setItemNo($itemNo) {
		$this->itemNo = $itemNo;
		$this->apiParams["itemNo"] = $itemNo;
	}
	
	public function getSerialNum() {
		return $this->serialNum;
	}

	public function setSerialNum($serialNum) {
		$this->serialNum = $serialNum;
		$this->apiParams["serialNum"] = $serialNum;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ImperfectProjectList {

	private $apiParams = array();
	
	private $imperfectProjectNo;
	
	private $imperfectProjectValue;
	
	public function getImperfectProjectNo() {
		return $this->imperfectProjectNo;
	}

	public function setImperfectProjectNo($imperfectProjectNo) {
		$this->imperfectProjectNo = $imperfectProjectNo;
		$this->apiParams["imperfectProjectNo"] = $imperfectProjectNo;
	}
	
	public function getImperfectProjectValue() {
		return $this->imperfectProjectValue;
	}

	public function setImperfectProjectValue($imperfectProjectValue) {
		$this->imperfectProjectValue = $imperfectProjectValue;
		$this->apiParams["imperfectProjectValue"] = $imperfectProjectValue;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>