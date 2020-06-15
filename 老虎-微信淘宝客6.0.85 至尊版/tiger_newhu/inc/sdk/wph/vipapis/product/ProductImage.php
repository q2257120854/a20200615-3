<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class ProductImage {
	
	static $_TSPEC;
	public $image_url = null;
	public $image_index = null;
	public $image_description = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'image_url'
			),
			2 => array(
			'var' => 'image_index'
			),
			3 => array(
			'var' => 'image_description'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['image_url'])){
				
				$this->image_url = $vals['image_url'];
			}
			
			
			if (isset($vals['image_index'])){
				
				$this->image_index = $vals['image_index'];
			}
			
			
			if (isset($vals['image_description'])){
				
				$this->image_description = $vals['image_description'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProductImage';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("image_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image_url);
				
			}
			
			
			
			
			if ("image_index" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->image_index); 
				
			}
			
			
			
			
			if ("image_description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image_description);
				
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
		
		if($this->image_url !== null) {
			
			$xfer += $output->writeFieldBegin('image_url');
			$xfer += $output->writeString($this->image_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_index !== null) {
			
			$xfer += $output->writeFieldBegin('image_index');
			$xfer += $output->writeI32($this->image_index);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_description !== null) {
			
			$xfer += $output->writeFieldBegin('image_description');
			$xfer += $output->writeString($this->image_description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>