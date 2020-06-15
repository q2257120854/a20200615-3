<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class PoRefundRealItem {
	
	static $_TSPEC;
	public $txid = null;
	public $purchase_no = null;
	public $barcode = null;
	public $sub_disability_level = null;
	public $selling_status = null;
	public $box_no = null;
	public $refund_quantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'txid'
			),
			2 => array(
			'var' => 'purchase_no'
			),
			3 => array(
			'var' => 'barcode'
			),
			4 => array(
			'var' => 'sub_disability_level'
			),
			5 => array(
			'var' => 'selling_status'
			),
			6 => array(
			'var' => 'box_no'
			),
			7 => array(
			'var' => 'refund_quantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['txid'])){
				
				$this->txid = $vals['txid'];
			}
			
			
			if (isset($vals['purchase_no'])){
				
				$this->purchase_no = $vals['purchase_no'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['sub_disability_level'])){
				
				$this->sub_disability_level = $vals['sub_disability_level'];
			}
			
			
			if (isset($vals['selling_status'])){
				
				$this->selling_status = $vals['selling_status'];
			}
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
			if (isset($vals['refund_quantity'])){
				
				$this->refund_quantity = $vals['refund_quantity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoRefundRealItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("txid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txid);
				
			}
			
			
			
			
			if ("purchase_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_no);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("sub_disability_level" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_disability_level);
				
			}
			
			
			
			
			if ("selling_status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->selling_status); 
				
			}
			
			
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_no);
				
			}
			
			
			
			
			if ("refund_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refund_quantity); 
				
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
		
		$xfer += $output->writeFieldBegin('txid');
		$xfer += $output->writeString($this->txid);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('purchase_no');
		$xfer += $output->writeString($this->purchase_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sub_disability_level');
		$xfer += $output->writeString($this->sub_disability_level);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('selling_status');
		$xfer += $output->writeByte($this->selling_status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->box_no !== null) {
			
			$xfer += $output->writeFieldBegin('box_no');
			$xfer += $output->writeString($this->box_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('refund_quantity');
		$xfer += $output->writeI32($this->refund_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>