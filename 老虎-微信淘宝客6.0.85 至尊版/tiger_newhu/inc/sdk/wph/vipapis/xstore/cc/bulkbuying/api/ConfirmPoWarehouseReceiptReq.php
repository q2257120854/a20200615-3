<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class ConfirmPoWarehouseReceiptReq {
	
	static $_TSPEC;
	public $purchase_no = null;
	public $warehouse_receipt_no = null;
	public $outer_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchase_no'
			),
			2 => array(
			'var' => 'warehouse_receipt_no'
			),
			3 => array(
			'var' => 'outer_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchase_no'])){
				
				$this->purchase_no = $vals['purchase_no'];
			}
			
			
			if (isset($vals['warehouse_receipt_no'])){
				
				$this->warehouse_receipt_no = $vals['warehouse_receipt_no'];
			}
			
			
			if (isset($vals['outer_no'])){
				
				$this->outer_no = $vals['outer_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ConfirmPoWarehouseReceiptReq';
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
			
			
			
			
			if ("warehouse_receipt_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_receipt_no);
				
			}
			
			
			
			
			if ("outer_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outer_no);
				
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
		
		$xfer += $output->writeFieldBegin('purchase_no');
		$xfer += $output->writeString($this->purchase_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse_receipt_no');
		$xfer += $output->writeString($this->warehouse_receipt_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('outer_no');
		$xfer += $output->writeString($this->outer_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>