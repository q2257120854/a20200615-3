<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\carrier\service;

class LoadingListReq {
	
	static $_TSPEC;
	public $batch_no = null;
	public $warehouse = null;
	public $license_plate_no = null;
	public $packet_quantity = null;
	public $op_time = null;
	public $op_type = null;
	public $page = null;
	public $loading_items = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batch_no'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'license_plate_no'
			),
			4 => array(
			'var' => 'packet_quantity'
			),
			5 => array(
			'var' => 'op_time'
			),
			6 => array(
			'var' => 'op_type'
			),
			7 => array(
			'var' => 'page'
			),
			8 => array(
			'var' => 'loading_items'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['license_plate_no'])){
				
				$this->license_plate_no = $vals['license_plate_no'];
			}
			
			
			if (isset($vals['packet_quantity'])){
				
				$this->packet_quantity = $vals['packet_quantity'];
			}
			
			
			if (isset($vals['op_time'])){
				
				$this->op_time = $vals['op_time'];
			}
			
			
			if (isset($vals['op_type'])){
				
				$this->op_type = $vals['op_type'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['loading_items'])){
				
				$this->loading_items = $vals['loading_items'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LoadingListReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("batch_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batch_no);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("license_plate_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->license_plate_no);
				
			}
			
			
			
			
			if ("packet_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->packet_quantity); 
				
			}
			
			
			
			
			if ("op_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->op_time); 
				
			}
			
			
			
			
			if ("op_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->op_type); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("loading_items" == $schemeField){
				
				$needSkip = false;
				
				$this->loading_items = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\logistics\carrier\service\LoadingItem();
						$elem0->read($input);
						
						$this->loading_items[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeString($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('license_plate_no');
		$xfer += $output->writeString($this->license_plate_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('packet_quantity');
		$xfer += $output->writeI32($this->packet_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('op_time');
		$xfer += $output->writeI64($this->op_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('op_type');
		$xfer += $output->writeI32($this->op_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->loading_items !== null) {
			
			$xfer += $output->writeFieldBegin('loading_items');
			
			if (!is_array($this->loading_items)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->loading_items as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>