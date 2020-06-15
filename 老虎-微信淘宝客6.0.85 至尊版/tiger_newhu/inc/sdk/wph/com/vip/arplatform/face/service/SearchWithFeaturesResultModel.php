<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\arplatform\face\service;

class SearchWithFeaturesResultModel {
	
	static $_TSPEC;
	public $token = null;
	public $image_src_mix = null;
	public $image_target_mix = null;
	public $image_url = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'token'
			),
			2 => array(
			'var' => 'image_src_mix'
			),
			3 => array(
			'var' => 'image_target_mix'
			),
			4 => array(
			'var' => 'image_url'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['token'])){
				
				$this->token = $vals['token'];
			}
			
			
			if (isset($vals['image_src_mix'])){
				
				$this->image_src_mix = $vals['image_src_mix'];
			}
			
			
			if (isset($vals['image_target_mix'])){
				
				$this->image_target_mix = $vals['image_target_mix'];
			}
			
			
			if (isset($vals['image_url'])){
				
				$this->image_url = $vals['image_url'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SearchWithFeaturesResultModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("token" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->token);
				
			}
			
			
			
			
			if ("image_src_mix" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image_src_mix);
				
			}
			
			
			
			
			if ("image_target_mix" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image_target_mix);
				
			}
			
			
			
			
			if ("image_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image_url);
				
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
		
		if($this->token !== null) {
			
			$xfer += $output->writeFieldBegin('token');
			$xfer += $output->writeString($this->token);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_src_mix !== null) {
			
			$xfer += $output->writeFieldBegin('image_src_mix');
			$xfer += $output->writeString($this->image_src_mix);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_target_mix !== null) {
			
			$xfer += $output->writeFieldBegin('image_target_mix');
			$xfer += $output->writeString($this->image_target_mix);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_url !== null) {
			
			$xfer += $output->writeFieldBegin('image_url');
			$xfer += $output->writeString($this->image_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>