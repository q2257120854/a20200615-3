<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class OrderSku {
	
	static $_TSPEC;
	public $brand_id = null;
	public $barcode = null;
	public $amount = null;
	public $pick_state = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brand_id'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'amount'
			),
			4 => array(
			'var' => 'pick_state'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['pick_state'])){
				
				$this->pick_state = $vals['pick_state'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderSku';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brand_id); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("pick_state" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->pick_state); 
				
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
		
		if($this->brand_id !== null) {
			
			$xfer += $output->writeFieldBegin('brand_id');
			$xfer += $output->writeI64($this->brand_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeI32($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pick_state !== null) {
			
			$xfer += $output->writeFieldBegin('pick_state');
			$xfer += $output->writeByte($this->pick_state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>