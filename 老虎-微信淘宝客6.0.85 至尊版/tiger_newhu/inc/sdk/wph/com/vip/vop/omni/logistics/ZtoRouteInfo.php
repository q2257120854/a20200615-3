<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\omni\logistics;

class ZtoRouteInfo {
	
	static $_TSPEC;
	public $billCode = null;
	public $scanType = null;
	public $scanSite = null;
	public $scanCity = null;
	public $scanDate = null;
	public $desc = null;
	public $contacts = null;
	public $contactsTel = null;
	public $remark = null;
	public $remark1 = null;
	public $remark2 = null;
	public $remark3 = null;
	public $remark4 = null;
	public $remark5 = null;
	public $remark6 = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'billCode'
			),
			2 => array(
			'var' => 'scanType'
			),
			3 => array(
			'var' => 'scanSite'
			),
			4 => array(
			'var' => 'scanCity'
			),
			5 => array(
			'var' => 'scanDate'
			),
			6 => array(
			'var' => 'desc'
			),
			7 => array(
			'var' => 'contacts'
			),
			8 => array(
			'var' => 'contactsTel'
			),
			9 => array(
			'var' => 'remark'
			),
			10 => array(
			'var' => 'remark1'
			),
			11 => array(
			'var' => 'remark2'
			),
			12 => array(
			'var' => 'remark3'
			),
			13 => array(
			'var' => 'remark4'
			),
			14 => array(
			'var' => 'remark5'
			),
			15 => array(
			'var' => 'remark6'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['billCode'])){
				
				$this->billCode = $vals['billCode'];
			}
			
			
			if (isset($vals['scanType'])){
				
				$this->scanType = $vals['scanType'];
			}
			
			
			if (isset($vals['scanSite'])){
				
				$this->scanSite = $vals['scanSite'];
			}
			
			
			if (isset($vals['scanCity'])){
				
				$this->scanCity = $vals['scanCity'];
			}
			
			
			if (isset($vals['scanDate'])){
				
				$this->scanDate = $vals['scanDate'];
			}
			
			
			if (isset($vals['desc'])){
				
				$this->desc = $vals['desc'];
			}
			
			
			if (isset($vals['contacts'])){
				
				$this->contacts = $vals['contacts'];
			}
			
			
			if (isset($vals['contactsTel'])){
				
				$this->contactsTel = $vals['contactsTel'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['remark1'])){
				
				$this->remark1 = $vals['remark1'];
			}
			
			
			if (isset($vals['remark2'])){
				
				$this->remark2 = $vals['remark2'];
			}
			
			
			if (isset($vals['remark3'])){
				
				$this->remark3 = $vals['remark3'];
			}
			
			
			if (isset($vals['remark4'])){
				
				$this->remark4 = $vals['remark4'];
			}
			
			
			if (isset($vals['remark5'])){
				
				$this->remark5 = $vals['remark5'];
			}
			
			
			if (isset($vals['remark6'])){
				
				$this->remark6 = $vals['remark6'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ZtoRouteInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("billCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billCode);
				
			}
			
			
			
			
			if ("scanType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scanType);
				
			}
			
			
			
			
			if ("scanSite" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scanSite);
				
			}
			
			
			
			
			if ("scanCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scanCity);
				
			}
			
			
			
			
			if ("scanDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scanDate);
				
			}
			
			
			
			
			if ("desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->desc);
				
			}
			
			
			
			
			if ("contacts" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacts);
				
			}
			
			
			
			
			if ("contactsTel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contactsTel);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("remark1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark1);
				
			}
			
			
			
			
			if ("remark2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark2);
				
			}
			
			
			
			
			if ("remark3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark3);
				
			}
			
			
			
			
			if ("remark4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark4);
				
			}
			
			
			
			
			if ("remark5" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark5);
				
			}
			
			
			
			
			if ("remark6" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark6);
				
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
		
		if($this->billCode !== null) {
			
			$xfer += $output->writeFieldBegin('billCode');
			$xfer += $output->writeString($this->billCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scanType !== null) {
			
			$xfer += $output->writeFieldBegin('scanType');
			$xfer += $output->writeString($this->scanType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scanSite !== null) {
			
			$xfer += $output->writeFieldBegin('scanSite');
			$xfer += $output->writeString($this->scanSite);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scanCity !== null) {
			
			$xfer += $output->writeFieldBegin('scanCity');
			$xfer += $output->writeString($this->scanCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scanDate !== null) {
			
			$xfer += $output->writeFieldBegin('scanDate');
			$xfer += $output->writeString($this->scanDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->desc !== null) {
			
			$xfer += $output->writeFieldBegin('desc');
			$xfer += $output->writeString($this->desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contacts !== null) {
			
			$xfer += $output->writeFieldBegin('contacts');
			$xfer += $output->writeString($this->contacts);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contactsTel !== null) {
			
			$xfer += $output->writeFieldBegin('contactsTel');
			$xfer += $output->writeString($this->contactsTel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark1 !== null) {
			
			$xfer += $output->writeFieldBegin('remark1');
			$xfer += $output->writeString($this->remark1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark2 !== null) {
			
			$xfer += $output->writeFieldBegin('remark2');
			$xfer += $output->writeString($this->remark2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark3 !== null) {
			
			$xfer += $output->writeFieldBegin('remark3');
			$xfer += $output->writeString($this->remark3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark4 !== null) {
			
			$xfer += $output->writeFieldBegin('remark4');
			$xfer += $output->writeString($this->remark4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark5 !== null) {
			
			$xfer += $output->writeFieldBegin('remark5');
			$xfer += $output->writeString($this->remark5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark6 !== null) {
			
			$xfer += $output->writeFieldBegin('remark6');
			$xfer += $output->writeString($this->remark6);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>