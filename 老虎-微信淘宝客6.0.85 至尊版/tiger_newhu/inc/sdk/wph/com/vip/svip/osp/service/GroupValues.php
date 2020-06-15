<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class GroupValues {
	
	static $_TSPEC;
	public $val = null;
	public $text = null;
	public $ext = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'val'
			),
			2 => array(
			'var' => 'text'
			),
			3 => array(
			'var' => 'ext'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['val'])){
				
				$this->val = $vals['val'];
			}
			
			
			if (isset($vals['text'])){
				
				$this->text = $vals['text'];
			}
			
			
			if (isset($vals['ext'])){
				
				$this->ext = $vals['ext'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GroupValues';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("val" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->val);
				
			}
			
			
			
			
			if ("text" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->text);
				
			}
			
			
			
			
			if ("ext" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext);
				
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
		
		if($this->val !== null) {
			
			$xfer += $output->writeFieldBegin('val');
			$xfer += $output->writeString($this->val);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->text !== null) {
			
			$xfer += $output->writeFieldBegin('text');
			$xfer += $output->writeString($this->text);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ext !== null) {
			
			$xfer += $output->writeFieldBegin('ext');
			$xfer += $output->writeString($this->ext);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>