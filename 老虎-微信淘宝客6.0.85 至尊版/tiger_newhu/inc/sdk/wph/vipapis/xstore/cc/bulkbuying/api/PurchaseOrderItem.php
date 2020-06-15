<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class PurchaseOrderItem {
	
	static $_TSPEC;
	public $purchase_no = null;
	public $barcode = null;
	public $purchase_quantity = null;
	public $cost_price = null;
	public $barcode_origin = null;
	public $template_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchase_no'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'purchase_quantity'
			),
			4 => array(
			'var' => 'cost_price'
			),
			5 => array(
			'var' => 'barcode_origin'
			),
			6 => array(
			'var' => 'template_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchase_no'])){
				
				$this->purchase_no = $vals['purchase_no'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['purchase_quantity'])){
				
				$this->purchase_quantity = $vals['purchase_quantity'];
			}
			
			
			if (isset($vals['cost_price'])){
				
				$this->cost_price = $vals['cost_price'];
			}
			
			
			if (isset($vals['barcode_origin'])){
				
				$this->barcode_origin = $vals['barcode_origin'];
			}
			
			
			if (isset($vals['template_type'])){
				
				$this->template_type = $vals['template_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseOrderItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("purchase_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_no);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("purchase_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->purchase_quantity); 
				
			}
			
			
			
			
			if ("cost_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cost_price);
				
			}
			
			
			
			
			if ("barcode_origin" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode_origin);
				
			}
			
			
			
			
			if ("template_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->template_type); 
				
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
		
		if($this->purchase_no !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_no');
			$xfer += $output->writeString($this->purchase_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_quantity');
			$xfer += $output->writeI32($this->purchase_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cost_price !== null) {
			
			$xfer += $output->writeFieldBegin('cost_price');
			$xfer += $output->writeString($this->cost_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode_origin !== null) {
			
			$xfer += $output->writeFieldBegin('barcode_origin');
			$xfer += $output->writeString($this->barcode_origin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->template_type !== null) {
			
			$xfer += $output->writeFieldBegin('template_type');
			$xfer += $output->writeByte($this->template_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>