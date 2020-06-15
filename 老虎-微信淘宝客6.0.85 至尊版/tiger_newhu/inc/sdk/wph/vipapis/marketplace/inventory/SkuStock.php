<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\inventory;

class SkuStock {
	
	static $_TSPEC;
	public $sku_id = null;
	public $leaving_stock = null;
	public $cart_hold = null;
	public $order_hold = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sku_id'
			),
			2 => array(
			'var' => 'leaving_stock'
			),
			3 => array(
			'var' => 'cart_hold'
			),
			4 => array(
			'var' => 'order_hold'
			),
			5 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sku_id'])){
				
				$this->sku_id = $vals['sku_id'];
			}
			
			
			if (isset($vals['leaving_stock'])){
				
				$this->leaving_stock = $vals['leaving_stock'];
			}
			
			
			if (isset($vals['cart_hold'])){
				
				$this->cart_hold = $vals['cart_hold'];
			}
			
			
			if (isset($vals['order_hold'])){
				
				$this->order_hold = $vals['order_hold'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SkuStock';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku_id);
				
			}
			
			
			
			
			if ("leaving_stock" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->leaving_stock); 
				
			}
			
			
			
			
			if ("cart_hold" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cart_hold); 
				
			}
			
			
			
			
			if ("order_hold" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->order_hold); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
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
		
		if($this->sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('sku_id');
			$xfer += $output->writeString($this->sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('leaving_stock');
		$xfer += $output->writeI32($this->leaving_stock);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cart_hold');
		$xfer += $output->writeI32($this->cart_hold);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_hold');
		$xfer += $output->writeI32($this->order_hold);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>