<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class BelleDeliveryOrder {
	
	static $_TSPEC;
	public $order_sn = null;
	public $available_warehouses = null;
	public $status = null;
	public $status_remark = null;
	public $buyer_address = null;
	public $update_time = null;
	public $warehousing_order_details = null;
	public $vendor_id = null;
	public $confirmed_delivery_warehouse = null;
	public $buyer_province = null;
	public $buyer_city = null;
	public $buyer_county = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'available_warehouses'
			),
			3 => array(
			'var' => 'status'
			),
			4 => array(
			'var' => 'status_remark'
			),
			5 => array(
			'var' => 'buyer_address'
			),
			6 => array(
			'var' => 'update_time'
			),
			7 => array(
			'var' => 'warehousing_order_details'
			),
			8 => array(
			'var' => 'vendor_id'
			),
			9 => array(
			'var' => 'confirmed_delivery_warehouse'
			),
			20 => array(
			'var' => 'buyer_province'
			),
			21 => array(
			'var' => 'buyer_city'
			),
			22 => array(
			'var' => 'buyer_county'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['available_warehouses'])){
				
				$this->available_warehouses = $vals['available_warehouses'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['status_remark'])){
				
				$this->status_remark = $vals['status_remark'];
			}
			
			
			if (isset($vals['buyer_address'])){
				
				$this->buyer_address = $vals['buyer_address'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['warehousing_order_details'])){
				
				$this->warehousing_order_details = $vals['warehousing_order_details'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['confirmed_delivery_warehouse'])){
				
				$this->confirmed_delivery_warehouse = $vals['confirmed_delivery_warehouse'];
			}
			
			
			if (isset($vals['buyer_province'])){
				
				$this->buyer_province = $vals['buyer_province'];
			}
			
			
			if (isset($vals['buyer_city'])){
				
				$this->buyer_city = $vals['buyer_city'];
			}
			
			
			if (isset($vals['buyer_county'])){
				
				$this->buyer_county = $vals['buyer_county'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BelleDeliveryOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("available_warehouses" == $schemeField){
				
				$needSkip = false;
				
				$this->available_warehouses = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->available_warehouses[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("status_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status_remark);
				
			}
			
			
			
			
			if ("buyer_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_address);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_time);
				
			}
			
			
			
			
			if ("warehousing_order_details" == $schemeField){
				
				$needSkip = false;
				
				$this->warehousing_order_details = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\jitx\WarehousingOrderDetail();
						$elem1->read($input);
						
						$this->warehousing_order_details[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("confirmed_delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->confirmed_delivery_warehouse);
				
			}
			
			
			
			
			if ("buyer_province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_province);
				
			}
			
			
			
			
			if ("buyer_city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_city);
				
			}
			
			
			
			
			if ("buyer_county" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_county);
				
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
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->available_warehouses !== null) {
			
			$xfer += $output->writeFieldBegin('available_warehouses');
			
			if (!is_array($this->available_warehouses)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->available_warehouses as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status_remark !== null) {
			
			$xfer += $output->writeFieldBegin('status_remark');
			$xfer += $output->writeString($this->status_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_address !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_address');
			$xfer += $output->writeString($this->buyer_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeString($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehousing_order_details !== null) {
			
			$xfer += $output->writeFieldBegin('warehousing_order_details');
			
			if (!is_array($this->warehousing_order_details)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->warehousing_order_details as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->confirmed_delivery_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('confirmed_delivery_warehouse');
			$xfer += $output->writeString($this->confirmed_delivery_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_province !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_province');
			$xfer += $output->writeString($this->buyer_province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_city !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_city');
			$xfer += $output->writeString($this->buyer_city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_county !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_county');
			$xfer += $output->writeString($this->buyer_county);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>