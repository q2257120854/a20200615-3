<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutShipContainerResult {
	
	static $_TSPEC;
	public $MSG_ID = null;
	public $TOTE_NBR = null;
	public $PACKING_CODE = null;
	public $DEST_LOCN = null;
	public $WCS_DEST_LOCN = null;
	public $CAGE_CODE = null;
	public $INDUCTION = null;
	public $ACTUAL_SORT_TIME = null;
	public $FAIL_REASON = null;
	public $RECIRCCOUNT = null;
	public $CUBE = null;
	public $WEIGHT = null;
	public $TPS_MSGID = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'MSG_ID'
			),
			2 => array(
			'var' => 'TOTE_NBR'
			),
			3 => array(
			'var' => 'PACKING_CODE'
			),
			4 => array(
			'var' => 'DEST_LOCN'
			),
			5 => array(
			'var' => 'WCS_DEST_LOCN'
			),
			6 => array(
			'var' => 'CAGE_CODE'
			),
			7 => array(
			'var' => 'INDUCTION'
			),
			8 => array(
			'var' => 'ACTUAL_SORT_TIME'
			),
			9 => array(
			'var' => 'FAIL_REASON'
			),
			10 => array(
			'var' => 'RECIRCCOUNT'
			),
			11 => array(
			'var' => 'CUBE'
			),
			12 => array(
			'var' => 'WEIGHT'
			),
			13 => array(
			'var' => 'TPS_MSGID'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['MSG_ID'])){
				
				$this->MSG_ID = $vals['MSG_ID'];
			}
			
			
			if (isset($vals['TOTE_NBR'])){
				
				$this->TOTE_NBR = $vals['TOTE_NBR'];
			}
			
			
			if (isset($vals['PACKING_CODE'])){
				
				$this->PACKING_CODE = $vals['PACKING_CODE'];
			}
			
			
			if (isset($vals['DEST_LOCN'])){
				
				$this->DEST_LOCN = $vals['DEST_LOCN'];
			}
			
			
			if (isset($vals['WCS_DEST_LOCN'])){
				
				$this->WCS_DEST_LOCN = $vals['WCS_DEST_LOCN'];
			}
			
			
			if (isset($vals['CAGE_CODE'])){
				
				$this->CAGE_CODE = $vals['CAGE_CODE'];
			}
			
			
			if (isset($vals['INDUCTION'])){
				
				$this->INDUCTION = $vals['INDUCTION'];
			}
			
			
			if (isset($vals['ACTUAL_SORT_TIME'])){
				
				$this->ACTUAL_SORT_TIME = $vals['ACTUAL_SORT_TIME'];
			}
			
			
			if (isset($vals['FAIL_REASON'])){
				
				$this->FAIL_REASON = $vals['FAIL_REASON'];
			}
			
			
			if (isset($vals['RECIRCCOUNT'])){
				
				$this->RECIRCCOUNT = $vals['RECIRCCOUNT'];
			}
			
			
			if (isset($vals['CUBE'])){
				
				$this->CUBE = $vals['CUBE'];
			}
			
			
			if (isset($vals['WEIGHT'])){
				
				$this->WEIGHT = $vals['WEIGHT'];
			}
			
			
			if (isset($vals['TPS_MSGID'])){
				
				$this->TPS_MSGID = $vals['TPS_MSGID'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutShipContainerResult';
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
			
			
			
			
			if ("TOTE_NBR" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->TOTE_NBR);
				
			}
			
			
			
			
			if ("PACKING_CODE" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->PACKING_CODE);
				
			}
			
			
			
			
			if ("DEST_LOCN" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->DEST_LOCN);
				
			}
			
			
			
			
			if ("WCS_DEST_LOCN" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->WCS_DEST_LOCN);
				
			}
			
			
			
			
			if ("CAGE_CODE" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->CAGE_CODE);
				
			}
			
			
			
			
			if ("INDUCTION" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->INDUCTION);
				
			}
			
			
			
			
			if ("ACTUAL_SORT_TIME" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ACTUAL_SORT_TIME);
				
			}
			
			
			
			
			if ("FAIL_REASON" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->FAIL_REASON);
				
			}
			
			
			
			
			if ("RECIRCCOUNT" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->RECIRCCOUNT); 
				
			}
			
			
			
			
			if ("CUBE" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->CUBE);
				
			}
			
			
			
			
			if ("WEIGHT" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->WEIGHT);
				
			}
			
			
			
			
			if ("TPS_MSGID" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->TPS_MSGID);
				
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
		
		$xfer += $output->writeFieldBegin('TOTE_NBR');
		$xfer += $output->writeString($this->TOTE_NBR);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('PACKING_CODE');
		$xfer += $output->writeString($this->PACKING_CODE);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('DEST_LOCN');
		$xfer += $output->writeString($this->DEST_LOCN);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('WCS_DEST_LOCN');
		$xfer += $output->writeString($this->WCS_DEST_LOCN);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('CAGE_CODE');
		$xfer += $output->writeString($this->CAGE_CODE);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('INDUCTION');
		$xfer += $output->writeString($this->INDUCTION);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ACTUAL_SORT_TIME');
		$xfer += $output->writeString($this->ACTUAL_SORT_TIME);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->FAIL_REASON !== null) {
			
			$xfer += $output->writeFieldBegin('FAIL_REASON');
			$xfer += $output->writeString($this->FAIL_REASON);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('RECIRCCOUNT');
		$xfer += $output->writeI32($this->RECIRCCOUNT);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('CUBE');
		$xfer += $output->writeString($this->CUBE);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('WEIGHT');
		$xfer += $output->writeString($this->WEIGHT);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('TPS_MSGID');
		$xfer += $output->writeString($this->TPS_MSGID);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>