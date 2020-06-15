<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\product;

class SimpleProperty {
	
	static $_TSPEC;
	public $pid = null;
	public $vid = null;
	public $alias = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pid'
			),
			2 => array(
			'var' => 'vid'
			),
			3 => array(
			'var' => 'alias'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pid'])){
				
				$this->pid = $vals['pid'];
			}
			
			
			if (isset($vals['vid'])){
				
				$this->vid = $vals['vid'];
			}
			
			
			if (isset($vals['alias'])){
				
				$this->alias = $vals['alias'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SimpleProperty';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pid" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pid); 
				
			}
			
			
			
			
			if ("vid" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vid); 
				
			}
			
			
			
			
			if ("alias" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->alias);
				
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
		
		if($this->pid !== null) {
			
			$xfer += $output->writeFieldBegin('pid');
			$xfer += $output->writeI32($this->pid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vid !== null) {
			
			$xfer += $output->writeFieldBegin('vid');
			$xfer += $output->writeI32($this->vid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->alias !== null) {
			
			$xfer += $output->writeFieldBegin('alias');
			$xfer += $output->writeString($this->alias);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>