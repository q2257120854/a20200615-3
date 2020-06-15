<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\warehouse\api;

class Warehouse {
	
	static $_TSPEC;
	public $id = null;
	public $partnerId = null;
	public $warehouseCode = null;
	public $warehouseName = null;
	public $safeQuantity = null;
	public $address = null;
	public $isVirtual = null;
	public $description = null;
	public $vipStoreSn = null;
	public $receiverMobile = null;
	public $receiverName = null;
	public $senderMobile = null;
	public $senderName = null;
	public $priority = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'partnerId'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			4 => array(
			'var' => 'warehouseName'
			),
			5 => array(
			'var' => 'safeQuantity'
			),
			6 => array(
			'var' => 'address'
			),
			7 => array(
			'var' => 'isVirtual'
			),
			8 => array(
			'var' => 'description'
			),
			9 => array(
			'var' => 'vipStoreSn'
			),
			10 => array(
			'var' => 'receiverMobile'
			),
			11 => array(
			'var' => 'receiverName'
			),
			12 => array(
			'var' => 'senderMobile'
			),
			13 => array(
			'var' => 'senderName'
			),
			14 => array(
			'var' => 'priority'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['warehouseName'])){
				
				$this->warehouseName = $vals['warehouseName'];
			}
			
			
			if (isset($vals['safeQuantity'])){
				
				$this->safeQuantity = $vals['safeQuantity'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['isVirtual'])){
				
				$this->isVirtual = $vals['isVirtual'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['vipStoreSn'])){
				
				$this->vipStoreSn = $vals['vipStoreSn'];
			}
			
			
			if (isset($vals['receiverMobile'])){
				
				$this->receiverMobile = $vals['receiverMobile'];
			}
			
			
			if (isset($vals['receiverName'])){
				
				$this->receiverName = $vals['receiverName'];
			}
			
			
			if (isset($vals['senderMobile'])){
				
				$this->senderMobile = $vals['senderMobile'];
			}
			
			
			if (isset($vals['senderName'])){
				
				$this->senderName = $vals['senderName'];
			}
			
			
			if (isset($vals['priority'])){
				
				$this->priority = $vals['priority'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Warehouse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("partnerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->partnerId); 
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("warehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseName);
				
			}
			
			
			
			
			if ("safeQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->safeQuantity); 
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				
				$this->address = new \com\vip\vop\vcloud\warehouse\api\Address();
				$this->address->read($input);
				
			}
			
			
			
			
			if ("isVirtual" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isVirtual); 
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("vipStoreSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipStoreSn);
				
			}
			
			
			
			
			if ("receiverMobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverMobile);
				
			}
			
			
			
			
			if ("receiverName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverName);
				
			}
			
			
			
			
			if ("senderMobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderMobile);
				
			}
			
			
			
			
			if ("senderName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderName);
				
			}
			
			
			
			
			if ("priority" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->priority); 
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseName');
			$xfer += $output->writeString($this->warehouseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->safeQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('safeQuantity');
			$xfer += $output->writeI32($this->safeQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			
			if (!is_object($this->address)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->address->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isVirtual !== null) {
			
			$xfer += $output->writeFieldBegin('isVirtual');
			$xfer += $output->writeI32($this->isVirtual);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipStoreSn !== null) {
			
			$xfer += $output->writeFieldBegin('vipStoreSn');
			$xfer += $output->writeString($this->vipStoreSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverMobile !== null) {
			
			$xfer += $output->writeFieldBegin('receiverMobile');
			$xfer += $output->writeString($this->receiverMobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverName !== null) {
			
			$xfer += $output->writeFieldBegin('receiverName');
			$xfer += $output->writeString($this->receiverName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderMobile !== null) {
			
			$xfer += $output->writeFieldBegin('senderMobile');
			$xfer += $output->writeString($this->senderMobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderName !== null) {
			
			$xfer += $output->writeFieldBegin('senderName');
			$xfer += $output->writeString($this->senderName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priority !== null) {
			
			$xfer += $output->writeFieldBegin('priority');
			$xfer += $output->writeI32($this->priority);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>