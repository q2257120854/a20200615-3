<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\inventory;

class SearchPoRequest {
	
	static $_TSPEC;
	public $systemPoNo = null;
	public $clientPoNo = null;
	public $warehouseCode = null;
	public $poStatus = null;
	public $createDateStart = null;
	public $createDateEnd = null;
	public $startOnRacksTimeStart = null;
	public $startOnRacksTimeEnd = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'systemPoNo'
			),
			2 => array(
			'var' => 'clientPoNo'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			4 => array(
			'var' => 'poStatus'
			),
			5 => array(
			'var' => 'createDateStart'
			),
			6 => array(
			'var' => 'createDateEnd'
			),
			7 => array(
			'var' => 'startOnRacksTimeStart'
			),
			8 => array(
			'var' => 'startOnRacksTimeEnd'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['systemPoNo'])){
				
				$this->systemPoNo = $vals['systemPoNo'];
			}
			
			
			if (isset($vals['clientPoNo'])){
				
				$this->clientPoNo = $vals['clientPoNo'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['poStatus'])){
				
				$this->poStatus = $vals['poStatus'];
			}
			
			
			if (isset($vals['createDateStart'])){
				
				$this->createDateStart = $vals['createDateStart'];
			}
			
			
			if (isset($vals['createDateEnd'])){
				
				$this->createDateEnd = $vals['createDateEnd'];
			}
			
			
			if (isset($vals['startOnRacksTimeStart'])){
				
				$this->startOnRacksTimeStart = $vals['startOnRacksTimeStart'];
			}
			
			
			if (isset($vals['startOnRacksTimeEnd'])){
				
				$this->startOnRacksTimeEnd = $vals['startOnRacksTimeEnd'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SearchPoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("systemPoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->systemPoNo);
				
			}
			
			
			
			
			if ("clientPoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->clientPoNo);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("poStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poStatus);
				
			}
			
			
			
			
			if ("createDateStart" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createDateStart);
				
			}
			
			
			
			
			if ("createDateEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createDateEnd);
				
			}
			
			
			
			
			if ("startOnRacksTimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->startOnRacksTimeStart);
				
			}
			
			
			
			
			if ("startOnRacksTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->startOnRacksTimeEnd);
				
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
		
		if($this->systemPoNo !== null) {
			
			$xfer += $output->writeFieldBegin('systemPoNo');
			$xfer += $output->writeString($this->systemPoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->clientPoNo !== null) {
			
			$xfer += $output->writeFieldBegin('clientPoNo');
			$xfer += $output->writeString($this->clientPoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poStatus !== null) {
			
			$xfer += $output->writeFieldBegin('poStatus');
			$xfer += $output->writeString($this->poStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createDateStart !== null) {
			
			$xfer += $output->writeFieldBegin('createDateStart');
			$xfer += $output->writeString($this->createDateStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createDateEnd !== null) {
			
			$xfer += $output->writeFieldBegin('createDateEnd');
			$xfer += $output->writeString($this->createDateEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startOnRacksTimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('startOnRacksTimeStart');
			$xfer += $output->writeString($this->startOnRacksTimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startOnRacksTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('startOnRacksTimeEnd');
			$xfer += $output->writeString($this->startOnRacksTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>