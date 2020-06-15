<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class TakingAwayGoodsRequest {
	
	static $_TSPEC;
	public $orderSn = null;
	public $status = null;
	public $type = null;
	public $deliverymanName = null;
	public $contactNumber = null;
	public $time = null;
	public $transportNo = null;
	public $weight = null;
	public $volume = null;
	public $operator = null;
	public $packs = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'status'
			),
			3 => array(
			'var' => 'type'
			),
			4 => array(
			'var' => 'deliverymanName'
			),
			5 => array(
			'var' => 'contactNumber'
			),
			6 => array(
			'var' => 'time'
			),
			7 => array(
			'var' => 'transportNo'
			),
			8 => array(
			'var' => 'weight'
			),
			9 => array(
			'var' => 'volume'
			),
			10 => array(
			'var' => 'operator'
			),
			11 => array(
			'var' => 'packs'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['deliverymanName'])){
				
				$this->deliverymanName = $vals['deliverymanName'];
			}
			
			
			if (isset($vals['contactNumber'])){
				
				$this->contactNumber = $vals['contactNumber'];
			}
			
			
			if (isset($vals['time'])){
				
				$this->time = $vals['time'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['packs'])){
				
				$this->packs = $vals['packs'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TakingAwayGoodsRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("deliverymanName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliverymanName);
				
			}
			
			
			
			
			if ("contactNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contactNumber);
				
			}
			
			
			
			
			if ("time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->time); 
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->weight);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->volume);
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
			}
			
			
			
			
			if ("packs" == $schemeField){
				
				$needSkip = false;
				
				$this->packs = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\tpc\service\GoodsPack();
						$elem0->read($input);
						
						$this->packs[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
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
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeString($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliverymanName !== null) {
			
			$xfer += $output->writeFieldBegin('deliverymanName');
			$xfer += $output->writeString($this->deliverymanName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contactNumber !== null) {
			
			$xfer += $output->writeFieldBegin('contactNumber');
			$xfer += $output->writeString($this->contactNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('time');
		$xfer += $output->writeI64($this->time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packs !== null) {
			
			$xfer += $output->writeFieldBegin('packs');
			
			if (!is_array($this->packs)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->packs as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>