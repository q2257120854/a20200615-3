<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\transferring\api;

class CompleteOrderRequest {
	
	static $_TSPEC;
	public $transferring_order_no = null;
	public $total_qty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transferring_order_no'
			),
			2 => array(
			'var' => 'total_qty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferring_order_no'])){
				
				$this->transferring_order_no = $vals['transferring_order_no'];
			}
			
			
			if (isset($vals['total_qty'])){
				
				$this->total_qty = $vals['total_qty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CompleteOrderRequest';
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
			
			
			
			
			if ("total_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_qty); 
				
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
		
		$xfer += $output->writeFieldBegin('transferring_order_no');
		$xfer += $output->writeString($this->transferring_order_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_qty');
		$xfer += $output->writeI32($this->total_qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>