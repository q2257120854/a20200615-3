<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vreturn;

class ReturnInfo {
	
	static $_TSPEC;
	public $return_sn = null;
	public $warehouse = null;
	public $return_type = null;
	public $pay_type = null;
	public $consignee = null;
	public $country = null;
	public $state = null;
	public $city = null;
	public $region = null;
	public $town = null;
	public $address = null;
	public $postcode = null;
	public $telephone = null;
	public $mobile = null;
	public $to_email = null;
	public $cc_email = null;
	public $self_reference = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'return_sn'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'return_type'
			),
			4 => array(
			'var' => 'pay_type'
			),
			5 => array(
			'var' => 'consignee'
			),
			6 => array(
			'var' => 'country'
			),
			7 => array(
			'var' => 'state'
			),
			8 => array(
			'var' => 'city'
			),
			9 => array(
			'var' => 'region'
			),
			10 => array(
			'var' => 'town'
			),
			11 => array(
			'var' => 'address'
			),
			12 => array(
			'var' => 'postcode'
			),
			13 => array(
			'var' => 'telephone'
			),
			14 => array(
			'var' => 'mobile'
			),
			15 => array(
			'var' => 'to_email'
			),
			16 => array(
			'var' => 'cc_email'
			),
			17 => array(
			'var' => 'self_reference'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['return_type'])){
				
				$this->return_type = $vals['return_type'];
			}
			
			
			if (isset($vals['pay_type'])){
				
				$this->pay_type = $vals['pay_type'];
			}
			
			
			if (isset($vals['consignee'])){
				
				$this->consignee = $vals['consignee'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['region'])){
				
				$this->region = $vals['region'];
			}
			
			
			if (isset($vals['town'])){
				
				$this->town = $vals['town'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['postcode'])){
				
				$this->postcode = $vals['postcode'];
			}
			
			
			if (isset($vals['telephone'])){
				
				$this->telephone = $vals['telephone'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['to_email'])){
				
				$this->to_email = $vals['to_email'];
			}
			
			
			if (isset($vals['cc_email'])){
				
				$this->cc_email = $vals['cc_email'];
			}
			
			
			if (isset($vals['self_reference'])){
				
				$this->self_reference = $vals['self_reference'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_sn);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				
				$names = \vipapis\common\Warehouse::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->warehouse = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("return_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->return_type); 
				
			}
			
			
			
			
			if ("pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pay_type); 
				
			}
			
			
			
			
			if ("consignee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consignee);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("region" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->region);
				
			}
			
			
			
			
			if ("town" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->town);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("postcode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->postcode); 
				
			}
			
			
			
			
			if ("telephone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->telephone);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("to_email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->to_email);
				
			}
			
			
			
			
			if ("cc_email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cc_email);
				
			}
			
			
			
			
			if ("self_reference" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->self_reference); 
				
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
		
		if($this->return_sn !== null) {
			
			$xfer += $output->writeFieldBegin('return_sn');
			$xfer += $output->writeString($this->return_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			
			$em = new \vipapis\common\Warehouse; 
			$output->writeString($em::$__names[$this->warehouse]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_type !== null) {
			
			$xfer += $output->writeFieldBegin('return_type');
			$xfer += $output->writeI32($this->return_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_type !== null) {
			
			$xfer += $output->writeFieldBegin('pay_type');
			$xfer += $output->writeI32($this->pay_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->consignee !== null) {
			
			$xfer += $output->writeFieldBegin('consignee');
			$xfer += $output->writeString($this->consignee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeString($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->region !== null) {
			
			$xfer += $output->writeFieldBegin('region');
			$xfer += $output->writeString($this->region);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->town !== null) {
			
			$xfer += $output->writeFieldBegin('town');
			$xfer += $output->writeString($this->town);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postcode !== null) {
			
			$xfer += $output->writeFieldBegin('postcode');
			$xfer += $output->writeI32($this->postcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->telephone !== null) {
			
			$xfer += $output->writeFieldBegin('telephone');
			$xfer += $output->writeString($this->telephone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->to_email !== null) {
			
			$xfer += $output->writeFieldBegin('to_email');
			$xfer += $output->writeString($this->to_email);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cc_email !== null) {
			
			$xfer += $output->writeFieldBegin('cc_email');
			$xfer += $output->writeString($this->cc_email);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->self_reference !== null) {
			
			$xfer += $output->writeFieldBegin('self_reference');
			$xfer += $output->writeI32($this->self_reference);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>