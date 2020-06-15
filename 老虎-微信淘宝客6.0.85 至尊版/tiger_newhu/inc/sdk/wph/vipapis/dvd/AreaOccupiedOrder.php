<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\dvd;

class AreaOccupiedOrder {
	
	static $_TSPEC;
	public $order_id = null;
	public $create_time = null;
	public $province_code = null;
	public $province = null;
	public $city_code = null;
	public $city = null;
	public $district_code = null;
	public $district = null;
	public $area_warehouse_id = null;
	public $sale_type = null;
	public $order_type = null;
	public $order_details = null;
	
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
			'var' => 'province_code'
			),
			4 => array(
			'var' => 'province'
			),
			5 => array(
			'var' => 'city_code'
			),
			6 => array(
			'var' => 'city'
			),
			7 => array(
			'var' => 'district_code'
			),
			8 => array(
			'var' => 'district'
			),
			9 => array(
			'var' => 'area_warehouse_id'
			),
			10 => array(
			'var' => 'sale_type'
			),
			11 => array(
			'var' => 'order_type'
			),
			12 => array(
			'var' => 'order_details'
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
			
			
			if (isset($vals['area_warehouse_id'])){
				
				$this->area_warehouse_id = $vals['area_warehouse_id'];
			}
			
			
			if (isset($vals['sale_type'])){
				
				$this->sale_type = $vals['sale_type'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['order_details'])){
				
				$this->order_details = $vals['order_details'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AreaOccupiedOrder';
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
			
			
			
			
			if ("area_warehouse_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_warehouse_id);
				
			}
			
			
			
			
			if ("sale_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sale_type); 
				
			}
			
			
			
			
			if ("order_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->order_type); 
				
			}
			
			
			
			
			if ("order_details" == $schemeField){
				
				$needSkip = false;
				
				$this->order_details = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\dvd\AreaOccupiedOrderDetail();
						$elem0->read($input);
						
						$this->order_details[$_size0++] = $elem0;
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
		
		
		if($this->area_warehouse_id !== null) {
			
			$xfer += $output->writeFieldBegin('area_warehouse_id');
			$xfer += $output->writeString($this->area_warehouse_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_type !== null) {
			
			$xfer += $output->writeFieldBegin('sale_type');
			$xfer += $output->writeI32($this->sale_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_type !== null) {
			
			$xfer += $output->writeFieldBegin('order_type');
			$xfer += $output->writeI32($this->order_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_details !== null) {
			
			$xfer += $output->writeFieldBegin('order_details');
			
			if (!is_array($this->order_details)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->order_details as $iter0){
				
				
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