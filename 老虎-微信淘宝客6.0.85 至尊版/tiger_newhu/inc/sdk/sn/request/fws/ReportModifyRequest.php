<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-8-14
 */
class ReportModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $described;
	
	/**
	 * 
	 */
	private $fileName;
	
	/**
	 * 
	 */
	private $isPass;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $itemDesc;
	
	/**
	 * 
	 */
	private $itemName;
	
	/**
	 * 
	 */
	private $memo;
	
	/**
	 * 
	 */
	private $orderDetailId;
	
	/**
	 * 
	 */
	private $productLink;
	
	/**
	 * 
	 */
	private $qtCode;
	
	/**
	 * 
	 */
	private $qtExpiry;
	
	/**
	 * 
	 */
	private $qtFile;
	
	/**
	 * 
	 */
	private $qtOrderCode;
	
	/**
	 * 
	 */
	private $qtOrderStatus;
	
	/**
	 * 
	 */
	private $qtStandard;
	
	/**
	 * 
	 */
	private $qtType;
	
	public function getDescribed() {
		return $this->described;
	}
	
	public function setDescribed($described) {
		$this->described = $described;
		$this->apiParams["described"] = $described;
	}
	
	public function getFileName() {
		return $this->fileName;
	}
	
	public function setFileName($fileName) {
		$this->fileName = $fileName;
		$this->apiParams["fileName"] = $fileName;
	}
	
	public function getIsPass() {
		return $this->isPass;
	}
	
	public function setIsPass($isPass) {
		$this->isPass = $isPass;
		$this->apiParams["isPass"] = $isPass;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getItemDesc() {
		return $this->itemDesc;
	}
	
	public function setItemDesc($itemDesc) {
		$this->itemDesc = $itemDesc;
		$this->apiParams["itemDesc"] = $itemDesc;
	}
	
	public function getItemName() {
		return $this->itemName;
	}
	
	public function setItemName($itemName) {
		$this->itemName = $itemName;
		$this->apiParams["itemName"] = $itemName;
	}
	
	public function getMemo() {
		return $this->memo;
	}
	
	public function setMemo($memo) {
		$this->memo = $memo;
		$this->apiParams["memo"] = $memo;
	}
	
	public function getOrderDetailId() {
		return $this->orderDetailId;
	}
	
	public function setOrderDetailId($orderDetailId) {
		$this->orderDetailId = $orderDetailId;
		$this->apiParams["orderDetailId"] = $orderDetailId;
	}
	
	public function getProductLink() {
		return $this->productLink;
	}
	
	public function setProductLink($productLink) {
		$this->productLink = $productLink;
		$this->apiParams["productLink"] = $productLink;
	}
	
	public function getQtCode() {
		return $this->qtCode;
	}
	
	public function setQtCode($qtCode) {
		$this->qtCode = $qtCode;
		$this->apiParams["qtCode"] = $qtCode;
	}
	
	public function getQtExpiry() {
		return $this->qtExpiry;
	}
	
	public function setQtExpiry($qtExpiry) {
		$this->qtExpiry = $qtExpiry;
		$this->apiParams["qtExpiry"] = $qtExpiry;
	}
	
	public function getQtFile() {
		return $this->qtFile;
	}
	
	public function setQtFile($qtFile) {
		$this->qtFile = $qtFile;
		$this->apiParams["qtFile"] = $qtFile;
	}
	
	public function getQtOrderCode() {
		return $this->qtOrderCode;
	}
	
	public function setQtOrderCode($qtOrderCode) {
		$this->qtOrderCode = $qtOrderCode;
		$this->apiParams["qtOrderCode"] = $qtOrderCode;
	}
	
	public function getQtOrderStatus() {
		return $this->qtOrderStatus;
	}
	
	public function setQtOrderStatus($qtOrderStatus) {
		$this->qtOrderStatus = $qtOrderStatus;
		$this->apiParams["qtOrderStatus"] = $qtOrderStatus;
	}
	
	public function getQtStandard() {
		return $this->qtStandard;
	}
	
	public function setQtStandard($qtStandard) {
		$this->qtStandard = $qtStandard;
		$this->apiParams["qtStandard"] = $qtStandard;
	}
	
	public function getQtType() {
		return $this->qtType;
	}
	
	public function setQtType($qtType) {
		$this->qtType = $qtType;
		$this->apiParams["qtType"] = $qtType;
	}
	
	public function getApiMethodName(){
		return 'suning.fws.report.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->isPass, 'isPass');
		RequestCheckUtil::checkNotNull($this->itemCode, 'itemCode');
		RequestCheckUtil::checkNotNull($this->itemName, 'itemName');
		RequestCheckUtil::checkNotNull($this->orderDetailId, 'orderDetailId');
		RequestCheckUtil::checkNotNull($this->qtCode, 'qtCode');
		RequestCheckUtil::checkNotNull($this->qtOrderCode, 'qtOrderCode');
		RequestCheckUtil::checkNotNull($this->qtOrderStatus, 'qtOrderStatus');
		RequestCheckUtil::checkNotNull($this->qtType, 'qtType');
	}
	
	public function getBizName(){
		return "modifyReport";
	}
	
}

?>