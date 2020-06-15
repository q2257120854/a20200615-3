<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\carrier\service;

class ForwardShipping {
	
	static $_TSPEC;
	public $new_carrier_code = null;
	public $new_logistics_no = null;
	public $origin_logistics_no = null;
	public $receiver = null;
	public $receiver_address = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'new_carrier_code'
			),
			2 => array(
			'var' => 'new_logistics_no'
			),
			3 => array(
			'var' => 'origin_logistics_no'
			),
			4 => array(
			'var' => 'receiver'
			),
			5 => array(
			'var' => 'receiver_address'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['new_carrier_code'])){
				
				$this->new_carrier_code = $vals['new_carrier_code'];
			}
			
			
			if (isset($vals['new_logistics_no'])){
				
				$this->new_logistics_no = $vals['new_logistics_no'];
			}
			
			
			if (isset($vals['origin_logistics_no'])){
				
				$this->origin_logistics_no = $vals['origin_logistics_no'];
			}
			
			
			if (isset($vals['receiver'])){
				
				$this->receiver = $vals['receiver'];
			}
			
			
			if (isset($vals['receiver_address'])){
				
				$this->receiver_address = $vals['receiver_address'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ForwardShipping';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("new_carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->new_carrier_code);
				
			}
			
			
			
			
			if ("new_logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->new_logistics_no);
				
			}
			
			
			
			
			if ("origin_logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->origin_logistics_no);
				
			}
			
			
			
			
			if ("receiver" == $schemeField){
				
				$needSkip = false;
				
				$this->receiver = new \com\vip\vop\logistics\Linkman();
				$this->receiver->read($input);
				
			}
			
			
			
			
			if ("receiver_address" == $schemeField){
				
				$needSkip = false;
				
				$this->receiver_address = new \com\vip\vop\logistics\Address();
				$this->receiver_address->read($input);
				
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
		
		if($this->new_carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('new_carrier_code');
			$xfer += $output->writeString($this->new_carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->new_logistics_no !== null) {
			
			$xfer += $output->writeFieldBegin('new_logistics_no');
			$xfer += $output->writeString($this->new_logistics_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->origin_logistics_no !== null) {
			
			$xfer += $output->writeFieldBegin('origin_logistics_no');
			$xfer += $output->writeString($this->origin_logistics_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver !== null) {
			
			$xfer += $output->writeFieldBegin('receiver');
			
			if (!is_object($this->receiver)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->receiver->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_address !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_address');
			
			if (!is_object($this->receiver_address)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->receiver_address->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>