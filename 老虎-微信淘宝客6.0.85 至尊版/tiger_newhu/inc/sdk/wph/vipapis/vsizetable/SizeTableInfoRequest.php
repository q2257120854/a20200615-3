<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsizetable;

class SizeTableInfoRequest {
	
	static $_TSPEC;
	public $sizetable_id = null;
	public $sizetable_type = null;
	public $sizetable_html = null;
	public $sizetable_tips = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sizetable_id'
			),
			2 => array(
			'var' => 'sizetable_type'
			),
			3 => array(
			'var' => 'sizetable_html'
			),
			4 => array(
			'var' => 'sizetable_tips'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sizetable_id'])){
				
				$this->sizetable_id = $vals['sizetable_id'];
			}
			
			
			if (isset($vals['sizetable_type'])){
				
				$this->sizetable_type = $vals['sizetable_type'];
			}
			
			
			if (isset($vals['sizetable_html'])){
				
				$this->sizetable_html = $vals['sizetable_html'];
			}
			
			
			if (isset($vals['sizetable_tips'])){
				
				$this->sizetable_tips = $vals['sizetable_tips'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SizeTableInfoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sizetable_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sizetable_id); 
				
			}
			
			
			
			
			if ("sizetable_type" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->sizetable_type); 
				
			}
			
			
			
			
			if ("sizetable_html" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizetable_html);
				
			}
			
			
			
			
			if ("sizetable_tips" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizetable_tips);
				
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
		
		if($this->sizetable_id !== null) {
			
			$xfer += $output->writeFieldBegin('sizetable_id');
			$xfer += $output->writeI64($this->sizetable_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('sizetable_type');
		$xfer += $output->writeI16($this->sizetable_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sizetable_html !== null) {
			
			$xfer += $output->writeFieldBegin('sizetable_html');
			$xfer += $output->writeString($this->sizetable_html);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizetable_tips !== null) {
			
			$xfer += $output->writeFieldBegin('sizetable_tips');
			$xfer += $output->writeString($this->sizetable_tips);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>