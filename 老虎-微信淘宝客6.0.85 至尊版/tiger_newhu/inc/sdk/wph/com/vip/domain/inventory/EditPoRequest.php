<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\inventory;

class EditPoRequest {
	
	static $_TSPEC;
	public $systemPoNo = null;
	public $clientPoNo = null;
	public $warehouseCode = null;
	public $channel = null;
	public $contacter = null;
	public $contacterTel = null;
	public $contacterMobie = null;
	public $country = null;
	public $state = null;
	public $city = null;
	public $district = null;
	public $address = null;
	public $email = null;
	public $weight = null;
	public $volume = null;
	public $remark = null;
	public $createUser = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'systemPoNo'
			),
			2 => array(
			'var' => 'clientPoNo'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			4 => array(
			'var' => 'channel'
			),
			5 => array(
			'var' => 'contacter'
			),
			6 => array(
			'var' => 'contacterTel'
			),
			7 => array(
			'var' => 'contacterMobie'
			),
			8 => array(
			'var' => 'country'
			),
			9 => array(
			'var' => 'state'
			),
			10 => array(
			'var' => 'city'
			),
			11 => array(
			'var' => 'district'
			),
			12 => array(
			'var' => 'address'
			),
			13 => array(
			'var' => 'email'
			),
			14 => array(
			'var' => 'weight'
			),
			15 => array(
			'var' => 'volume'
			),
			16 => array(
			'var' => 'remark'
			),
			17 => array(
			'var' => 'createUser'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['systemPoNo'])){
				
				$this->systemPoNo = $vals['systemPoNo'];
			}
			
			
			if (isset($vals['clientPoNo'])){
				
				$this->clientPoNo = $vals['clientPoNo'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['contacter'])){
				
				$this->contacter = $vals['contacter'];
			}
			
			
			if (isset($vals['contacterTel'])){
				
				$this->contacterTel = $vals['contacterTel'];
			}
			
			
			if (isset($vals['contacterMobie'])){
				
				$this->contacterMobie = $vals['contacterMobie'];
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
			
			
			if (isset($vals['district'])){
				
				$this->district = $vals['district'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['email'])){
				
				$this->email = $vals['email'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['createUser'])){
				
				$this->createUser = $vals['createUser'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EditPoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("systemPoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->systemPoNo);
				
			}
			
			
			
			
			if ("clientPoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->clientPoNo);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\inventory\ChannelInventoryChannel::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->channel = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("contacter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacter);
				
			}
			
			
			
			
			if ("contacterTel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacterTel);
				
			}
			
			
			
			
			if ("contacterMobie" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacterMobie);
				
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
			
			
			
			
			if ("district" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->email);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->weight);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->volume);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("createUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createUser);
				
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
		
		$xfer += $output->writeFieldBegin('systemPoNo');
		$xfer += $output->writeString($this->systemPoNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('clientPoNo');
		$xfer += $output->writeString($this->clientPoNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouseCode');
		$xfer += $output->writeString($this->warehouseCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('channel');
		
		$em = new \com\vip\domain\inventory\ChannelInventoryChannel; 
		$output->writeString($em::$__names[$this->channel]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contacter');
		$xfer += $output->writeString($this->contacter);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->contacterTel !== null) {
			
			$xfer += $output->writeFieldBegin('contacterTel');
			$xfer += $output->writeString($this->contacterTel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contacterMobie !== null) {
			
			$xfer += $output->writeFieldBegin('contacterMobie');
			$xfer += $output->writeString($this->contacterMobie);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('country');
		$xfer += $output->writeString($this->country);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('state');
		$xfer += $output->writeString($this->state);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('city');
		$xfer += $output->writeString($this->city);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('district');
		$xfer += $output->writeString($this->district);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('address');
		$xfer += $output->writeString($this->address);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('email');
		$xfer += $output->writeString($this->email);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('createUser');
		$xfer += $output->writeString($this->createUser);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>