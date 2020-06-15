<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class DeliveryGoodsList {
	
	static $_TSPEC;
	public $storage_no = null;
	public $po_no = null;
	public $delivery_no = null;
	public $warehouse = null;
	public $out_time = null;
	public $arrive_time = null;
	public $race_time = null;
	public $carrier_name = null;
	public $tel = null;
	public $driver = null;
	public $driver_tel = null;
	public $plate_number = null;
	public $barcode = null;
	public $product_name = null;
	public $amount = null;
	public $pick_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'storage_no'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'delivery_no'
			),
			4 => array(
			'var' => 'warehouse'
			),
			5 => array(
			'var' => 'out_time'
			),
			6 => array(
			'var' => 'arrive_time'
			),
			7 => array(
			'var' => 'race_time'
			),
			8 => array(
			'var' => 'carrier_name'
			),
			9 => array(
			'var' => 'tel'
			),
			10 => array(
			'var' => 'driver'
			),
			11 => array(
			'var' => 'driver_tel'
			),
			12 => array(
			'var' => 'plate_number'
			),
			13 => array(
			'var' => 'barcode'
			),
			14 => array(
			'var' => 'product_name'
			),
			15 => array(
			'var' => 'amount'
			),
			16 => array(
			'var' => 'pick_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
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
			
			
			if (isset($vals['out_time'])){
				
				$this->out_time = $vals['out_time'];
			}
			
			
			if (isset($vals['arrive_time'])){
				
				$this->arrive_time = $vals['arrive_time'];
			}
			
			
			if (isset($vals['race_time'])){
				
				$this->race_time = $vals['race_time'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['driver'])){
				
				$this->driver = $vals['driver'];
			}
			
			
			if (isset($vals['driver_tel'])){
				
				$this->driver_tel = $vals['driver_tel'];
			}
			
			
			if (isset($vals['plate_number'])){
				
				$this->plate_number = $vals['plate_number'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['pick_no'])){
				
				$this->pick_no = $vals['pick_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DeliveryGoodsList';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("storage_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storage_no);
				
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
			
			
			
			
			if ("out_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_time);
				
			}
			
			
			
			
			if ("arrive_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrive_time);
				
			}
			
			
			
			
			if ("race_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->race_time);
				
			}
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("driver" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->driver);
				
			}
			
			
			
			
			if ("driver_tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->driver_tel);
				
			}
			
			
			
			
			if ("plate_number" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->plate_number);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("pick_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pick_no);
				
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
		
		if($this->storage_no !== null) {
			
			$xfer += $output->writeFieldBegin('storage_no');
			$xfer += $output->writeString($this->storage_no);
			
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
		
		
		if($this->race_time !== null) {
			
			$xfer += $output->writeFieldBegin('race_time');
			$xfer += $output->writeString($this->race_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_name !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_name');
			$xfer += $output->writeString($this->carrier_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->driver !== null) {
			
			$xfer += $output->writeFieldBegin('driver');
			$xfer += $output->writeString($this->driver);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->driver_tel !== null) {
			
			$xfer += $output->writeFieldBegin('driver_tel');
			$xfer += $output->writeString($this->driver_tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->plate_number !== null) {
			
			$xfer += $output->writeFieldBegin('plate_number');
			$xfer += $output->writeString($this->plate_number);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_name !== null) {
			
			$xfer += $output->writeFieldBegin('product_name');
			$xfer += $output->writeString($this->product_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeString($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pick_no !== null) {
			
			$xfer += $output->writeFieldBegin('pick_no');
			$xfer += $output->writeString($this->pick_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>