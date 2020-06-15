<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class ImageInfo {
	
	static $_TSPEC;
	public $url = null;
	public $id = null;
	public $bind_url = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'url'
			),
			2 => array(
			'var' => 'id'
			),
			3 => array(
			'var' => 'bind_url'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['url'])){
				
				$this->url = $vals['url'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['bind_url'])){
				
				$this->bind_url = $vals['bind_url'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ImageInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->url);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->id);
				
			}
			
			
			
			
			if ("bind_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bind_url);
				
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
		
		$xfer += $output->writeFieldBegin('url');
		$xfer += $output->writeString($this->url);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeString($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->bind_url !== null) {
			
			$xfer += $output->writeFieldBegin('bind_url');
			$xfer += $output->writeString($this->bind_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>