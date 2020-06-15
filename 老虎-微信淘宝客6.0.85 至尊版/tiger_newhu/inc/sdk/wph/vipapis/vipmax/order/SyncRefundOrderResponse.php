<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipmax\order;

class SyncRefundOrderResponse {
	
	static $_TSPEC;
	public $refund_order_sn = null;
	public $origin_out_order_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'refund_order_sn'
			),
			2 => array(
			'var' => 'origin_out_order_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['refund_order_sn'])){
				
				$this->refund_order_sn = $vals['refund_order_sn'];
			}
			
			
			if (isset($vals['origin_out_order_sn'])){
				
				$this->origin_out_order_sn = $vals['origin_out_order_sn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SyncRefundOrderResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("refund_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refund_order_sn);
				
			}
			
			
			
			
			if ("origin_out_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->origin_out_order_sn);
				
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
		
		$xfer += $output->writeFieldBegin('refund_order_sn');
		$xfer += $output->writeString($this->refund_order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('origin_out_order_sn');
		$xfer += $output->writeString($this->origin_out_order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>