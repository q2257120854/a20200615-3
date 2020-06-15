<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class PickDetail {
	
	static $_TSPEC;
	public $po_no = null;
	public $sell_st_time = null;
	public $sell_et_time = null;
	public $export_time = null;
	public $export_num = null;
	public $warehouse = null;
	public $order_cate = null;
	public $pick_product_list = null;
	public $total = null;
	public $store_sn = null;
	public $jit_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_no'
			),
			2 => array(
			'var' => 'sell_st_time'
			),
			3 => array(
			'var' => 'sell_et_time'
			),
			4 => array(
			'var' => 'export_time'
			),
			5 => array(
			'var' => 'export_num'
			),
			6 => array(
			'var' => 'warehouse'
			),
			7 => array(
			'var' => 'order_cate'
			),
			8 => array(
			'var' => 'pick_product_list'
			),
			9 => array(
			'var' => 'total'
			),
			10 => array(
			'var' => 'store_sn'
			),
			11 => array(
			'var' => 'jit_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['sell_st_time'])){
				
				$this->sell_st_time = $vals['sell_st_time'];
			}
			
			
			if (isset($vals['sell_et_time'])){
				
				$this->sell_et_time = $vals['sell_et_time'];
			}
			
			
			if (isset($vals['export_time'])){
				
				$this->export_time = $vals['export_time'];
			}
			
			
			if (isset($vals['export_num'])){
				
				$this->export_num = $vals['export_num'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['order_cate'])){
				
				$this->order_cate = $vals['order_cate'];
			}
			
			
			if (isset($vals['pick_product_list'])){
				
				$this->pick_product_list = $vals['pick_product_list'];
			}
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['jit_type'])){
				
				$this->jit_type = $vals['jit_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PickDetail';
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
			
			
			
			
			if ("sell_st_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sell_st_time);
				
			}
			
			
			
			
			if ("sell_et_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sell_et_time);
				
			}
			
			
			
			
			if ("export_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->export_time);
				
			}
			
			
			
			
			if ("export_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->export_num); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("order_cate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_cate);
				
			}
			
			
			
			
			if ("pick_product_list" == $schemeField){
				
				$needSkip = false;
				
				$this->pick_product_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\delivery\PickProduct();
						$elem0->read($input);
						
						$this->pick_product_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total); 
				
			}
			
			
			
			
			if ("store_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_sn);
				
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
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
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
		
		
		if($this->export_time !== null) {
			
			$xfer += $output->writeFieldBegin('export_time');
			$xfer += $output->writeString($this->export_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->export_num !== null) {
			
			$xfer += $output->writeFieldBegin('export_num');
			$xfer += $output->writeI32($this->export_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_cate !== null) {
			
			$xfer += $output->writeFieldBegin('order_cate');
			$xfer += $output->writeString($this->order_cate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pick_product_list !== null) {
			
			$xfer += $output->writeFieldBegin('pick_product_list');
			
			if (!is_array($this->pick_product_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->pick_product_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total !== null) {
			
			$xfer += $output->writeFieldBegin('total');
			$xfer += $output->writeI32($this->total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('store_sn');
			$xfer += $output->writeString($this->store_sn);
			
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