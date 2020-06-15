<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\asc;

class CancelAscRequest {
	
	static $_TSPEC;
	public $asc_sn = null;
	public $asc_product_id = null;
	public $operator = null;
	public $opinion = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'asc_sn'
			),
			2 => array(
			'var' => 'asc_product_id'
			),
			3 => array(
			'var' => 'operator'
			),
			4 => array(
			'var' => 'opinion'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['asc_sn'])){
				
				$this->asc_sn = $vals['asc_sn'];
			}
			
			
			if (isset($vals['asc_product_id'])){
				
				$this->asc_product_id = $vals['asc_product_id'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['opinion'])){
				
				$this->opinion = $vals['opinion'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelAscRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("asc_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->asc_sn);
				
			}
			
			
			
			
			if ("asc_product_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->asc_product_id);
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
			}
			
			
			
			
			if ("opinion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opinion);
				
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
		
		$xfer += $output->writeFieldBegin('asc_sn');
		$xfer += $output->writeString($this->asc_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('asc_product_id');
		$xfer += $output->writeString($this->asc_product_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('opinion');
		$xfer += $output->writeString($this->opinion);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>