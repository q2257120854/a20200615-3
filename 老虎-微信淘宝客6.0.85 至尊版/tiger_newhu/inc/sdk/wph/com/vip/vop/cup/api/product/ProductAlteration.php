<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\product;

class ProductAlteration {
	
	static $_TSPEC;
	public $message_id = null;
	public $prod_id = null;
	public $event_type = null;
	public $product_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'message_id'
			),
			2 => array(
			'var' => 'prod_id'
			),
			3 => array(
			'var' => 'event_type'
			),
			4 => array(
			'var' => 'product_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['message_id'])){
				
				$this->message_id = $vals['message_id'];
			}
			
			
			if (isset($vals['prod_id'])){
				
				$this->prod_id = $vals['prod_id'];
			}
			
			
			if (isset($vals['event_type'])){
				
				$this->event_type = $vals['event_type'];
			}
			
			
			if (isset($vals['product_type'])){
				
				$this->product_type = $vals['product_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProductAlteration';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("message_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->message_id); 
				
			}
			
			
			
			
			if ("prod_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prod_id);
				
			}
			
			
			
			
			if ("event_type" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\vop\cup\api\product\EventType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->event_type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("product_type" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\vop\cup\api\product\ProductType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->product_type = $k;
						break;
					}
					
				}
				
				
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
		
		if($this->message_id !== null) {
			
			$xfer += $output->writeFieldBegin('message_id');
			$xfer += $output->writeI64($this->message_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prod_id !== null) {
			
			$xfer += $output->writeFieldBegin('prod_id');
			$xfer += $output->writeString($this->prod_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->event_type !== null) {
			
			$xfer += $output->writeFieldBegin('event_type');
			
			$em = new \com\vip\vop\cup\api\product\EventType; 
			$output->writeString($em::$__names[$this->event_type]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_type !== null) {
			
			$xfer += $output->writeFieldBegin('product_type');
			
			$em = new \com\vip\vop\cup\api\product\ProductType; 
			$output->writeString($em::$__names[$this->product_type]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>