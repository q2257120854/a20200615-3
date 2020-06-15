<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipmax\order;

class VipmaxRefundOrderDetail {
	
	static $_TSPEC;
	public $sku_id = null;
	public $refund_quantity = null;
	public $refund_price = null;
	public $title = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sku_id'
			),
			2 => array(
			'var' => 'refund_quantity'
			),
			3 => array(
			'var' => 'refund_price'
			),
			4 => array(
			'var' => 'title'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sku_id'])){
				
				$this->sku_id = $vals['sku_id'];
			}
			
			
			if (isset($vals['refund_quantity'])){
				
				$this->refund_quantity = $vals['refund_quantity'];
			}
			
			
			if (isset($vals['refund_price'])){
				
				$this->refund_price = $vals['refund_price'];
			}
			
			
			if (isset($vals['title'])){
				
				$this->title = $vals['title'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipmaxRefundOrderDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku_id);
				
			}
			
			
			
			
			if ("refund_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refund_quantity); 
				
			}
			
			
			
			
			if ("refund_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->refund_price);
				
			}
			
			
			
			
			if ("title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->title);
				
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
		
		$xfer += $output->writeFieldBegin('sku_id');
		$xfer += $output->writeString($this->sku_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refund_quantity');
		$xfer += $output->writeI32($this->refund_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refund_price');
		$xfer += $output->writeDouble($this->refund_price);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->title !== null) {
			
			$xfer += $output->writeFieldBegin('title');
			$xfer += $output->writeString($this->title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>