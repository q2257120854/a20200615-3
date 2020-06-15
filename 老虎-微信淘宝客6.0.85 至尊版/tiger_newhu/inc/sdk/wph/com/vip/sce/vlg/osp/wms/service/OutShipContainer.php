<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutShipContainer {
	
	static $_TSPEC;
	public $MSG_ID = null;
	public $WHSE = null;
	public $MSG_TYPE = null;
	public $PRCL_NBR = null;
	public $DEST_LOCN = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'MSG_ID'
			),
			2 => array(
			'var' => 'WHSE'
			),
			3 => array(
			'var' => 'MSG_TYPE'
			),
			4 => array(
			'var' => 'PRCL_NBR'
			),
			5 => array(
			'var' => 'DEST_LOCN'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['MSG_ID'])){
				
				$this->MSG_ID = $vals['MSG_ID'];
			}
			
			
			if (isset($vals['WHSE'])){
				
				$this->WHSE = $vals['WHSE'];
			}
			
			
			if (isset($vals['MSG_TYPE'])){
				
				$this->MSG_TYPE = $vals['MSG_TYPE'];
			}
			
			
			if (isset($vals['PRCL_NBR'])){
				
				$this->PRCL_NBR = $vals['PRCL_NBR'];
			}
			
			
			if (isset($vals['DEST_LOCN'])){
				
				$this->DEST_LOCN = $vals['DEST_LOCN'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutShipContainer';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("MSG_ID" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->MSG_ID);
				
			}
			
			
			
			
			if ("WHSE" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->WHSE);
				
			}
			
			
			
			
			if ("MSG_TYPE" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->MSG_TYPE);
				
			}
			
			
			
			
			if ("PRCL_NBR" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->PRCL_NBR);
				
			}
			
			
			
			
			if ("DEST_LOCN" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->DEST_LOCN);
				
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
		
		$xfer += $output->writeFieldBegin('MSG_ID');
		$xfer += $output->writeString($this->MSG_ID);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->WHSE !== null) {
			
			$xfer += $output->writeFieldBegin('WHSE');
			$xfer += $output->writeString($this->WHSE);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('MSG_TYPE');
		$xfer += $output->writeString($this->MSG_TYPE);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('PRCL_NBR');
		$xfer += $output->writeString($this->PRCL_NBR);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('DEST_LOCN');
		$xfer += $output->writeString($this->DEST_LOCN);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>