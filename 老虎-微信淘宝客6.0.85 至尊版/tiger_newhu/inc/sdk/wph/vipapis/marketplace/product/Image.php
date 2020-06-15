<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\product;

class Image {
	
	static $_TSPEC;
	public $description = null;
	public $url = null;
	public $type = null;
	public $size = null;
	public $index = null;
	public $shape = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'description'
			),
			2 => array(
			'var' => 'url'
			),
			3 => array(
			'var' => 'type'
			),
			4 => array(
			'var' => 'size'
			),
			5 => array(
			'var' => 'index'
			),
			6 => array(
			'var' => 'shape'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['url'])){
				
				$this->url = $vals['url'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['index'])){
				
				$this->index = $vals['index'];
			}
			
			
			if (isset($vals['shape'])){
				
				$this->shape = $vals['shape'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Image';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->url);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("index" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->index); 
				
			}
			
			
			
			
			if ("shape" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->shape); 
				
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
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->url !== null) {
			
			$xfer += $output->writeFieldBegin('url');
			$xfer += $output->writeString($this->url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->index !== null) {
			
			$xfer += $output->writeFieldBegin('index');
			$xfer += $output->writeI32($this->index);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shape !== null) {
			
			$xfer += $output->writeFieldBegin('shape');
			$xfer += $output->writeI32($this->shape);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>