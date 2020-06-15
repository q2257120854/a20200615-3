<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\asc;

class ApproveAscRequest {
	
	static $_TSPEC;
	public $asc_sn = null;
	public $asc_product_id = null;
	public $operator = null;
	public $address = null;
	public $contact_name = null;
	public $contact_mobile = null;
	public $zipcode = null;
	
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
			'var' => 'address'
			),
			5 => array(
			'var' => 'contact_name'
			),
			6 => array(
			'var' => 'contact_mobile'
			),
			7 => array(
			'var' => 'zipcode'
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
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['contact_name'])){
				
				$this->contact_name = $vals['contact_name'];
			}
			
			
			if (isset($vals['contact_mobile'])){
				
				$this->contact_mobile = $vals['contact_mobile'];
			}
			
			
			if (isset($vals['zipcode'])){
				
				$this->zipcode = $vals['zipcode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ApproveAscRequest';
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
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("contact_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contact_name);
				
			}
			
			
			
			
			if ("contact_mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contact_mobile);
				
			}
			
			
			
			
			if ("zipcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->zipcode);
				
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
		
		
		$xfer += $output->writeFieldBegin('address');
		$xfer += $output->writeString($this->address);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contact_name');
		$xfer += $output->writeString($this->contact_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contact_mobile');
		$xfer += $output->writeString($this->contact_mobile);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->zipcode !== null) {
			
			$xfer += $output->writeFieldBegin('zipcode');
			$xfer += $output->writeString($this->zipcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>