<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class PoDetail {
	
	static $_TSPEC;
	public $item_id = null;
	public $barcode = null;
	public $product_name = null;
	public $amount = null;
	public $box_num = null;
	public $data_status = null;
	public $warehouse = null;
	public $price = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'item_id'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'product_name'
			),
			4 => array(
			'var' => 'amount'
			),
			5 => array(
			'var' => 'box_num'
			),
			6 => array(
			'var' => 'data_status'
			),
			7 => array(
			'var' => 'warehouse'
			),
			8 => array(
			'var' => 'price'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['item_id'])){
				
				$this->item_id = $vals['item_id'];
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
			
			
			if (isset($vals['box_num'])){
				
				$this->box_num = $vals['box_num'];
			}
			
			
			if (isset($vals['data_status'])){
				
				$this->data_status = $vals['data_status'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("item_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_id);
				
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
			
			
			
			
			if ("box_num" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_num);
				
			}
			
			
			
			
			if ("data_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->data_status);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
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
		
		if($this->item_id !== null) {
			
			$xfer += $output->writeFieldBegin('item_id');
			$xfer += $output->writeString($this->item_id);
			
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
		
		
		if($this->box_num !== null) {
			
			$xfer += $output->writeFieldBegin('box_num');
			$xfer += $output->writeString($this->box_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->data_status !== null) {
			
			$xfer += $output->writeFieldBegin('data_status');
			$xfer += $output->writeString($this->data_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>