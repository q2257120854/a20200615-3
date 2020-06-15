<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\service;

class ProcessResult {
	
	static $_TSPEC;
	public $tmsOrderId = null;
	public $warehouse = null;
	public $needMatchCarrier = null;
	public $isNew = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsOrderId'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'needMatchCarrier'
			),
			4 => array(
			'var' => 'isNew'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsOrderId'])){
				
				$this->tmsOrderId = $vals['tmsOrderId'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['needMatchCarrier'])){
				
				$this->needMatchCarrier = $vals['needMatchCarrier'];
			}
			
			
			if (isset($vals['isNew'])){
				
				$this->isNew = $vals['isNew'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProcessResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tmsOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmsOrderId);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("needMatchCarrier" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->needMatchCarrier);
				
			}
			
			
			
			
			if ("isNew" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isNew);
				
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
		
		if($this->tmsOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderId');
			$xfer += $output->writeString($this->tmsOrderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('needMatchCarrier');
		$xfer += $output->writeBool($this->needMatchCarrier);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isNew');
		$xfer += $output->writeBool($this->isNew);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>