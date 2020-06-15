<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipmax\order;

class VipmaxRefundOrder {
	
	static $_TSPEC;
	public $refund_order_sn = null;
	public $refund_time = null;
	public $refund_order_detail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'refund_order_sn'
			),
			2 => array(
			'var' => 'refund_time'
			),
			3 => array(
			'var' => 'refund_order_detail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['refund_order_sn'])){
				
				$this->refund_order_sn = $vals['refund_order_sn'];
			}
			
			
			if (isset($vals['refund_time'])){
				
				$this->refund_time = $vals['refund_time'];
			}
			
			
			if (isset($vals['refund_order_detail'])){
				
				$this->refund_order_detail = $vals['refund_order_detail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipmaxRefundOrder';
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
			
			
			
			
			if ("refund_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refund_time);
				
			}
			
			
			
			
			if ("refund_order_detail" == $schemeField){
				
				$needSkip = false;
				
				$this->refund_order_detail = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\vipmax\order\VipmaxRefundOrderDetail();
						$elem0->read($input);
						
						$this->refund_order_detail[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('refund_time');
		$xfer += $output->writeI64($this->refund_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refund_order_detail');
		
		if (!is_array($this->refund_order_detail)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->refund_order_detail as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>