<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\transferring\api;

class TransferringOrderItemApiModel {
	
	static $_TSPEC;
	public $transferring_order_no = null;
	public $barcode = null;
	public $purchase_no = null;
	public $transferring_quantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transferring_order_no'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'purchase_no'
			),
			4 => array(
			'var' => 'transferring_quantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferring_order_no'])){
				
				$this->transferring_order_no = $vals['transferring_order_no'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['purchase_no'])){
				
				$this->purchase_no = $vals['purchase_no'];
			}
			
			
			if (isset($vals['transferring_quantity'])){
				
				$this->transferring_quantity = $vals['transferring_quantity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransferringOrderItemApiModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transferring_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transferring_order_no);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("purchase_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_no);
				
			}
			
			
			
			
			if ("transferring_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->transferring_quantity); 
				
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
		
		if($this->transferring_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_order_no');
			$xfer += $output->writeString($this->transferring_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_no !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_no');
			$xfer += $output->writeString($this->purchase_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transferring_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_quantity');
			$xfer += $output->writeI32($this->transferring_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>