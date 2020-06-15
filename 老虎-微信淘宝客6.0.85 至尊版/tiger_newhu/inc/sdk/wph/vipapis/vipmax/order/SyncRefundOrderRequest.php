<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipmax\order;

class SyncRefundOrderRequest {
	
	static $_TSPEC;
	public $refund_order_sn = null;
	public $origin_out_order_sn = null;
	public $refund_time = null;
	public $refund_warehouse = null;
	public $order_detail = null;
	public $total_refund_fee = null;
	public $company_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'refund_order_sn'
			),
			2 => array(
			'var' => 'origin_out_order_sn'
			),
			3 => array(
			'var' => 'refund_time'
			),
			4 => array(
			'var' => 'refund_warehouse'
			),
			5 => array(
			'var' => 'order_detail'
			),
			6 => array(
			'var' => 'total_refund_fee'
			),
			7 => array(
			'var' => 'company_code'
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
			
			
			if (isset($vals['refund_time'])){
				
				$this->refund_time = $vals['refund_time'];
			}
			
			
			if (isset($vals['refund_warehouse'])){
				
				$this->refund_warehouse = $vals['refund_warehouse'];
			}
			
			
			if (isset($vals['order_detail'])){
				
				$this->order_detail = $vals['order_detail'];
			}
			
			
			if (isset($vals['total_refund_fee'])){
				
				$this->total_refund_fee = $vals['total_refund_fee'];
			}
			
			
			if (isset($vals['company_code'])){
				
				$this->company_code = $vals['company_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SyncRefundOrderRequest';
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
			
			
			
			
			if ("refund_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refund_time);
				
			}
			
			
			
			
			if ("refund_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refund_warehouse);
				
			}
			
			
			
			
			if ("order_detail" == $schemeField){
				
				$needSkip = false;
				
				$this->order_detail = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\vipmax\order\VipmaxRefundOrderDetail();
						$elem0->read($input);
						
						$this->order_detail[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("total_refund_fee" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->total_refund_fee);
				
			}
			
			
			
			
			if ("company_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->company_code);
				
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
		
		$xfer += $output->writeFieldBegin('refund_time');
		$xfer += $output->writeI64($this->refund_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refund_warehouse');
		$xfer += $output->writeString($this->refund_warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_detail');
		
		if (!is_array($this->order_detail)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_detail as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_refund_fee');
		$xfer += $output->writeDouble($this->total_refund_fee);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('company_code');
		$xfer += $output->writeString($this->company_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>