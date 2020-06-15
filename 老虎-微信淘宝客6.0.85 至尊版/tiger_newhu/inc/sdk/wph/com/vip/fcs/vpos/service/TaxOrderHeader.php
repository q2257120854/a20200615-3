<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vpos\service;

class TaxOrderHeader {
	
	static $_TSPEC;
	public $vposOrderNum = null;
	public $xstoreId = null;
	public $orderAmount = null;
	public $invoiceDeductMoney = null;
	public $cAutoBillTaxNo = null;
	public $cTaxCompany = null;
	public $cTaxContact = null;
	public $cTaxLegend = null;
	public $cTaxContactTel = null;
	public $cTaxEmail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vposOrderNum'
			),
			2 => array(
			'var' => 'xstoreId'
			),
			3 => array(
			'var' => 'orderAmount'
			),
			4 => array(
			'var' => 'invoiceDeductMoney'
			),
			5 => array(
			'var' => 'cAutoBillTaxNo'
			),
			6 => array(
			'var' => 'cTaxCompany'
			),
			7 => array(
			'var' => 'cTaxContact'
			),
			8 => array(
			'var' => 'cTaxLegend'
			),
			9 => array(
			'var' => 'cTaxContactTel'
			),
			10 => array(
			'var' => 'cTaxEmail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vposOrderNum'])){
				
				$this->vposOrderNum = $vals['vposOrderNum'];
			}
			
			
			if (isset($vals['xstoreId'])){
				
				$this->xstoreId = $vals['xstoreId'];
			}
			
			
			if (isset($vals['orderAmount'])){
				
				$this->orderAmount = $vals['orderAmount'];
			}
			
			
			if (isset($vals['invoiceDeductMoney'])){
				
				$this->invoiceDeductMoney = $vals['invoiceDeductMoney'];
			}
			
			
			if (isset($vals['cAutoBillTaxNo'])){
				
				$this->cAutoBillTaxNo = $vals['cAutoBillTaxNo'];
			}
			
			
			if (isset($vals['cTaxCompany'])){
				
				$this->cTaxCompany = $vals['cTaxCompany'];
			}
			
			
			if (isset($vals['cTaxContact'])){
				
				$this->cTaxContact = $vals['cTaxContact'];
			}
			
			
			if (isset($vals['cTaxLegend'])){
				
				$this->cTaxLegend = $vals['cTaxLegend'];
			}
			
			
			if (isset($vals['cTaxContactTel'])){
				
				$this->cTaxContactTel = $vals['cTaxContactTel'];
			}
			
			
			if (isset($vals['cTaxEmail'])){
				
				$this->cTaxEmail = $vals['cTaxEmail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TaxOrderHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vposOrderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vposOrderNum);
				
			}
			
			
			
			
			if ("xstoreId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->xstoreId);
				
			}
			
			
			
			
			if ("orderAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->orderAmount);
				
			}
			
			
			
			
			if ("invoiceDeductMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->invoiceDeductMoney);
				
			}
			
			
			
			
			if ("cAutoBillTaxNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cAutoBillTaxNo);
				
			}
			
			
			
			
			if ("cTaxCompany" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cTaxCompany);
				
			}
			
			
			
			
			if ("cTaxContact" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cTaxContact);
				
			}
			
			
			
			
			if ("cTaxLegend" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cTaxLegend);
				
			}
			
			
			
			
			if ("cTaxContactTel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cTaxContactTel);
				
			}
			
			
			
			
			if ("cTaxEmail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cTaxEmail);
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->vposOrderNum !== null) {
			
			$xfer += $output->writeFieldBegin('vposOrderNum');
			$xfer += $output->writeString($this->vposOrderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->xstoreId !== null) {
			
			$xfer += $output->writeFieldBegin('xstoreId');
			$xfer += $output->writeString($this->xstoreId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderAmount !== null) {
			
			$xfer += $output->writeFieldBegin('orderAmount');
			$xfer += $output->writeDouble($this->orderAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceDeductMoney !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceDeductMoney');
			$xfer += $output->writeDouble($this->invoiceDeductMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cAutoBillTaxNo !== null) {
			
			$xfer += $output->writeFieldBegin('cAutoBillTaxNo');
			$xfer += $output->writeString($this->cAutoBillTaxNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cTaxCompany !== null) {
			
			$xfer += $output->writeFieldBegin('cTaxCompany');
			$xfer += $output->writeString($this->cTaxCompany);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cTaxContact !== null) {
			
			$xfer += $output->writeFieldBegin('cTaxContact');
			$xfer += $output->writeString($this->cTaxContact);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cTaxLegend !== null) {
			
			$xfer += $output->writeFieldBegin('cTaxLegend');
			$xfer += $output->writeString($this->cTaxLegend);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cTaxContactTel !== null) {
			
			$xfer += $output->writeFieldBegin('cTaxContactTel');
			$xfer += $output->writeString($this->cTaxContactTel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cTaxEmail !== null) {
			
			$xfer += $output->writeFieldBegin('cTaxEmail');
			$xfer += $output->writeString($this->cTaxEmail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>