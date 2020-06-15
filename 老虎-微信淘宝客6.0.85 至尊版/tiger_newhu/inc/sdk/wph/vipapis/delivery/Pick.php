<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class Pick {
	
	static $_TSPEC;
	public $po_no = null;
	public $pick_no = null;
	public $co_mode = null;
	public $sell_site = null;
	public $order_cate = null;
	public $pick_num = null;
	public $create_time = null;
	public $first_export_time = null;
	public $export_num = null;
	public $delivery_status = null;
	public $store_sn = null;
	public $delivery_num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_no'
			),
			2 => array(
			'var' => 'pick_no'
			),
			3 => array(
			'var' => 'co_mode'
			),
			4 => array(
			'var' => 'sell_site'
			),
			5 => array(
			'var' => 'order_cate'
			),
			6 => array(
			'var' => 'pick_num'
			),
			7 => array(
			'var' => 'create_time'
			),
			8 => array(
			'var' => 'first_export_time'
			),
			9 => array(
			'var' => 'export_num'
			),
			10 => array(
			'var' => 'delivery_status'
			),
			11 => array(
			'var' => 'store_sn'
			),
			12 => array(
			'var' => 'delivery_num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['pick_no'])){
				
				$this->pick_no = $vals['pick_no'];
			}
			
			
			if (isset($vals['co_mode'])){
				
				$this->co_mode = $vals['co_mode'];
			}
			
			
			if (isset($vals['sell_site'])){
				
				$this->sell_site = $vals['sell_site'];
			}
			
			
			if (isset($vals['order_cate'])){
				
				$this->order_cate = $vals['order_cate'];
			}
			
			
			if (isset($vals['pick_num'])){
				
				$this->pick_num = $vals['pick_num'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['first_export_time'])){
				
				$this->first_export_time = $vals['first_export_time'];
			}
			
			
			if (isset($vals['export_num'])){
				
				$this->export_num = $vals['export_num'];
			}
			
			
			if (isset($vals['delivery_status'])){
				
				$this->delivery_status = $vals['delivery_status'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['delivery_num'])){
				
				$this->delivery_num = $vals['delivery_num'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Pick';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("pick_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pick_no);
				
			}
			
			
			
			
			if ("co_mode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->co_mode);
				
			}
			
			
			
			
			if ("sell_site" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sell_site);
				
			}
			
			
			
			
			if ("order_cate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_cate);
				
			}
			
			
			
			
			if ("pick_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pick_num); 
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("first_export_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->first_export_time);
				
			}
			
			
			
			
			if ("export_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->export_num); 
				
			}
			
			
			
			
			if ("delivery_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->delivery_status); 
				
			}
			
			
			
			
			if ("store_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_sn);
				
			}
			
			
			
			
			if ("delivery_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->delivery_num); 
				
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
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pick_no !== null) {
			
			$xfer += $output->writeFieldBegin('pick_no');
			$xfer += $output->writeString($this->pick_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->co_mode !== null) {
			
			$xfer += $output->writeFieldBegin('co_mode');
			$xfer += $output->writeString($this->co_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sell_site !== null) {
			
			$xfer += $output->writeFieldBegin('sell_site');
			$xfer += $output->writeString($this->sell_site);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_cate !== null) {
			
			$xfer += $output->writeFieldBegin('order_cate');
			$xfer += $output->writeString($this->order_cate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pick_num !== null) {
			
			$xfer += $output->writeFieldBegin('pick_num');
			$xfer += $output->writeI32($this->pick_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->first_export_time !== null) {
			
			$xfer += $output->writeFieldBegin('first_export_time');
			$xfer += $output->writeString($this->first_export_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->export_num !== null) {
			
			$xfer += $output->writeFieldBegin('export_num');
			$xfer += $output->writeI32($this->export_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_status !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_status');
			$xfer += $output->writeI32($this->delivery_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('store_sn');
			$xfer += $output->writeString($this->store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_num !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_num');
			$xfer += $output->writeI32($this->delivery_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>