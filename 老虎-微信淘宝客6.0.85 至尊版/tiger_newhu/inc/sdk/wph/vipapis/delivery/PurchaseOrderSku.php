<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class PurchaseOrderSku {
	
	static $_TSPEC;
	public $sell_site = null;
	public $warehouse = null;
	public $barcode = null;
	public $amount = null;
	public $order_cate = null;
	public $order_status = null;
	public $create_time = null;
	public $audit_time = null;
	public $actual_unit_price = null;
	public $actual_market_price = null;
	public $order_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sell_site'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'barcode'
			),
			4 => array(
			'var' => 'amount'
			),
			5 => array(
			'var' => 'order_cate'
			),
			6 => array(
			'var' => 'order_status'
			),
			7 => array(
			'var' => 'create_time'
			),
			8 => array(
			'var' => 'audit_time'
			),
			9 => array(
			'var' => 'actual_unit_price'
			),
			10 => array(
			'var' => 'actual_market_price'
			),
			11 => array(
			'var' => 'order_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sell_site'])){
				
				$this->sell_site = $vals['sell_site'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['order_cate'])){
				
				$this->order_cate = $vals['order_cate'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['audit_time'])){
				
				$this->audit_time = $vals['audit_time'];
			}
			
			
			if (isset($vals['actual_unit_price'])){
				
				$this->actual_unit_price = $vals['actual_unit_price'];
			}
			
			
			if (isset($vals['actual_market_price'])){
				
				$this->actual_market_price = $vals['actual_market_price'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseOrderSku';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sell_site" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sell_site);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("order_cate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_cate);
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("audit_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->audit_time);
				
			}
			
			
			
			
			if ("actual_unit_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actual_unit_price);
				
			}
			
			
			
			
			if ("actual_market_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actual_market_price);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
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
		
		if($this->sell_site !== null) {
			
			$xfer += $output->writeFieldBegin('sell_site');
			$xfer += $output->writeString($this->sell_site);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_cate !== null) {
			
			$xfer += $output->writeFieldBegin('order_cate');
			$xfer += $output->writeString($this->order_cate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeString($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->audit_time !== null) {
			
			$xfer += $output->writeFieldBegin('audit_time');
			$xfer += $output->writeString($this->audit_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actual_unit_price !== null) {
			
			$xfer += $output->writeFieldBegin('actual_unit_price');
			$xfer += $output->writeString($this->actual_unit_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actual_market_price !== null) {
			
			$xfer += $output->writeFieldBegin('actual_market_price');
			$xfer += $output->writeString($this->actual_market_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>