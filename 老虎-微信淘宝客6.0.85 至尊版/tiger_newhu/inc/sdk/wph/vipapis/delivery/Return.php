<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class Return {
	
	static $_TSPEC;
	public $order_return_id = null;
	public $return_goods_details = null;
	public $refund_amount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_return_id'
			),
			2 => array(
			'var' => 'return_goods_details'
			),
			3 => array(
			'var' => 'refund_amount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_return_id'])){
				
				$this->order_return_id = $vals['order_return_id'];
			}
			
			
			if (isset($vals['return_goods_details'])){
				
				$this->return_goods_details = $vals['return_goods_details'];
			}
			
			
			if (isset($vals['refund_amount'])){
				
				$this->refund_amount = $vals['refund_amount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Return';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_return_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_return_id);
				
			}
			
			
			
			
			if ("return_goods_details" == $schemeField){
				
				$needSkip = false;
				
				$this->return_goods_details = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\delivery\ReturnGoodsDetail();
						$elem0->read($input);
						
						$this->return_goods_details[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("refund_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refund_amount);
				
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
		
		if($this->order_return_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_return_id');
			$xfer += $output->writeString($this->order_return_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_goods_details !== null) {
			
			$xfer += $output->writeFieldBegin('return_goods_details');
			
			if (!is_array($this->return_goods_details)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->return_goods_details as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refund_amount !== null) {
			
			$xfer += $output->writeFieldBegin('refund_amount');
			$xfer += $output->writeString($this->refund_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>