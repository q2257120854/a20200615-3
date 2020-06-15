<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class ConfirmationResult {
	
	static $_TSPEC;
	public $type = null;
	public $no = null;
	public $scheduleId = null;
	public $supplierNo = null;
	public $brandId = null;
	public $info = null;
	public $merchandiseNo = null;
	public $actBeginTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			2 => array(
			'var' => 'no'
			),
			3 => array(
			'var' => 'scheduleId'
			),
			4 => array(
			'var' => 'supplierNo'
			),
			5 => array(
			'var' => 'brandId'
			),
			6 => array(
			'var' => 'info'
			),
			7 => array(
			'var' => 'merchandiseNo'
			),
			8 => array(
			'var' => 'actBeginTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['no'])){
				
				$this->no = $vals['no'];
			}
			
			
			if (isset($vals['scheduleId'])){
				
				$this->scheduleId = $vals['scheduleId'];
			}
			
			
			if (isset($vals['supplierNo'])){
				
				$this->supplierNo = $vals['supplierNo'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['info'])){
				
				$this->info = $vals['info'];
			}
			
			
			if (isset($vals['merchandiseNo'])){
				
				$this->merchandiseNo = $vals['merchandiseNo'];
			}
			
			
			if (isset($vals['actBeginTime'])){
				
				$this->actBeginTime = $vals['actBeginTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ConfirmationResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->type); 
				
			}
			
			
			
			
			if ("no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->no);
				
			}
			
			
			
			
			if ("scheduleId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduleId);
				
			}
			
			
			
			
			if ("supplierNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supplierNo);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandId);
				
			}
			
			
			
			
			if ("info" == $schemeField){
				
				$needSkip = false;
				
				$this->info = new \com\vip\pms\data\service\ConfirmationInfo();
				$this->info->read($input);
				
			}
			
			
			
			
			if ("merchandiseNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->merchandiseNo); 
				
			}
			
			
			
			
			if ("actBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->actBeginTime);
				
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
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeByte($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('no');
		$xfer += $output->writeString($this->no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('scheduleId');
		$xfer += $output->writeString($this->scheduleId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('supplierNo');
		$xfer += $output->writeString($this->supplierNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeString($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->info !== null) {
			
			$xfer += $output->writeFieldBegin('info');
			
			if (!is_object($this->info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->info->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merchandiseNo !== null) {
			
			$xfer += $output->writeFieldBegin('merchandiseNo');
			$xfer += $output->writeI64($this->merchandiseNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('actBeginTime');
			$xfer += $output->writeI64($this->actBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>