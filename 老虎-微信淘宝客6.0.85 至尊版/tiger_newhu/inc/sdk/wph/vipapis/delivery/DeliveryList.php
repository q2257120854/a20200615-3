<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class DeliveryList {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vendor_name = null;
	public $po_no = null;
	public $delivery_no = null;
	public $warehouse = null;
	public $storage_no = null;
	public $out_time = null;
	public $arrive_time = null;
	public $real_arrive_time = null;
	public $race_time = null;
	public $real_race_time = null;
	public $out_flag = null;
	public $create_time = null;
	public $store_sn = null;
	public $delivery_time = null;
	public $carrier_code = null;
	public $carrier_name = null;
	public $delivery_method = null;
	public $jit_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'vendor_name'
			),
			3 => array(
			'var' => 'po_no'
			),
			4 => array(
			'var' => 'delivery_no'
			),
			5 => array(
			'var' => 'warehouse'
			),
			6 => array(
			'var' => 'storage_no'
			),
			7 => array(
			'var' => 'out_time'
			),
			8 => array(
			'var' => 'arrive_time'
			),
			9 => array(
			'var' => 'real_arrive_time'
			),
			10 => array(
			'var' => 'race_time'
			),
			11 => array(
			'var' => 'real_race_time'
			),
			12 => array(
			'var' => 'out_flag'
			),
			13 => array(
			'var' => 'create_time'
			),
			14 => array(
			'var' => 'store_sn'
			),
			15 => array(
			'var' => 'delivery_time'
			),
			16 => array(
			'var' => 'carrier_code'
			),
			17 => array(
			'var' => 'carrier_name'
			),
			18 => array(
			'var' => 'delivery_method'
			),
			19 => array(
			'var' => 'jit_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['delivery_no'])){
				
				$this->delivery_no = $vals['delivery_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
			if (isset($vals['out_time'])){
				
				$this->out_time = $vals['out_time'];
			}
			
			
			if (isset($vals['arrive_time'])){
				
				$this->arrive_time = $vals['arrive_time'];
			}
			
			
			if (isset($vals['real_arrive_time'])){
				
				$this->real_arrive_time = $vals['real_arrive_time'];
			}
			
			
			if (isset($vals['race_time'])){
				
				$this->race_time = $vals['race_time'];
			}
			
			
			if (isset($vals['real_race_time'])){
				
				$this->real_race_time = $vals['real_race_time'];
			}
			
			
			if (isset($vals['out_flag'])){
				
				$this->out_flag = $vals['out_flag'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['delivery_time'])){
				
				$this->delivery_time = $vals['delivery_time'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['delivery_method'])){
				
				$this->delivery_method = $vals['delivery_method'];
			}
			
			
			if (isset($vals['jit_type'])){
				
				$this->jit_type = $vals['jit_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DeliveryList';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_id);
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("delivery_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_no);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("storage_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storage_no);
				
			}
			
			
			
			
			if ("out_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_time);
				
			}
			
			
			
			
			if ("arrive_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrive_time);
				
			}
			
			
			
			
			if ("real_arrive_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->real_arrive_time);
				
			}
			
			
			
			
			if ("race_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->race_time);
				
			}
			
			
			
			
			if ("real_race_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->real_race_time);
				
			}
			
			
			
			
			if ("out_flag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_flag);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("store_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_sn);
				
			}
			
			
			
			
			if ("delivery_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_time);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
			}
			
			
			
			
			if ("delivery_method" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_method);
				
			}
			
			
			
			
			if ("jit_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->jit_type); 
				
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
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeString($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_name');
			$xfer += $output->writeString($this->vendor_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_no');
			$xfer += $output->writeString($this->delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storage_no !== null) {
			
			$xfer += $output->writeFieldBegin('storage_no');
			$xfer += $output->writeString($this->storage_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_time !== null) {
			
			$xfer += $output->writeFieldBegin('out_time');
			$xfer += $output->writeString($this->out_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrive_time !== null) {
			
			$xfer += $output->writeFieldBegin('arrive_time');
			$xfer += $output->writeString($this->arrive_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->real_arrive_time !== null) {
			
			$xfer += $output->writeFieldBegin('real_arrive_time');
			$xfer += $output->writeString($this->real_arrive_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->race_time !== null) {
			
			$xfer += $output->writeFieldBegin('race_time');
			$xfer += $output->writeString($this->race_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->real_race_time !== null) {
			
			$xfer += $output->writeFieldBegin('real_race_time');
			$xfer += $output->writeString($this->real_race_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_flag !== null) {
			
			$xfer += $output->writeFieldBegin('out_flag');
			$xfer += $output->writeString($this->out_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('store_sn');
			$xfer += $output->writeString($this->store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_time !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_time');
			$xfer += $output->writeString($this->delivery_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_name !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_name');
			$xfer += $output->writeString($this->carrier_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_method !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_method');
			$xfer += $output->writeString($this->delivery_method);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jit_type !== null) {
			
			$xfer += $output->writeFieldBegin('jit_type');
			$xfer += $output->writeI32($this->jit_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>