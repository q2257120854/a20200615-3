<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class Carrier {
	
	static $_TSPEC;
	public $tms_carrier_id = null;
	public $carrier_name = null;
	public $carrier_shortname = null;
	public $carrier_code = null;
	public $carrier_isvalid = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tms_carrier_id'
			),
			2 => array(
			'var' => 'carrier_name'
			),
			3 => array(
			'var' => 'carrier_shortname'
			),
			4 => array(
			'var' => 'carrier_code'
			),
			5 => array(
			'var' => 'carrier_isvalid'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tms_carrier_id'])){
				
				$this->tms_carrier_id = $vals['tms_carrier_id'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['carrier_shortname'])){
				
				$this->carrier_shortname = $vals['carrier_shortname'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['carrier_isvalid'])){
				
				$this->carrier_isvalid = $vals['carrier_isvalid'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Carrier';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tms_carrier_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tms_carrier_id);
				
			}
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
			}
			
			
			
			
			if ("carrier_shortname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_shortname);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("carrier_isvalid" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->carrier_isvalid); 
				
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
		
		if($this->tms_carrier_id !== null) {
			
			$xfer += $output->writeFieldBegin('tms_carrier_id');
			$xfer += $output->writeString($this->tms_carrier_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_name !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_name');
			$xfer += $output->writeString($this->carrier_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_shortname !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_shortname');
			$xfer += $output->writeString($this->carrier_shortname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_isvalid !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_isvalid');
			$xfer += $output->writeI32($this->carrier_isvalid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>