<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsSpecialFavModel {
	
	static $_TSPEC;
	public $customerLevel = null;
	public $discount = null;
	public $favorable = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'customerLevel'
			),
			2 => array(
			'var' => 'discount'
			),
			3 => array(
			'var' => 'favorable'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['customerLevel'])){
				
				$this->customerLevel = $vals['customerLevel'];
			}
			
			
			if (isset($vals['discount'])){
				
				$this->discount = $vals['discount'];
			}
			
			
			if (isset($vals['favorable'])){
				
				$this->favorable = $vals['favorable'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsSpecialFavModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("customerLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customerLevel);
				
			}
			
			
			
			
			if ("discount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discount);
				
			}
			
			
			
			
			if ("favorable" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->favorable);
				
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
		
		$xfer += $output->writeFieldBegin('customerLevel');
		$xfer += $output->writeString($this->customerLevel);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->discount !== null) {
			
			$xfer += $output->writeFieldBegin('discount');
			$xfer += $output->writeDouble($this->discount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favorable !== null) {
			
			$xfer += $output->writeFieldBegin('favorable');
			$xfer += $output->writeDouble($this->favorable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>