<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\product;

class Attribute {
	
	static $_TSPEC;
	public $attrId = null;
	public $attrValue = null;
	public $attrDesc = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attrId'
			),
			2 => array(
			'var' => 'attrValue'
			),
			3 => array(
			'var' => 'attrDesc'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attrId'])){
				
				$this->attrId = $vals['attrId'];
			}
			
			
			if (isset($vals['attrValue'])){
				
				$this->attrValue = $vals['attrValue'];
			}
			
			
			if (isset($vals['attrDesc'])){
				
				$this->attrDesc = $vals['attrDesc'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Attribute';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attrId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attrId);
				
			}
			
			
			
			
			if ("attrValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attrValue);
				
			}
			
			
			
			
			if ("attrDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attrDesc);
				
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
		
		if($this->attrId !== null) {
			
			$xfer += $output->writeFieldBegin('attrId');
			$xfer += $output->writeString($this->attrId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attrValue !== null) {
			
			$xfer += $output->writeFieldBegin('attrValue');
			$xfer += $output->writeString($this->attrValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attrDesc !== null) {
			
			$xfer += $output->writeFieldBegin('attrDesc');
			$xfer += $output->writeString($this->attrDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>