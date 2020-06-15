<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class UploadImageInfo {
	
	static $_TSPEC;
	public $img_content = null;
	public $padding_left = null;
	public $padding_top = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'img_content'
			),
			2 => array(
			'var' => 'padding_left'
			),
			3 => array(
			'var' => 'padding_top'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['img_content'])){
				
				$this->img_content = $vals['img_content'];
			}
			
			
			if (isset($vals['padding_left'])){
				
				$this->padding_left = $vals['padding_left'];
			}
			
			
			if (isset($vals['padding_top'])){
				
				$this->padding_top = $vals['padding_top'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UploadImageInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("img_content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->img_content);
				
			}
			
			
			
			
			if ("padding_left" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->padding_left); 
				
			}
			
			
			
			
			if ("padding_top" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->padding_top); 
				
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
		
		$xfer += $output->writeFieldBegin('img_content');
		$xfer += $output->writeString($this->img_content);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->padding_left !== null) {
			
			$xfer += $output->writeFieldBegin('padding_left');
			$xfer += $output->writeI32($this->padding_left);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->padding_top !== null) {
			
			$xfer += $output->writeFieldBegin('padding_top');
			$xfer += $output->writeI32($this->padding_top);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>