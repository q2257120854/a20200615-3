<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class GetOrdersRequest {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_status = null;
	public $start_time = null;
	public $end_time = null;
	public $page = null;
	public $limit = null;
	public $cooperation_nos = null;
	public $delivery_warehouse_codes = null;
	public $order_types = null;
	public $is_forbidden_delivery = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'order_status'
			),
			3 => array(
			'var' => 'start_time'
			),
			4 => array(
			'var' => 'end_time'
			),
			5 => array(
			'var' => 'page'
			),
			6 => array(
			'var' => 'limit'
			),
			7 => array(
			'var' => 'cooperation_nos'
			),
			8 => array(
			'var' => 'delivery_warehouse_codes'
			),
			9 => array(
			'var' => 'order_types'
			),
			10 => array(
			'var' => 'is_forbidden_delivery'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['start_time'])){
				
				$this->start_time = $vals['start_time'];
			}
			
			
			if (isset($vals['end_time'])){
				
				$this->end_time = $vals['end_time'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['cooperation_nos'])){
				
				$this->cooperation_nos = $vals['cooperation_nos'];
			}
			
			
			if (isset($vals['delivery_warehouse_codes'])){
				
				$this->delivery_warehouse_codes = $vals['delivery_warehouse_codes'];
			}
			
			
			if (isset($vals['order_types'])){
				
				$this->order_types = $vals['order_types'];
			}
			
			
			if (isset($vals['is_forbidden_delivery'])){
				
				$this->is_forbidden_delivery = $vals['is_forbidden_delivery'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetOrdersRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				
				$this->order_status = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->order_status[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("start_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_time); 
				
			}
			
			
			
			
			if ("end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_time); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
			}
			
			
			
			
			if ("cooperation_nos" == $schemeField){
				
				$needSkip = false;
				
				$this->cooperation_nos = array();
				$_size2 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->cooperation_nos[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("delivery_warehouse_codes" == $schemeField){
				
				$needSkip = false;
				
				$this->delivery_warehouse_codes = array();
				$_size3 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readString($elem3);
						
						$this->delivery_warehouse_codes[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("order_types" == $schemeField){
				
				$needSkip = false;
				
				$this->order_types = array();
				$_size4 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readI32($elem4); 
						
						$this->order_types[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("is_forbidden_delivery" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_forbidden_delivery); 
				
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			
			if (!is_array($this->order_status)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->order_status as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('start_time');
		$xfer += $output->writeI64($this->start_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('end_time');
		$xfer += $output->writeI64($this->end_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperation_nos !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_nos');
			
			if (!is_array($this->cooperation_nos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->cooperation_nos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_warehouse_codes !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_warehouse_codes');
			
			if (!is_array($this->delivery_warehouse_codes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->delivery_warehouse_codes as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_types !== null) {
			
			$xfer += $output->writeFieldBegin('order_types');
			
			if (!is_array($this->order_types)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->order_types as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_forbidden_delivery !== null) {
			
			$xfer += $output->writeFieldBegin('is_forbidden_delivery');
			$xfer += $output->writeI32($this->is_forbidden_delivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>