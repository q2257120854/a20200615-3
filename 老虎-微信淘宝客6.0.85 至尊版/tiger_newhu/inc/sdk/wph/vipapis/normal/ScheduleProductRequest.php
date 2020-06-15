<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\normal;

class ScheduleProductRequest {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $warehouse_supplier = null;
	public $scheduleProductList = null;
	public $st_create_time = null;
	public $et_create_time = null;
	public $limit = null;
	public $page = null;
	public $cooperation_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'warehouse_supplier'
			),
			3 => array(
			'var' => 'scheduleProductList'
			),
			4 => array(
			'var' => 'st_create_time'
			),
			5 => array(
			'var' => 'et_create_time'
			),
			6 => array(
			'var' => 'limit'
			),
			7 => array(
			'var' => 'page'
			),
			8 => array(
			'var' => 'cooperation_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['warehouse_supplier'])){
				
				$this->warehouse_supplier = $vals['warehouse_supplier'];
			}
			
			
			if (isset($vals['scheduleProductList'])){
				
				$this->scheduleProductList = $vals['scheduleProductList'];
			}
			
			
			if (isset($vals['st_create_time'])){
				
				$this->st_create_time = $vals['st_create_time'];
			}
			
			
			if (isset($vals['et_create_time'])){
				
				$this->et_create_time = $vals['et_create_time'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ScheduleProductRequest';
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
			
			
			
			
			if ("warehouse_supplier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_supplier);
				
			}
			
			
			
			
			if ("scheduleProductList" == $schemeField){
				
				$needSkip = false;
				
				$this->scheduleProductList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\normal\ScheduleProduct();
						$elem0->read($input);
						
						$this->scheduleProductList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("st_create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->st_create_time); 
				
			}
			
			
			
			
			if ("et_create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->et_create_time); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("cooperation_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cooperation_no); 
				
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
		
		if($this->warehouse_supplier !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_supplier');
			$xfer += $output->writeString($this->warehouse_supplier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleProductList !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleProductList');
			
			if (!is_array($this->scheduleProductList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->scheduleProductList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_create_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_create_time');
			$xfer += $output->writeI64($this->st_create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_create_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_create_time');
			$xfer += $output->writeI64($this->et_create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperation_no !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_no');
			$xfer += $output->writeI32($this->cooperation_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>