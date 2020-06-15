<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class Address {
	
	static $_TSPEC;
	public $contacter = null;
	public $contacter_tel = null;
	public $contacter_mobile = null;
	public $country = null;
	public $province_name = null;
	public $city_name = null;
	public $district_name = null;
	public $detail_address = null;
	public $email = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'contacter'
			),
			2 => array(
			'var' => 'contacter_tel'
			),
			3 => array(
			'var' => 'contacter_mobile'
			),
			4 => array(
			'var' => 'country'
			),
			5 => array(
			'var' => 'province_name'
			),
			6 => array(
			'var' => 'city_name'
			),
			7 => array(
			'var' => 'district_name'
			),
			8 => array(
			'var' => 'detail_address'
			),
			9 => array(
			'var' => 'email'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['contacter'])){
				
				$this->contacter = $vals['contacter'];
			}
			
			
			if (isset($vals['contacter_tel'])){
				
				$this->contacter_tel = $vals['contacter_tel'];
			}
			
			
			if (isset($vals['contacter_mobile'])){
				
				$this->contacter_mobile = $vals['contacter_mobile'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['province_name'])){
				
				$this->province_name = $vals['province_name'];
			}
			
			
			if (isset($vals['city_name'])){
				
				$this->city_name = $vals['city_name'];
			}
			
			
			if (isset($vals['district_name'])){
				
				$this->district_name = $vals['district_name'];
			}
			
			
			if (isset($vals['detail_address'])){
				
				$this->detail_address = $vals['detail_address'];
			}
			
			
			if (isset($vals['email'])){
				
				$this->email = $vals['email'];
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
			
			
			if ("contacter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacter);
				
			}
			
			
			
			
			if ("contacter_tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacter_tel);
				
			}
			
			
			
			
			if ("contacter_mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacter_mobile);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("province_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province_name);
				
			}
			
			
			
			
			if ("city_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city_name);
				
			}
			
			
			
			
			if ("district_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district_name);
				
			}
			
			
			
			
			if ("detail_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detail_address);
				
			}
			
			
			
			
			if ("email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->email);
				
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
		
		if($this->contacter !== null) {
			
			$xfer += $output->writeFieldBegin('contacter');
			$xfer += $output->writeString($this->contacter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contacter_tel !== null) {
			
			$xfer += $output->writeFieldBegin('contacter_tel');
			$xfer += $output->writeString($this->contacter_tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contacter_mobile !== null) {
			
			$xfer += $output->writeFieldBegin('contacter_mobile');
			$xfer += $output->writeString($this->contacter_mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province_name !== null) {
			
			$xfer += $output->writeFieldBegin('province_name');
			$xfer += $output->writeString($this->province_name);
			
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
		
		
		if($this->detail_address !== null) {
			
			$xfer += $output->writeFieldBegin('detail_address');
			$xfer += $output->writeString($this->detail_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->email !== null) {
			
			$xfer += $output->writeFieldBegin('email');
			$xfer += $output->writeString($this->email);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>