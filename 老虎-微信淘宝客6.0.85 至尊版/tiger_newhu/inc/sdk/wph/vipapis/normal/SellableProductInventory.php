<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\normal;

class SellableProductInventory {
	
	static $_TSPEC;
	public $barcode = null;
	public $inventory = null;
	public $pick_num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'inventory'
			),
			3 => array(
			'var' => 'pick_num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['inventory'])){
				
				$this->inventory = $vals['inventory'];
			}
			
			
			if (isset($vals['pick_num'])){
				
				$this->pick_num = $vals['pick_num'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SellableProductInventory';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("inventory" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inventory); 
				
			}
			
			
			
			
			if ("pick_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pick_num); 
				
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
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('inventory');
		$xfer += $output->writeI32($this->inventory);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pick_num');
		$xfer += $output->writeI32($this->pick_num);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>