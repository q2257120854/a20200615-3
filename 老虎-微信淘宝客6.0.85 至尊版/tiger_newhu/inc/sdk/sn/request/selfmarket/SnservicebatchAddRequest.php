<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-6-28
 */
class SnservicebatchAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $sninstallDetail;
	
	public function getSninstallDetail() {
		return $this->sninstallDetail;
	}
	
	public function setSninstallDetail($sninstallDetail) {
		$this->sninstallDetail = $sninstallDetail;
		$arr = array();
		foreach ($sninstallDetail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["sninstallDetail"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.snservicebatch.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addSnservicebatch";
	}
	
}

class SninstallDetail {

	private $apiParams = array();
	
	private $recordGuid;
	
	private $itemGuid;
	
	private $srvOrdId;
	
	private $srvOrdType;
	
	private $zbtobJsdh;
	
	private $zbtobFlag;
	
	private $zbtobJyCode;
	
	private $zbtobJyDis;
	
	public function getRecordGuid() {
		return $this->recordGuid;
	}

	public function setRecordGuid($recordGuid) {
		$this->recordGuid = $recordGuid;
		$this->apiParams["recordGuid"] = $recordGuid;
	}
	
	public function getItemGuid() {
		return $this->itemGuid;
	}

	public function setItemGuid($itemGuid) {
		$this->itemGuid = $itemGuid;
		$this->apiParams["itemGuid"] = $itemGuid;
	}
	
	public function getSrvOrdId() {
		return $this->srvOrdId;
	}

	public function setSrvOrdId($srvOrdId) {
		$this->srvOrdId = $srvOrdId;
		$this->apiParams["srvOrdId"] = $srvOrdId;
	}
	
	public function getSrvOrdType() {
		return $this->srvOrdType;
	}

	public function setSrvOrdType($srvOrdType) {
		$this->srvOrdType = $srvOrdType;
		$this->apiParams["srvOrdType"] = $srvOrdType;
	}
	
	public function getZbtobJsdh() {
		return $this->zbtobJsdh;
	}

	public function setZbtobJsdh($zbtobJsdh) {
		$this->zbtobJsdh = $zbtobJsdh;
		$this->apiParams["zbtobJsdh"] = $zbtobJsdh;
	}
	
	public function getZbtobFlag() {
		return $this->zbtobFlag;
	}

	public function setZbtobFlag($zbtobFlag) {
		$this->zbtobFlag = $zbtobFlag;
		$this->apiParams["zbtobFlag"] = $zbtobFlag;
	}
	
	public function getZbtobJyCode() {
		return $this->zbtobJyCode;
	}

	public function setZbtobJyCode($zbtobJyCode) {
		$this->zbtobJyCode = $zbtobJyCode;
		$this->apiParams["zbtobJyCode"] = $zbtobJyCode;
	}
	
	public function getZbtobJyDis() {
		return $this->zbtobJyDis;
	}

	public function setZbtobJyDis($zbtobJyDis) {
		$this->zbtobJyDis = $zbtobJyDis;
		$this->apiParams["zbtobJyDis"] = $zbtobJyDis;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>