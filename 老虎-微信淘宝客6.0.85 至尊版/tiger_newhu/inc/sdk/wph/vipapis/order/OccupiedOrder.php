<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class OccupiedOrder {
	
	static $_TSPEC;
	public $order_id = null;
	public $create_time = null;
	public $barcodes = null;
	public $business_type = null;
	public $order_source = null;
	public $province_code = null;
	public $province = null;
	public $city_code = null;
	public $city = null;
	public $district_code = null;
	public $district = null;
	public $invoice_type = null;
	public $parent_order_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'create_time'
			),
			3 => array(
			'var' => 'barcodes'
			),
			4 => array(
			'var' => 'business_type'
			),
			5 => array(
			'var' => 'order_source'
			),
			6 => array(
			'var' => 'province_code'
			),
			7 => array(
			'var' => 'province'
			),
			8 => array(
			'var' => 'city_code'
			),
			9 => array(
			'var' => 'city'
			),
			10 => array(
			'var' => 'district_code'
			),
			11 => array(
			'var' => 'district'
			),
			12 => array(
			'var' => 'invoice_type'
			),
			13 => array(
			'var' => 'parent_order_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['barcodes'])){
				
				$this->barcodes = $vals['barcodes'];
			}
			
			
			if (isset($vals['business_type'])){
				
				$this->business_type = $vals['business_type'];
			}
			
			
			if (isset($vals['order_source'])){
				
				$this->order_source = $vals['order_source'];
			}
			
			
			if (isset($vals['province_code'])){
				
				$this->province_code = $vals['province_code'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city_code'])){
				
				$this->city_code = $vals['city_code'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['district_code'])){
				
				$this->district_code = $vals['district_code'];
			}
			
			
			if (isset($vals['district'])){
				
				$this->district = $vals['district'];
			}
			
			
			if (isset($vals['invoice_type'])){
				
				$this->invoice_type = $vals['invoice_type'];
			}
			
			
			if (isset($vals['parent_order_id'])){
				
				$this->parent_order_id = $vals['parent_order_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OccupiedOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("barcodes" == $schemeField){
				
				$needSkip = false;
				
				$this->barcodes = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\order\OccupiedOrderDetail();
						$elem0->read($input);
						
						$this->barcodes[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("business_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->business_type); 
				
			}
			
			
			
			
			if ("order_source" == $schemeField){
				
				$needSkip = false;
				
				$this->order_source = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\order\OrderSource();
						$elem1->read($input);
						
						$this->order_source[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("province_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province_code);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city_code);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("district_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district_code);
				
			}
			
			
			
			
			if ("district" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district);
				
			}
			
			
			
			
			if ("invoice_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->invoice_type); 
				
			}
			
			
			
			
			if ("parent_order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parent_order_id);
				
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
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcodes !== null) {
			
			$xfer += $output->writeFieldBegin('barcodes');
			
			if (!is_array($this->barcodes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->barcodes as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->business_type !== null) {
			
			$xfer += $output->writeFieldBegin('business_type');
			$xfer += $output->writeI32($this->business_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_source !== null) {
			
			$xfer += $output->writeFieldBegin('order_source');
			
			if (!is_array($this->order_source)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->order_source as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province_code !== null) {
			
			$xfer += $output->writeFieldBegin('province_code');
			$xfer += $output->writeString($this->province_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province !== null) {
			
			$xfer += $output->writeFieldBegin('province');
			$xfer += $output->writeString($this->province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city_code !== null) {
			
			$xfer += $output->writeFieldBegin('city_code');
			$xfer += $output->writeString($this->city_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->district_code !== null) {
			
			$xfer += $output->writeFieldBegin('district_code');
			$xfer += $output->writeString($this->district_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->district !== null) {
			
			$xfer += $output->writeFieldBegin('district');
			$xfer += $output->writeString($this->district);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_type !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_type');
			$xfer += $output->writeI32($this->invoice_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parent_order_id !== null) {
			
			$xfer += $output->writeFieldBegin('parent_order_id');
			$xfer += $output->writeString($this->parent_order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>