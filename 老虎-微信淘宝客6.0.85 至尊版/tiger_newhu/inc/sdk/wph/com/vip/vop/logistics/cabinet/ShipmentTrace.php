<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\cabinet;

class ShipmentTrace {
	
	static $_TSPEC;
	public $trace_code = null;
	public $action = null;
	public $remark = null;
	public $op_time = null;
	public $express_cabinet_code = null;
	public $express_cabinet_name = null;
	public $address = null;
	public $longitude = null;
	public $latitude = null;
	public $linkman = null;
	public $linkman_tel = null;
	public $extend_fields = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'trace_code'
			),
			2 => array(
			'var' => 'action'
			),
			3 => array(
			'var' => 'remark'
			),
			4 => array(
			'var' => 'op_time'
			),
			5 => array(
			'var' => 'express_cabinet_code'
			),
			6 => array(
			'var' => 'express_cabinet_name'
			),
			7 => array(
			'var' => 'address'
			),
			8 => array(
			'var' => 'longitude'
			),
			9 => array(
			'var' => 'latitude'
			),
			10 => array(
			'var' => 'linkman'
			),
			11 => array(
			'var' => 'linkman_tel'
			),
			12 => array(
			'var' => 'extend_fields'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['trace_code'])){
				
				$this->trace_code = $vals['trace_code'];
			}
			
			
			if (isset($vals['action'])){
				
				$this->action = $vals['action'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['op_time'])){
				
				$this->op_time = $vals['op_time'];
			}
			
			
			if (isset($vals['express_cabinet_code'])){
				
				$this->express_cabinet_code = $vals['express_cabinet_code'];
			}
			
			
			if (isset($vals['express_cabinet_name'])){
				
				$this->express_cabinet_name = $vals['express_cabinet_name'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['longitude'])){
				
				$this->longitude = $vals['longitude'];
			}
			
			
			if (isset($vals['latitude'])){
				
				$this->latitude = $vals['latitude'];
			}
			
			
			if (isset($vals['linkman'])){
				
				$this->linkman = $vals['linkman'];
			}
			
			
			if (isset($vals['linkman_tel'])){
				
				$this->linkman_tel = $vals['linkman_tel'];
			}
			
			
			if (isset($vals['extend_fields'])){
				
				$this->extend_fields = $vals['extend_fields'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipmentTrace';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("trace_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trace_code);
				
			}
			
			
			
			
			if ("action" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->action);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("op_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->op_time);
				
			}
			
			
			
			
			if ("express_cabinet_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->express_cabinet_code);
				
			}
			
			
			
			
			if ("express_cabinet_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->express_cabinet_name);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				
				$this->address = new \com\vip\vop\logistics\Address();
				$this->address->read($input);
				
			}
			
			
			
			
			if ("longitude" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->longitude);
				
			}
			
			
			
			
			if ("latitude" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->latitude);
				
			}
			
			
			
			
			if ("linkman" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->linkman);
				
			}
			
			
			
			
			if ("linkman_tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->linkman_tel);
				
			}
			
			
			
			
			if ("extend_fields" == $schemeField){
				
				$needSkip = false;
				
				$this->extend_fields = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\logistics\ExtendField();
						$elem0->read($input);
						
						$this->extend_fields[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('trace_code');
		$xfer += $output->writeString($this->trace_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('action');
		$xfer += $output->writeString($this->action);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('remark');
		$xfer += $output->writeString($this->remark);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('op_time');
		$xfer += $output->writeI64($this->op_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('express_cabinet_code');
		$xfer += $output->writeString($this->express_cabinet_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->express_cabinet_name !== null) {
			
			$xfer += $output->writeFieldBegin('express_cabinet_name');
			$xfer += $output->writeString($this->express_cabinet_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('address');
		
		if (!is_object($this->address)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->address->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->longitude !== null) {
			
			$xfer += $output->writeFieldBegin('longitude');
			$xfer += $output->writeString($this->longitude);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->latitude !== null) {
			
			$xfer += $output->writeFieldBegin('latitude');
			$xfer += $output->writeString($this->latitude);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->linkman !== null) {
			
			$xfer += $output->writeFieldBegin('linkman');
			$xfer += $output->writeString($this->linkman);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->linkman_tel !== null) {
			
			$xfer += $output->writeFieldBegin('linkman_tel');
			$xfer += $output->writeString($this->linkman_tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extend_fields !== null) {
			
			$xfer += $output->writeFieldBegin('extend_fields');
			
			if (!is_array($this->extend_fields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->extend_fields as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>