<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\tpc\service;

class Pack {
	
	static $_TSPEC;
	public $transportNo = null;
	public $originalTransportNo = null;
	public $weight = null;
	public $volume = null;
	public $time = null;
	public $taker = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'originalTransportNo'
			),
			3 => array(
			'var' => 'weight'
			),
			4 => array(
			'var' => 'volume'
			),
			5 => array(
			'var' => 'time'
			),
			6 => array(
			'var' => 'taker'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['originalTransportNo'])){
				
				$this->originalTransportNo = $vals['originalTransportNo'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
			if (isset($vals['time'])){
				
				$this->time = $vals['time'];
			}
			
			
			if (isset($vals['taker'])){
				
				$this->taker = $vals['taker'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Pack';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("originalTransportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalTransportNo);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->weight);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->volume);
				
			}
			
			
			
			
			if ("time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->time); 
				
			}
			
			
			
			
			if ("taker" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taker);
				
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
		
		$xfer += $output->writeFieldBegin('transportNo');
		$xfer += $output->writeString($this->transportNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->originalTransportNo !== null) {
			
			$xfer += $output->writeFieldBegin('originalTransportNo');
			$xfer += $output->writeString($this->originalTransportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeString($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->volume !== null) {
			
			$xfer += $output->writeFieldBegin('volume');
			$xfer += $output->writeString($this->volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->time !== null) {
			
			$xfer += $output->writeFieldBegin('time');
			$xfer += $output->writeI64($this->time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taker !== null) {
			
			$xfer += $output->writeFieldBegin('taker');
			$xfer += $output->writeString($this->taker);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>