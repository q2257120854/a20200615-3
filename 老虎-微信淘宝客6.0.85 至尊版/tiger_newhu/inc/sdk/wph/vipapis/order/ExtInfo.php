<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class ExtInfo {
	
	static $_TSPEC;
	public $ext_field1 = null;
	public $ext_field2 = null;
	public $ext_field3 = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ext_field1'
			),
			2 => array(
			'var' => 'ext_field2'
			),
			3 => array(
			'var' => 'ext_field3'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ext_field1'])){
				
				$this->ext_field1 = $vals['ext_field1'];
			}
			
			
			if (isset($vals['ext_field2'])){
				
				$this->ext_field2 = $vals['ext_field2'];
			}
			
			
			if (isset($vals['ext_field3'])){
				
				$this->ext_field3 = $vals['ext_field3'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExtInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ext_field1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext_field1);
				
			}
			
			
			
			
			if ("ext_field2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext_field2);
				
			}
			
			
			
			
			if ("ext_field3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext_field3);
				
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
		
		if($this->ext_field1 !== null) {
			
			$xfer += $output->writeFieldBegin('ext_field1');
			$xfer += $output->writeString($this->ext_field1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ext_field2 !== null) {
			
			$xfer += $output->writeFieldBegin('ext_field2');
			$xfer += $output->writeString($this->ext_field2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ext_field3 !== null) {
			
			$xfer += $output->writeFieldBegin('ext_field3');
			$xfer += $output->writeString($this->ext_field3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>