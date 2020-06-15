<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class OrderDetail {
	
	static $_TSPEC;
	public $order_id = null;
	public $barcode = null;
	public $amount = null;
	public $price = null;
	public $brand_id = null;
	public $promotions = null;
	public $failed_promotions = null;
	public $date = null;
	public $actual_market_price = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'amount'
			),
			4 => array(
			'var' => 'price'
			),
			5 => array(
			'var' => 'brand_id'
			),
			6 => array(
			'var' => 'promotions'
			),
			8 => array(
			'var' => 'failed_promotions'
			),
			9 => array(
			'var' => 'date'
			),
			10 => array(
			'var' => 'actual_market_price'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['promotions'])){
				
				$this->promotions = $vals['promotions'];
			}
			
			
			if (isset($vals['failed_promotions'])){
				
				$this->failed_promotions = $vals['failed_promotions'];
			}
			
			
			if (isset($vals['date'])){
				
				$this->date = $vals['date'];
			}
			
			
			if (isset($vals['actual_market_price'])){
				
				$this->actual_market_price = $vals['actual_market_price'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderDetail';
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
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->price);
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_id);
				
			}
			
			
			
			
			if ("promotions" == $schemeField){
				
				$needSkip = false;
				
				$this->promotions = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\delivery\PromotionInfo();
						$elem0->read($input);
						
						$this->promotions[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("failed_promotions" == $schemeField){
				
				$needSkip = false;
				
				$this->failed_promotions = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\delivery\FailedPromotionInfo();
						$elem1->read($input);
						
						$this->failed_promotions[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->date);
				
			}
			
			
			
			
			if ("actual_market_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actual_market_price);
				
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
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeDouble($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_id !== null) {
			
			$xfer += $output->writeFieldBegin('brand_id');
			$xfer += $output->writeString($this->brand_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotions !== null) {
			
			$xfer += $output->writeFieldBegin('promotions');
			
			if (!is_array($this->promotions)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->promotions as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failed_promotions !== null) {
			
			$xfer += $output->writeFieldBegin('failed_promotions');
			
			if (!is_array($this->failed_promotions)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->failed_promotions as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->date !== null) {
			
			$xfer += $output->writeFieldBegin('date');
			$xfer += $output->writeString($this->date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actual_market_price !== null) {
			
			$xfer += $output->writeFieldBegin('actual_market_price');
			$xfer += $output->writeDouble($this->actual_market_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>