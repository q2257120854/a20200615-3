<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\transferring\api;

class TransferringOrderImportItem {
	
	static $_TSPEC;
	public $item_id = null;
	public $barcode = null;
	public $planned_item_quantity = null;
	public $frozen_item_quantity = null;
	
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
			'var' => 'planned_item_quantity'
			),
			4 => array(
			'var' => 'frozen_item_quantity'
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
			
			
			if (isset($vals['planned_item_quantity'])){
				
				$this->planned_item_quantity = $vals['planned_item_quantity'];
			}
			
			
			if (isset($vals['frozen_item_quantity'])){
				
				$this->frozen_item_quantity = $vals['frozen_item_quantity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransferringOrderImportItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("item_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->item_id); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("planned_item_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->planned_item_quantity); 
				
			}
			
			
			
			
			if ("frozen_item_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->frozen_item_quantity); 
				
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
			$xfer += $output->writeI64($this->item_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->planned_item_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('planned_item_quantity');
			$xfer += $output->writeI32($this->planned_item_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->frozen_item_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('frozen_item_quantity');
			$xfer += $output->writeI32($this->frozen_item_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>