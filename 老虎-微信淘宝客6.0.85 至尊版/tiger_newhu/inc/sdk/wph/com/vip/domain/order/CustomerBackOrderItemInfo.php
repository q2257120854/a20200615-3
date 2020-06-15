<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\order;

class CustomerBackOrderItemInfo {
	
	static $_TSPEC;
	public $size_sn = null;
	public $quantity = null;
	public $unit = null;
	public $return_reason_name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'size_sn'
			),
			2 => array(
			'var' => 'quantity'
			),
			3 => array(
			'var' => 'unit'
			),
			4 => array(
			'var' => 'return_reason_name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['size_sn'])){
				
				$this->size_sn = $vals['size_sn'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['return_reason_name'])){
				
				$this->return_reason_name = $vals['return_reason_name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CustomerBackOrderItemInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("size_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_sn);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("return_reason_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_reason_name);
				
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
		
		$xfer += $output->writeFieldBegin('size_sn');
		$xfer += $output->writeString($this->size_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('unit');
		$xfer += $output->writeString($this->unit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_reason_name');
		$xfer += $output->writeString($this->return_reason_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>