<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics;

class Address {
	
	static $_TSPEC;
	public $country = null;
	public $state_name = null;
	public $city_name = null;
	public $district_name = null;
	public $address = null;
	public $zip = null;
	public $street = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'country'
			),
			2 => array(
			'var' => 'state_name'
			),
			3 => array(
			'var' => 'city_name'
			),
			4 => array(
			'var' => 'district_name'
			),
			5 => array(
			'var' => 'address'
			),
			6 => array(
			'var' => 'zip'
			),
			7 => array(
			'var' => 'street'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['state_name'])){
				
				$this->state_name = $vals['state_name'];
			}
			
			
			if (isset($vals['city_name'])){
				
				$this->city_name = $vals['city_name'];
			}
			
			
			if (isset($vals['district_name'])){
				
				$this->district_name = $vals['district_name'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['zip'])){
				
				$this->zip = $vals['zip'];
			}
			
			
			if (isset($vals['street'])){
				
				$this->street = $vals['street'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Address';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("state_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state_name);
				
			}
			
			
			
			
			if ("city_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city_name);
				
			}
			
			
			
			
			if ("district_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district_name);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("zip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->zip);
				
			}
			
			
			
			
			if ("street" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->street);
				
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
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state_name !== null) {
			
			$xfer += $output->writeFieldBegin('state_name');
			$xfer += $output->writeString($this->state_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city_name !== null) {
			
			$xfer += $output->writeFieldBegin('city_name');
			$xfer += $output->writeString($this->city_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->district_name !== null) {
			
			$xfer += $output->writeFieldBegin('district_name');
			$xfer += $output->writeString($this->district_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->zip !== null) {
			
			$xfer += $output->writeFieldBegin('zip');
			$xfer += $output->writeString($this->zip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->street !== null) {
			
			$xfer += $output->writeFieldBegin('street');
			$xfer += $output->writeString($this->street);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>