<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\puma;

class SortAttr {
	
	static $_TSPEC;
	public $attr_code = null;
	public $sort_rule = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attr_code'
			),
			2 => array(
			'var' => 'sort_rule'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attr_code'])){
				
				$this->attr_code = $vals['attr_code'];
			}
			
			
			if (isset($vals['sort_rule'])){
				
				$this->sort_rule = $vals['sort_rule'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SortAttr';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attr_code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->attr_code); 
				
			}
			
			
			
			
			if ("sort_rule" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sort_rule); 
				
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
		
		if($this->attr_code !== null) {
			
			$xfer += $output->writeFieldBegin('attr_code');
			$xfer += $output->writeI32($this->attr_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sort_rule !== null) {
			
			$xfer += $output->writeFieldBegin('sort_rule');
			$xfer += $output->writeI32($this->sort_rule);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>