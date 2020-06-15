<?php
/**
 * 苏宁开放平台接口 - 苏宁服务订单校验信息反馈
 *
 * @author suning
 * @date   2016-5-27
 */
class SnInstallOrderAddRequest  extends SuningRequest{
	
	/**
	 * 条目GUID。服务订单条目编码
	 */
	private $recordGuid;
	
	/**
	 * 行项目GUID。服务订单行项目编码
	 */
	private $itemGuid;
	
	/**
	 * 服务订单号。服务订单编码。由获取厂家安装订单信息接口获得。
	 */
	private $srvOrdId;
	
	/**
	 * 订单类型。ZS01:新机安装订单；ZS02：辅助安装订单。
	 */
	private $srvOrdType;
	
	/**
	 * B2B信息标识。JS：结算；JY：校验
	 */
	private $zb2bFlag;
	
	/**
	 * 
	 */
	private $jsDetail;
	
	/**
	 * 
	 */
	private $jyDetail;
	
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
	
	public function getZb2bFlag() {
		return $this->zb2bFlag;
	}
	
	public function setZb2bFlag($zb2bFlag) {
		$this->zb2bFlag = $zb2bFlag;
		$this->apiParams["zb2bFlag"] = $zb2bFlag;
	}
	
	public function getJsDetail() {
		return $this->jsDetail;
	}
	
	public function setJsDetail($jsDetail) {
		$this->jsDetail = $jsDetail;
		$arr = array();
		foreach ($jsDetail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["jsDetail"] = $arr;
	}
	
	public function getJyDetail() {
		return $this->jyDetail;
	}
	
	public function setJyDetail($jyDetail) {
		$this->jyDetail = $jyDetail;
		$arr = array();
		foreach ($jyDetail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["jyDetail"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.asmp.sninstallorder.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->recordGuid, 'recordGuid');
		RequestCheckUtil::checkNotNull($this->itemGuid, 'itemGuid');
		RequestCheckUtil::checkNotNull($this->srvOrdId, 'srvOrdId');
		RequestCheckUtil::checkNotNull($this->srvOrdType, 'srvOrdType');
		RequestCheckUtil::checkNotNull($this->zb2bFlag, 'zb2bFlag');
		RequestCheckUtil::checkNotNull($this->jsDetail, 'jsDetail');
		RequestCheckUtil::checkNotNull($this->jyDetail, 'jyDetail');
	}
	
	public function getBizName(){
		return "addSnInstallOrder";
	}
	
}

class JsDetail {

	private $apiParams = array();
	
	private $zb2bJsdh;
	
	private $zb2bJb;
	
	private $zb2bLr;
	
	private $zb2bYc;
	
	private $zb2bJlf;
	
	private $zb2bQt;
	
	private $zb2bKkCode;
	
	private $zb2bKk;
	
	public function getZb2bJsdh() {
		return $this->zb2bJsdh;
	}

	public function setZb2bJsdh($zb2bJsdh) {
		$this->zb2bJsdh = $zb2bJsdh;
		$this->apiParams["zb2bJsdh"] = $zb2bJsdh;
	}
	
	public function getZb2bJb() {
		return $this->zb2bJb;
	}

	public function setZb2bJb($zb2bJb) {
		$this->zb2bJb = $zb2bJb;
		$this->apiParams["zb2bJb"] = $zb2bJb;
	}
	
	public function getZb2bLr() {
		return $this->zb2bLr;
	}

	public function setZb2bLr($zb2bLr) {
		$this->zb2bLr = $zb2bLr;
		$this->apiParams["zb2bLr"] = $zb2bLr;
	}
	
	public function getZb2bYc() {
		return $this->zb2bYc;
	}

	public function setZb2bYc($zb2bYc) {
		$this->zb2bYc = $zb2bYc;
		$this->apiParams["zb2bYc"] = $zb2bYc;
	}
	
	public function getZb2bJlf() {
		return $this->zb2bJlf;
	}

	public function setZb2bJlf($zb2bJlf) {
		$this->zb2bJlf = $zb2bJlf;
		$this->apiParams["zb2bJlf"] = $zb2bJlf;
	}
	
	public function getZb2bQt() {
		return $this->zb2bQt;
	}

	public function setZb2bQt($zb2bQt) {
		$this->zb2bQt = $zb2bQt;
		$this->apiParams["zb2bQt"] = $zb2bQt;
	}
	
	public function getZb2bKkCode() {
		return $this->zb2bKkCode;
	}

	public function setZb2bKkCode($zb2bKkCode) {
		$this->zb2bKkCode = $zb2bKkCode;
		$this->apiParams["zb2bKkCode"] = $zb2bKkCode;
	}
	
	public function getZb2bKk() {
		return $this->zb2bKk;
	}

	public function setZb2bKk($zb2bKk) {
		$this->zb2bKk = $zb2bKk;
		$this->apiParams["zb2bKk"] = $zb2bKk;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class JyDetail {

	private $apiParams = array();
	
	private $zb2bJyCode;
	
	private $zb2bJyDis;
	
	public function getZb2bJyCode() {
		return $this->zb2bJyCode;
	}

	public function setZb2bJyCode($zb2bJyCode) {
		$this->zb2bJyCode = $zb2bJyCode;
		$this->apiParams["zb2bJyCode"] = $zb2bJyCode;
	}
	
	public function getZb2bJyDis() {
		return $this->zb2bJyDis;
	}

	public function setZb2bJyDis($zb2bJyDis) {
		$this->zb2bJyDis = $zb2bJyDis;
		$this->apiParams["zb2bJyDis"] = $zb2bJyDis;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>