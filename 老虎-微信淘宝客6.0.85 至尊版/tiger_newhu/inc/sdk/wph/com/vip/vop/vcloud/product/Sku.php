<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\product;

class Sku {
	
	static $_TSPEC;
	public $ean = null;
	public $isOnline = null;
	public $size = null;
	public $taxClassId = null;
	public $color = null;
	public $sftpFileLogId = null;
	public $status = null;
	public $isDeleted = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ean'
			),
			2 => array(
			'var' => 'isOnline'
			),
			3 => array(
			'var' => 'size'
			),
			4 => array(
			'var' => 'taxClassId'
			),
			5 => array(
			'var' => 'color'
			),
			6 => array(
			'var' => 'sftpFileLogId'
			),
			7 => array(
			'var' => 'status'
			),
			8 => array(
			'var' => 'isDeleted'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ean'])){
				
				$this->ean = $vals['ean'];
			}
			
			
			if (isset($vals['isOnline'])){
				
				$this->isOnline = $vals['isOnline'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['taxClassId'])){
				
				$this->taxClassId = $vals['taxClassId'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['sftpFileLogId'])){
				
				$this->sftpFileLogId = $vals['sftpFileLogId'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Sku';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ean" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ean);
				
			}
			
			
			
			
			if ("isOnline" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isOnline); 
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("taxClassId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxClassId);
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("sftpFileLogId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sftpFileLogId);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isDeleted); 
				
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
		
		if($this->ean !== null) {
			
			$xfer += $output->writeFieldBegin('ean');
			$xfer += $output->writeString($this->ean);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isOnline !== null) {
			
			$xfer += $output->writeFieldBegin('isOnline');
			$xfer += $output->writeByte($this->isOnline);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxClassId !== null) {
			
			$xfer += $output->writeFieldBegin('taxClassId');
			$xfer += $output->writeString($this->taxClassId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sftpFileLogId !== null) {
			
			$xfer += $output->writeFieldBegin('sftpFileLogId');
			$xfer += $output->writeString($this->sftpFileLogId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeByte($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeByte($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>