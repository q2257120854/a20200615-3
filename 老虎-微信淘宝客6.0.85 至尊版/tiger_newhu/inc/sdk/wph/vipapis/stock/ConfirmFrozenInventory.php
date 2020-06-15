<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\stock;

class ConfirmFrozenInventory {
	
	static $_TSPEC;
	public $store_name = null;
	public $barcode = null;
	public $frozen_qty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'store_name'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'frozen_qty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['store_name'])){
				
				$this->store_name = $vals['store_name'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['frozen_qty'])){
				
				$this->frozen_qty = $vals['frozen_qty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ConfirmFrozenInventory';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("store_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_name);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("frozen_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->frozen_qty); 
				
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
		
		if($this->store_name !== null) {
			
			$xfer += $output->writeFieldBegin('store_name');
			$xfer += $output->writeString($this->store_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('frozen_qty');
		$xfer += $output->writeI32($this->frozen_qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>