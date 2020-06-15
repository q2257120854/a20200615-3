<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics;

class ShipmentTrace {
	
	static $_TSPEC;
	public $trace_code = null;
	public $action = null;
	public $remark = null;
	public $op_time = null;
	public $city_name = null;
	public $site_code = null;
	public $site_name = null;
	public $operator = null;
	public $operator_tel = null;
	public $next_city_name = null;
	public $next_site_code = null;
	public $next_site_name = null;
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
			'var' => 'city_name'
			),
			6 => array(
			'var' => 'site_code'
			),
			7 => array(
			'var' => 'site_name'
			),
			8 => array(
			'var' => 'operator'
			),
			9 => array(
			'var' => 'operator_tel'
			),
			10 => array(
			'var' => 'next_city_name'
			),
			11 => array(
			'var' => 'next_site_code'
			),
			12 => array(
			'var' => 'next_site_name'
			),
			13 => array(
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
			
			
			if (isset($vals['city_name'])){
				
				$this->city_name = $vals['city_name'];
			}
			
			
			if (isset($vals['site_code'])){
				
				$this->site_code = $vals['site_code'];
			}
			
			
			if (isset($vals['site_name'])){
				
				$this->site_name = $vals['site_name'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['operator_tel'])){
				
				$this->operator_tel = $vals['operator_tel'];
			}
			
			
			if (isset($vals['next_city_name'])){
				
				$this->next_city_name = $vals['next_city_name'];
			}
			
			
			if (isset($vals['next_site_code'])){
				
				$this->next_site_code = $vals['next_site_code'];
			}
			
			
			if (isset($vals['next_site_name'])){
				
				$this->next_site_name = $vals['next_site_name'];
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
			
			
			
			
			if ("city_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city_name);
				
			}
			
			
			
			
			if ("site_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->site_code);
				
			}
			
			
			
			
			if ("site_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->site_name);
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
			}
			
			
			
			
			if ("operator_tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator_tel);
				
			}
			
			
			
			
			if ("next_city_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->next_city_name);
				
			}
			
			
			
			
			if ("next_site_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->next_site_code);
				
			}
			
			
			
			
			if ("next_site_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->next_site_name);
				
			}
			
			
			
			
			if ("extend_fields" == $schemeField){
				
				$needSkip = false;
				
				$this->extend_fields = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vop\logistics\ExtendField();
						$elem1->read($input);
						
						$this->extend_fields[$_size1++] = $elem1;
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
		
		if($this->city_name !== null) {
			
			$xfer += $output->writeFieldBegin('city_name');
			$xfer += $output->writeString($this->city_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->site_code !== null) {
			
			$xfer += $output->writeFieldBegin('site_code');
			$xfer += $output->writeString($this->site_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->site_name !== null) {
			
			$xfer += $output->writeFieldBegin('site_name');
			$xfer += $output->writeString($this->site_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator_tel !== null) {
			
			$xfer += $output->writeFieldBegin('operator_tel');
			$xfer += $output->writeString($this->operator_tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->next_city_name !== null) {
			
			$xfer += $output->writeFieldBegin('next_city_name');
			$xfer += $output->writeString($this->next_city_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->next_site_code !== null) {
			
			$xfer += $output->writeFieldBegin('next_site_code');
			$xfer += $output->writeString($this->next_site_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->next_site_name !== null) {
			
			$xfer += $output->writeFieldBegin('next_site_name');
			$xfer += $output->writeString($this->next_site_name);
			
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