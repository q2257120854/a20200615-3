<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class RegisteredCarrierModelModel {
	
	static $_TSPEC;
	public $custCode = null;
	public $custName = null;
	public $custCnname = null;
	public $address = null;
	public $contact = null;
	public $tel = null;
	public $url = null;
	public $remark = null;
	public $active = null;
	public $custType = null;
	public $businessType = null;
	public $custNo = null;
	public $isPjGroup = null;
	public $eiqGroup = null;
	public $custStandardName = null;
	public $custUncode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custCode'
			),
			2 => array(
			'var' => 'custName'
			),
			3 => array(
			'var' => 'custCnname'
			),
			4 => array(
			'var' => 'address'
			),
			5 => array(
			'var' => 'contact'
			),
			6 => array(
			'var' => 'tel'
			),
			7 => array(
			'var' => 'url'
			),
			8 => array(
			'var' => 'remark'
			),
			9 => array(
			'var' => 'active'
			),
			10 => array(
			'var' => 'custType'
			),
			11 => array(
			'var' => 'businessType'
			),
			12 => array(
			'var' => 'custNo'
			),
			13 => array(
			'var' => 'isPjGroup'
			),
			14 => array(
			'var' => 'eiqGroup'
			),
			15 => array(
			'var' => 'custStandardName'
			),
			16 => array(
			'var' => 'custUncode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custCode'])){
				
				$this->custCode = $vals['custCode'];
			}
			
			
			if (isset($vals['custName'])){
				
				$this->custName = $vals['custName'];
			}
			
			
			if (isset($vals['custCnname'])){
				
				$this->custCnname = $vals['custCnname'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['contact'])){
				
				$this->contact = $vals['contact'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['url'])){
				
				$this->url = $vals['url'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['active'])){
				
				$this->active = $vals['active'];
			}
			
			
			if (isset($vals['custType'])){
				
				$this->custType = $vals['custType'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['custNo'])){
				
				$this->custNo = $vals['custNo'];
			}
			
			
			if (isset($vals['isPjGroup'])){
				
				$this->isPjGroup = $vals['isPjGroup'];
			}
			
			
			if (isset($vals['eiqGroup'])){
				
				$this->eiqGroup = $vals['eiqGroup'];
			}
			
			
			if (isset($vals['custStandardName'])){
				
				$this->custStandardName = $vals['custStandardName'];
			}
			
			
			if (isset($vals['custUncode'])){
				
				$this->custUncode = $vals['custUncode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RegisteredCarrierModelModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("custCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCode);
				
			}
			
			
			
			
			if ("custName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custName);
				
			}
			
			
			
			
			if ("custCnname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCnname);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("contact" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contact);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->url);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("active" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->active); 
				
			}
			
			
			
			
			if ("custType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->custType); 
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->businessType);
				
			}
			
			
			
			
			if ("custNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->custNo); 
				
			}
			
			
			
			
			if ("isPjGroup" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isPjGroup); 
				
			}
			
			
			
			
			if ("eiqGroup" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->eiqGroup);
				
			}
			
			
			
			
			if ("custStandardName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custStandardName);
				
			}
			
			
			
			
			if ("custUncode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custUncode);
				
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
		
		if($this->custCode !== null) {
			
			$xfer += $output->writeFieldBegin('custCode');
			$xfer += $output->writeString($this->custCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custName !== null) {
			
			$xfer += $output->writeFieldBegin('custName');
			$xfer += $output->writeString($this->custName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCnname !== null) {
			
			$xfer += $output->writeFieldBegin('custCnname');
			$xfer += $output->writeString($this->custCnname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contact !== null) {
			
			$xfer += $output->writeFieldBegin('contact');
			$xfer += $output->writeString($this->contact);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->url !== null) {
			
			$xfer += $output->writeFieldBegin('url');
			$xfer += $output->writeString($this->url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->active !== null) {
			
			$xfer += $output->writeFieldBegin('active');
			$xfer += $output->writeI32($this->active);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custType !== null) {
			
			$xfer += $output->writeFieldBegin('custType');
			$xfer += $output->writeI32($this->custType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessType !== null) {
			
			$xfer += $output->writeFieldBegin('businessType');
			$xfer += $output->writeString($this->businessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custNo !== null) {
			
			$xfer += $output->writeFieldBegin('custNo');
			$xfer += $output->writeI64($this->custNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPjGroup !== null) {
			
			$xfer += $output->writeFieldBegin('isPjGroup');
			$xfer += $output->writeI32($this->isPjGroup);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eiqGroup !== null) {
			
			$xfer += $output->writeFieldBegin('eiqGroup');
			$xfer += $output->writeString($this->eiqGroup);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custStandardName !== null) {
			
			$xfer += $output->writeFieldBegin('custStandardName');
			$xfer += $output->writeString($this->custStandardName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custUncode !== null) {
			
			$xfer += $output->writeFieldBegin('custUncode');
			$xfer += $output->writeString($this->custUncode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>