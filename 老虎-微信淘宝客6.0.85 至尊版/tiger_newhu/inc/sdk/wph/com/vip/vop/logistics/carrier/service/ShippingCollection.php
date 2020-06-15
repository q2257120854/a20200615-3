<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\carrier\service;

class ShippingCollection {
	
	static $_TSPEC;
	public $logistics_no = null;
	public $trade_id = null;
	public $linkman = null;
	public $action = null;
	public $op_time = null;
	public $reasonType = null;
	public $packet = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'logistics_no'
			),
			2 => array(
			'var' => 'trade_id'
			),
			5 => array(
			'var' => 'linkman'
			),
			6 => array(
			'var' => 'action'
			),
			7 => array(
			'var' => 'op_time'
			),
			8 => array(
			'var' => 'reasonType'
			),
			9 => array(
			'var' => 'packet'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['logistics_no'])){
				
				$this->logistics_no = $vals['logistics_no'];
			}
			
			
			if (isset($vals['trade_id'])){
				
				$this->trade_id = $vals['trade_id'];
			}
			
			
			if (isset($vals['linkman'])){
				
				$this->linkman = $vals['linkman'];
			}
			
			
			if (isset($vals['action'])){
				
				$this->action = $vals['action'];
			}
			
			
			if (isset($vals['op_time'])){
				
				$this->op_time = $vals['op_time'];
			}
			
			
			if (isset($vals['reasonType'])){
				
				$this->reasonType = $vals['reasonType'];
			}
			
			
			if (isset($vals['packet'])){
				
				$this->packet = $vals['packet'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShippingCollection';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logistics_no);
				
			}
			
			
			
			
			if ("trade_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trade_id);
				
			}
			
			
			
			
			if ("linkman" == $schemeField){
				
				$needSkip = false;
				
				$this->linkman = new \com\vip\vop\logistics\Linkman();
				$this->linkman->read($input);
				
			}
			
			
			
			
			if ("action" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->action);
				
			}
			
			
			
			
			if ("op_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->op_time);
				
			}
			
			
			
			
			if ("reasonType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonType);
				
			}
			
			
			
			
			if ("packet" == $schemeField){
				
				$needSkip = false;
				
				$this->packet = new \com\vip\vop\logistics\carrier\service\CollectionPacket();
				$this->packet->read($input);
				
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
		
		if($this->logistics_no !== null) {
			
			$xfer += $output->writeFieldBegin('logistics_no');
			$xfer += $output->writeString($this->logistics_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('trade_id');
		$xfer += $output->writeString($this->trade_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->linkman !== null) {
			
			$xfer += $output->writeFieldBegin('linkman');
			
			if (!is_object($this->linkman)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->linkman->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('action');
		$xfer += $output->writeString($this->action);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('op_time');
		$xfer += $output->writeI64($this->op_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->reasonType !== null) {
			
			$xfer += $output->writeFieldBegin('reasonType');
			$xfer += $output->writeString($this->reasonType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packet !== null) {
			
			$xfer += $output->writeFieldBegin('packet');
			
			if (!is_object($this->packet)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->packet->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>