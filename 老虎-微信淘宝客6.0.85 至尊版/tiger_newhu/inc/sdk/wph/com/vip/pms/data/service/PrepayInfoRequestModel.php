<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PrepayInfoRequestModel {
	
	static $_TSPEC;
	public $prepayMainNo = null;
	public $merchandiseIdList = null;
	public $firstBeginTime = null;
	public $firstEndTime = null;
	public $merchandiseModelList = null;
	public $opType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'prepayMainNo'
			),
			2 => array(
			'var' => 'merchandiseIdList'
			),
			3 => array(
			'var' => 'firstBeginTime'
			),
			4 => array(
			'var' => 'firstEndTime'
			),
			5 => array(
			'var' => 'merchandiseModelList'
			),
			6 => array(
			'var' => 'opType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['prepayMainNo'])){
				
				$this->prepayMainNo = $vals['prepayMainNo'];
			}
			
			
			if (isset($vals['merchandiseIdList'])){
				
				$this->merchandiseIdList = $vals['merchandiseIdList'];
			}
			
			
			if (isset($vals['firstBeginTime'])){
				
				$this->firstBeginTime = $vals['firstBeginTime'];
			}
			
			
			if (isset($vals['firstEndTime'])){
				
				$this->firstEndTime = $vals['firstEndTime'];
			}
			
			
			if (isset($vals['merchandiseModelList'])){
				
				$this->merchandiseModelList = $vals['merchandiseModelList'];
			}
			
			
			if (isset($vals['opType'])){
				
				$this->opType = $vals['opType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrepayInfoRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("prepayMainNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prepayMainNo);
				
			}
			
			
			
			
			if ("merchandiseIdList" == $schemeField){
				
				$needSkip = false;
				
				$this->merchandiseIdList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI64($elem0); 
						
						$this->merchandiseIdList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("firstBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->firstBeginTime); 
				
			}
			
			
			
			
			if ("firstEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->firstEndTime); 
				
			}
			
			
			
			
			if ("merchandiseModelList" == $schemeField){
				
				$needSkip = false;
				
				$this->merchandiseModelList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\pms\data\service\PrepayMerchandiseModel();
						$elem1->read($input);
						
						$this->merchandiseModelList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("opType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->opType); 
				
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
		
		$xfer += $output->writeFieldBegin('prepayMainNo');
		$xfer += $output->writeString($this->prepayMainNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->merchandiseIdList !== null) {
			
			$xfer += $output->writeFieldBegin('merchandiseIdList');
			
			if (!is_array($this->merchandiseIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->merchandiseIdList as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->firstBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('firstBeginTime');
			$xfer += $output->writeI64($this->firstBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->firstEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('firstEndTime');
			$xfer += $output->writeI64($this->firstEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merchandiseModelList !== null) {
			
			$xfer += $output->writeFieldBegin('merchandiseModelList');
			
			if (!is_array($this->merchandiseModelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->merchandiseModelList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opType !== null) {
			
			$xfer += $output->writeFieldBegin('opType');
			$xfer += $output->writeI32($this->opType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>