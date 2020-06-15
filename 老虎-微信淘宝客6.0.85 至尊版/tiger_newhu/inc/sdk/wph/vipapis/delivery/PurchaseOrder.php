<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class PurchaseOrder {
	
	static $_TSPEC;
	public $po_no = null;
	public $co_mode = null;
	public $sell_st_time = null;
	public $sell_et_time = null;
	public $stock = null;
	public $sales_volume = null;
	public $not_pick = null;
	public $trade_mode = null;
	public $schedule_id = null;
	public $vendor_name = null;
	public $brand_name = null;
	public $warehouse = null;
	public $schedule_name = null;
	public $po_start_time = null;
	public $unpick_list = null;
	public $cooperation_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_no'
			),
			2 => array(
			'var' => 'co_mode'
			),
			3 => array(
			'var' => 'sell_st_time'
			),
			4 => array(
			'var' => 'sell_et_time'
			),
			5 => array(
			'var' => 'stock'
			),
			6 => array(
			'var' => 'sales_volume'
			),
			7 => array(
			'var' => 'not_pick'
			),
			8 => array(
			'var' => 'trade_mode'
			),
			9 => array(
			'var' => 'schedule_id'
			),
			10 => array(
			'var' => 'vendor_name'
			),
			11 => array(
			'var' => 'brand_name'
			),
			12 => array(
			'var' => 'warehouse'
			),
			13 => array(
			'var' => 'schedule_name'
			),
			14 => array(
			'var' => 'po_start_time'
			),
			15 => array(
			'var' => 'unpick_list'
			),
			16 => array(
			'var' => 'cooperation_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['co_mode'])){
				
				$this->co_mode = $vals['co_mode'];
			}
			
			
			if (isset($vals['sell_st_time'])){
				
				$this->sell_st_time = $vals['sell_st_time'];
			}
			
			
			if (isset($vals['sell_et_time'])){
				
				$this->sell_et_time = $vals['sell_et_time'];
			}
			
			
			if (isset($vals['stock'])){
				
				$this->stock = $vals['stock'];
			}
			
			
			if (isset($vals['sales_volume'])){
				
				$this->sales_volume = $vals['sales_volume'];
			}
			
			
			if (isset($vals['not_pick'])){
				
				$this->not_pick = $vals['not_pick'];
			}
			
			
			if (isset($vals['trade_mode'])){
				
				$this->trade_mode = $vals['trade_mode'];
			}
			
			
			if (isset($vals['schedule_id'])){
				
				$this->schedule_id = $vals['schedule_id'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['schedule_name'])){
				
				$this->schedule_name = $vals['schedule_name'];
			}
			
			
			if (isset($vals['po_start_time'])){
				
				$this->po_start_time = $vals['po_start_time'];
			}
			
			
			if (isset($vals['unpick_list'])){
				
				$this->unpick_list = $vals['unpick_list'];
			}
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseOrder';
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
			
			
			
			
			if ("co_mode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->co_mode);
				
			}
			
			
			
			
			if ("sell_st_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sell_st_time);
				
			}
			
			
			
			
			if ("sell_et_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sell_et_time);
				
			}
			
			
			
			
			if ("stock" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stock);
				
			}
			
			
			
			
			if ("sales_volume" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sales_volume);
				
			}
			
			
			
			
			if ("not_pick" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->not_pick);
				
			}
			
			
			
			
			if ("trade_mode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trade_mode);
				
			}
			
			
			
			
			if ("schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->schedule_id);
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("schedule_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->schedule_name);
				
			}
			
			
			
			
			if ("po_start_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_start_time);
				
			}
			
			
			
			
			if ("unpick_list" == $schemeField){
				
				$needSkip = false;
				
				$this->unpick_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\delivery\UnpickInfo();
						$elem0->read($input);
						
						$this->unpick_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("cooperation_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cooperation_no);
				
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
		
		
		if($this->co_mode !== null) {
			
			$xfer += $output->writeFieldBegin('co_mode');
			$xfer += $output->writeString($this->co_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sell_st_time !== null) {
			
			$xfer += $output->writeFieldBegin('sell_st_time');
			$xfer += $output->writeString($this->sell_st_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sell_et_time !== null) {
			
			$xfer += $output->writeFieldBegin('sell_et_time');
			$xfer += $output->writeString($this->sell_et_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stock !== null) {
			
			$xfer += $output->writeFieldBegin('stock');
			$xfer += $output->writeString($this->stock);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sales_volume !== null) {
			
			$xfer += $output->writeFieldBegin('sales_volume');
			$xfer += $output->writeString($this->sales_volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->not_pick !== null) {
			
			$xfer += $output->writeFieldBegin('not_pick');
			$xfer += $output->writeString($this->not_pick);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trade_mode !== null) {
			
			$xfer += $output->writeFieldBegin('trade_mode');
			$xfer += $output->writeString($this->trade_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->schedule_id !== null) {
			
			$xfer += $output->writeFieldBegin('schedule_id');
			$xfer += $output->writeString($this->schedule_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_name');
			$xfer += $output->writeString($this->vendor_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->schedule_name !== null) {
			
			$xfer += $output->writeFieldBegin('schedule_name');
			$xfer += $output->writeString($this->schedule_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_start_time !== null) {
			
			$xfer += $output->writeFieldBegin('po_start_time');
			$xfer += $output->writeString($this->po_start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unpick_list !== null) {
			
			$xfer += $output->writeFieldBegin('unpick_list');
			
			if (!is_array($this->unpick_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->unpick_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperation_no !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_no');
			$xfer += $output->writeString($this->cooperation_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>