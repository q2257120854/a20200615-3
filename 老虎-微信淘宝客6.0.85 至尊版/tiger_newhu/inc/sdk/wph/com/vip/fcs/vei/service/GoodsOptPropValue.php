<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class GoodsOptPropValue {
	
	static $_TSPEC;
	public $attrCode = null;
	public $extAttrValue = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attrCode'
			),
			2 => array(
			'var' => 'extAttrValue'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attrCode'])){
				
				$this->attrCode = $vals['attrCode'];
			}
			
			
			if (isset($vals['extAttrValue'])){
				
				$this->extAttrValue = $vals['extAttrValue'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GoodsOptPropValue';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attrCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attrCode);
				
			}
			
			
			
			
			if ("extAttrValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extAttrValue);
				
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
		
		if($this->attrCode !== null) {
			
			$xfer += $output->writeFieldBegin('attrCode');
			$xfer += $output->writeString($this->attrCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extAttrValue !== null) {
			
			$xfer += $output->writeFieldBegin('extAttrValue');
			$xfer += $output->writeString($this->extAttrValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>