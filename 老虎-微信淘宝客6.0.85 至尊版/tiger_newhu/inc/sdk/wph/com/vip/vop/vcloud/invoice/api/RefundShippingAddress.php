<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\invoice\api;

class RefundShippingAddress {
	
	static $_TSPEC;
	public $refundId = null;
	public $customerId = null;
	public $firstname = null;
	public $lastname = null;
	public $telephone = null;
	public $email = null;
	public $region = null;
	public $city = null;
	public $district = null;
	public $street = null;
	public $postcode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'refundId'
			),
			2 => array(
			'var' => 'customerId'
			),
			3 => array(
			'var' => 'firstname'
			),
			4 => array(
			'var' => 'lastname'
			),
			5 => array(
			'var' => 'telephone'
			),
			6 => array(
			'var' => 'email'
			),
			7 => array(
			'var' => 'region'
			),
			8 => array(
			'var' => 'city'
			),
			9 => array(
			'var' => 'district'
			),
			10 => array(
			'var' => 'street'
			),
			11 => array(
			'var' => 'postcode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['refundId'])){
				
				$this->refundId = $vals['refundId'];
			}
			
			
			if (isset($vals['customerId'])){
				
				$this->customerId = $vals['customerId'];
			}
			
			
			if (isset($vals['firstname'])){
				
				$this->firstname = $vals['firstname'];
			}
			
			
			if (isset($vals['lastname'])){
				
				$this->lastname = $vals['lastname'];
			}
			
			
			if (isset($vals['telephone'])){
				
				$this->telephone = $vals['telephone'];
			}
			
			
			if (isset($vals['email'])){
				
				$this->email = $vals['email'];
			}
			
			
			if (isset($vals['region'])){
				
				$this->region = $vals['region'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['district'])){
				
				$this->district = $vals['district'];
			}
			
			
			if (isset($vals['street'])){
				
				$this->street = $vals['street'];
			}
			
			
			if (isset($vals['postcode'])){
				
				$this->postcode = $vals['postcode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RefundShippingAddress';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("refundId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refundId); 
				
			}
			
			
			
			
			if ("customerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->customerId); 
				
			}
			
			
			
			
			if ("firstname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->firstname);
				
			}
			
			
			
			
			if ("lastname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lastname);
				
			}
			
			
			
			
			if ("telephone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->telephone);
				
			}
			
			
			
			
			if ("email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->email);
				
			}
			
			
			
			
			if ("region" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->region);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("district" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district);
				
			}
			
			
			
			
			if ("street" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->street);
				
			}
			
			
			
			
			if ("postcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postcode);
				
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
		
		if($this->refundId !== null) {
			
			$xfer += $output->writeFieldBegin('refundId');
			$xfer += $output->writeI64($this->refundId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerId !== null) {
			
			$xfer += $output->writeFieldBegin('customerId');
			$xfer += $output->writeI64($this->customerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->firstname !== null) {
			
			$xfer += $output->writeFieldBegin('firstname');
			$xfer += $output->writeString($this->firstname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastname !== null) {
			
			$xfer += $output->writeFieldBegin('lastname');
			$xfer += $output->writeString($this->lastname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->telephone !== null) {
			
			$xfer += $output->writeFieldBegin('telephone');
			$xfer += $output->writeString($this->telephone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->email !== null) {
			
			$xfer += $output->writeFieldBegin('email');
			$xfer += $output->writeString($this->email);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->region !== null) {
			
			$xfer += $output->writeFieldBegin('region');
			$xfer += $output->writeString($this->region);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->district !== null) {
			
			$xfer += $output->writeFieldBegin('district');
			$xfer += $output->writeString($this->district);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->street !== null) {
			
			$xfer += $output->writeFieldBegin('street');
			$xfer += $output->writeString($this->street);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postcode !== null) {
			
			$xfer += $output->writeFieldBegin('postcode');
			$xfer += $output->writeString($this->postcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>