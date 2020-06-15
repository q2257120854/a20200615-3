<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipBindInfo {
	
	static $_TSPEC;
	public $type = null;
	public $nick_name = null;
	public $figure_url = null;
	public $bind_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			2 => array(
			'var' => 'nick_name'
			),
			3 => array(
			'var' => 'figure_url'
			),
			4 => array(
			'var' => 'bind_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['nick_name'])){
				
				$this->nick_name = $vals['nick_name'];
			}
			
			
			if (isset($vals['figure_url'])){
				
				$this->figure_url = $vals['figure_url'];
			}
			
			
			if (isset($vals['bind_time'])){
				
				$this->bind_time = $vals['bind_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipBindInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->type); 
				
			}
			
			
			
			
			if ("nick_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->nick_name);
				
			}
			
			
			
			
			if ("figure_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->figure_url);
				
			}
			
			
			
			
			if ("bind_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->bind_time);
				
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
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeI32($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->nick_name !== null) {
			
			$xfer += $output->writeFieldBegin('nick_name');
			$xfer += $output->writeString($this->nick_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->figure_url !== null) {
			
			$xfer += $output->writeFieldBegin('figure_url');
			$xfer += $output->writeString($this->figure_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bind_time !== null) {
			
			$xfer += $output->writeFieldBegin('bind_time');
			$xfer += $output->writeI64($this->bind_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>