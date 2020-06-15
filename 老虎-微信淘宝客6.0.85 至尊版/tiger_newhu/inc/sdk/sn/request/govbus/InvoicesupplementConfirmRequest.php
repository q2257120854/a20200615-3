<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-28
 */
class InvoicesupplementConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $applyForInvoiceReqDTO;
	
	/**
	 * 
	 */
	private $orderInfoDTO;
	
	public function getApplyForInvoiceReqDTO() {
		return $this->applyForInvoiceReqDTO;
	}
	
	public function setApplyForInvoiceReqDTO($applyForInvoiceReqDTO) {
		$this->applyForInvoiceReqDTO = $applyForInvoiceReqDTO;
		$this->apiParams["applyForInvoiceReqDTO"] = $applyForInvoiceReqDTO->getApiParams();
	}
	
	public function getOrderInfoDTO() {
		return $this->orderInfoDTO;
	}
	
	public function setOrderInfoDTO($orderInfoDTO) {
		$this->orderInfoDTO = $orderInfoDTO;
		$arr = array();
		foreach ($orderInfoDTO as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderInfoDTO"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.invoicesupplement.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "confirmInvoicesupplement";
	}
	
}

class OrderInfoDTO {

	private $apiParams = array();
	
	private $gcItemNo;
	
	private $gcOrderNo;
	
	public function getGcItemNo() {
		return $this->gcItemNo;
	}

	public function setGcItemNo($gcItemNo) {
		$this->gcItemNo = $gcItemNo;
		$this->apiParams["gcItemNo"] = $gcItemNo;
	}
	
	public function getGcOrderNo() {
		return $this->gcOrderNo;
	}

	public function setGcOrderNo($gcOrderNo) {
		$this->gcOrderNo = $gcOrderNo;
		$this->apiParams["gcOrderNo"] = $gcOrderNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ApplyForInvoiceReqDTO {

	private $apiParams = array();
	
	private $address;
	
	private $companyName;
	
	private $consigneeMobileNum;
	
	private $consigneeName;
	
	private $invoiceContent;
	
	private $invoiceType;
	
	private $markId;
	
	private $regAccount;
	
	private $regAdd;
	
	private $regBank;
	
	private $regTel;
	
	private $remark;
	
	private $taxNo;
	
	private $title;
	
	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
		$this->apiParams["address"] = $address;
	}
	
	public function getCompanyName() {
		return $this->companyName;
	}

	public function setCompanyName($companyName) {
		$this->companyName = $companyName;
		$this->apiParams["companyName"] = $companyName;
	}
	
	public function getConsigneeMobileNum() {
		return $this->consigneeMobileNum;
	}

	public function setConsigneeMobileNum($consigneeMobileNum) {
		$this->consigneeMobileNum = $consigneeMobileNum;
		$this->apiParams["consigneeMobileNum"] = $consigneeMobileNum;
	}
	
	public function getConsigneeName() {
		return $this->consigneeName;
	}

	public function setConsigneeName($consigneeName) {
		$this->consigneeName = $consigneeName;
		$this->apiParams["consigneeName"] = $consigneeName;
	}
	
	public function getInvoiceContent() {
		return $this->invoiceContent;
	}

	public function setInvoiceContent($invoiceContent) {
		$this->invoiceContent = $invoiceContent;
		$this->apiParams["invoiceContent"] = $invoiceContent;
	}
	
	public function getInvoiceType() {
		return $this->invoiceType;
	}

	public function setInvoiceType($invoiceType) {
		$this->invoiceType = $invoiceType;
		$this->apiParams["invoiceType"] = $invoiceType;
	}
	
	public function getMarkId() {
		return $this->markId;
	}

	public function setMarkId($markId) {
		$this->markId = $markId;
		$this->apiParams["markId"] = $markId;
	}
	
	public function getRegAccount() {
		return $this->regAccount;
	}

	public function setRegAccount($regAccount) {
		$this->regAccount = $regAccount;
		$this->apiParams["regAccount"] = $regAccount;
	}
	
	public function getRegAdd() {
		return $this->regAdd;
	}

	public function setRegAdd($regAdd) {
		$this->regAdd = $regAdd;
		$this->apiParams["regAdd"] = $regAdd;
	}
	
	public function getRegBank() {
		return $this->regBank;
	}

	public function setRegBank($regBank) {
		$this->regBank = $regBank;
		$this->apiParams["regBank"] = $regBank;
	}
	
	public function getRegTel() {
		return $this->regTel;
	}

	public function setRegTel($regTel) {
		$this->regTel = $regTel;
		$this->apiParams["regTel"] = $regTel;
	}
	
	public function getRemark() {
		return $this->remark;
	}

	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getTaxNo() {
		return $this->taxNo;
	}

	public function setTaxNo($taxNo) {
		$this->taxNo = $taxNo;
		$this->apiParams["taxNo"] = $taxNo;
	}
	
	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
		$this->apiParams["title"] = $title;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>