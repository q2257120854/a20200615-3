<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class SyncCarrierInfo {
	
	static $_TSPEC;
	public $fromWarehouse = null;
	public $custCode = null;
	public $ltOrderNo = null;
	public $exchangeRelationNo = null;
	public $backSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'fromWarehouse'
			),
			2 => array(
			'var' => 'custCode'
			),
			3 => array(
			'var' => 'ltOrderNo'
			),
			4 => array(
			'var' => 'exchangeRelationNo'
			),
			5 => array(
			'var' => 'backSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['fromWarehouse'])){
				
				$this->fromWarehouse = $vals['fromWarehouse'];
			}
			
			
			if (isset($vals['custCode'])){
				
				$this->custCode = $vals['custCode'];
			}
			
			
			if (isset($vals['ltOrderNo'])){
				
				$this->ltOrderNo = $vals['ltOrderNo'];
			}
			
			
			if (isset($vals['exchangeRelationNo'])){
				
				$this->exchangeRelationNo = $vals['exchangeRelationNo'];
			}
			
			
			if (isset($vals['backSn'])){
				
				$this->backSn = $vals['backSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SyncCarrierInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("fromWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fromWarehouse);
				
			}
			
			
			
			
			if ("custCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCode);
				
			}
			
			
			
			
			if ("ltOrderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ltOrderNo);
				
			}
			
			
			
			
			if ("exchangeRelationNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchangeRelationNo);
				
			}
			
			
			
			
			if ("backSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backSn);
				
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
		
		if($this->fromWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('fromWarehouse');
			$xfer += $output->writeString($this->fromWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCode !== null) {
			
			$xfer += $output->writeFieldBegin('custCode');
			$xfer += $output->writeString($this->custCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ltOrderNo !== null) {
			
			$xfer += $output->writeFieldBegin('ltOrderNo');
			$xfer += $output->writeString($this->ltOrderNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchangeRelationNo !== null) {
			
			$xfer += $output->writeFieldBegin('exchangeRelationNo');
			$xfer += $output->writeString($this->exchangeRelationNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backSn !== null) {
			
			$xfer += $output->writeFieldBegin('backSn');
			$xfer += $output->writeString($this->backSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>