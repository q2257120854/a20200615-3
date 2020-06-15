<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\freight;

class GetOrderFreightReq {
	
	static $_TSPEC;
	public $key = null;
	public $order_amount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'key'
			),
			2 => array(
			'var' => 'order_amount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['key'])){
				
				$this->key = $vals['key'];
			}
			
			
			if (isset($vals['order_amount'])){
				
				$this->order_amount = $vals['order_amount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetOrderFreightReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("key" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->key);
				
			}
			
			
			
			
			if ("order_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->order_amount);
				
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
		
		$xfer += $output->writeFieldBegin('key');
		$xfer += $output->writeString($this->key);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_amount');
		$xfer += $output->writeDouble($this->order_amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>