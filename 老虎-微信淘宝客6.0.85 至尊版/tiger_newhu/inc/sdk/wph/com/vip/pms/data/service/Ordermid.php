<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class Ordermid {
	
	static $_TSPEC;
	public $merchandiseId = null;
	public $amount = null;
	public $refNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'merchandiseId'
			),
			2 => array(
			'var' => 'amount'
			),
			3 => array(
			'var' => 'refNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['merchandiseId'])){
				
				$this->merchandiseId = $vals['merchandiseId'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['refNo'])){
				
				$this->refNo = $vals['refNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Ordermid';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("merchandiseId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchandiseId);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("refNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refNo);
				
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
		
		$xfer += $output->writeFieldBegin('merchandiseId');
		$xfer += $output->writeString($this->merchandiseId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeI32($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->refNo !== null) {
			
			$xfer += $output->writeFieldBegin('refNo');
			$xfer += $output->writeString($this->refNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>