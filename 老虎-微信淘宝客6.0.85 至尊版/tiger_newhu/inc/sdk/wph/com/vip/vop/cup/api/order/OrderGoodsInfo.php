<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\order;

class OrderGoodsInfo {
	
	static $_TSPEC;
	public $prod_sku_id = null;
	public $price = null;
	public $amount = null;
	public $goods_type = null;
	public $price_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'prod_sku_id'
			),
			2 => array(
			'var' => 'price'
			),
			3 => array(
			'var' => 'amount'
			),
			4 => array(
			'var' => 'goods_type'
			),
			5 => array(
			'var' => 'price_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['prod_sku_id'])){
				
				$this->prod_sku_id = $vals['prod_sku_id'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['goods_type'])){
				
				$this->goods_type = $vals['goods_type'];
			}
			
			
			if (isset($vals['price_time'])){
				
				$this->price_time = $vals['price_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderGoodsInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("prod_sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prod_sku_id);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("goods_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goods_type); 
				
			}
			
			
			
			
			if ("price_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price_time);
				
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
		
		$xfer += $output->writeFieldBegin('prod_sku_id');
		$xfer += $output->writeString($this->prod_sku_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('price');
		$xfer += $output->writeString($this->price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeI32($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goods_type');
		$xfer += $output->writeI32($this->goods_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('price_time');
		$xfer += $output->writeString($this->price_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>