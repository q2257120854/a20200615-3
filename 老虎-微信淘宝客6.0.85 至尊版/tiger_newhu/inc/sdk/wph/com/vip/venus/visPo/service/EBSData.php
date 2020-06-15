<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\visPo\service;

class EBSData {
	
	static $_TSPEC;
	public $reqIebsFlowNum = null;
	public $po = null;
	public $poCount = null;
	public $createDate = null;
	public $batchNum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqIebsFlowNum'
			),
			2 => array(
			'var' => 'po'
			),
			3 => array(
			'var' => 'poCount'
			),
			4 => array(
			'var' => 'createDate'
			),
			5 => array(
			'var' => 'batchNum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqIebsFlowNum'])){
				
				$this->reqIebsFlowNum = $vals['reqIebsFlowNum'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['poCount'])){
				
				$this->poCount = $vals['poCount'];
			}
			
			
			if (isset($vals['createDate'])){
				
				$this->createDate = $vals['createDate'];
			}
			
			
			if (isset($vals['batchNum'])){
				
				$this->batchNum = $vals['batchNum'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EBSData';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("reqIebsFlowNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reqIebsFlowNum);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("poCount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poCount);
				
			}
			
			
			
			
			if ("createDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createDate);
				
			}
			
			
			
			
			if ("batchNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->batchNum); 
				
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
		
		if($this->reqIebsFlowNum !== null) {
			
			$xfer += $output->writeFieldBegin('reqIebsFlowNum');
			$xfer += $output->writeString($this->reqIebsFlowNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poCount !== null) {
			
			$xfer += $output->writeFieldBegin('poCount');
			$xfer += $output->writeString($this->poCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createDate !== null) {
			
			$xfer += $output->writeFieldBegin('createDate');
			$xfer += $output->writeString($this->createDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('batchNum');
		$xfer += $output->writeI32($this->batchNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>