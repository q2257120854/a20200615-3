<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\inventory;

class AdvisedSku {
	
	static $_TSPEC;
	public $barcode = null;
	public $advise_num = null;
	public $reservations = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'advise_num'
			),
			3 => array(
			'var' => 'reservations'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['advise_num'])){
				
				$this->advise_num = $vals['advise_num'];
			}
			
			
			if (isset($vals['reservations'])){
				
				$this->reservations = $vals['reservations'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AdvisedSku';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("advise_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->advise_num); 
				
			}
			
			
			
			
			if ("reservations" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->reservations); 
				
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
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->advise_num !== null) {
			
			$xfer += $output->writeFieldBegin('advise_num');
			$xfer += $output->writeI32($this->advise_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reservations !== null) {
			
			$xfer += $output->writeFieldBegin('reservations');
			$xfer += $output->writeI32($this->reservations);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>