<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\puma;

class Cps {
	
	static $_TSPEC;
	public $cps_url = null;
	public $share_title = null;
	public $share_desc = null;
	public $share_image_url = null;
	public $wx_small_program_url = null;
	public $commission_value = null;
	public $commission_value_newcust = null;
	public $sign = null;
	public $exist_user = null;
	public $ulUrl = null;
	public $deeplinkUrl = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cps_url'
			),
			2 => array(
			'var' => 'share_title'
			),
			3 => array(
			'var' => 'share_desc'
			),
			4 => array(
			'var' => 'share_image_url'
			),
			5 => array(
			'var' => 'wx_small_program_url'
			),
			6 => array(
			'var' => 'commission_value'
			),
			7 => array(
			'var' => 'commission_value_newcust'
			),
			8 => array(
			'var' => 'sign'
			),
			9 => array(
			'var' => 'exist_user'
			),
			10 => array(
			'var' => 'ulUrl'
			),
			11 => array(
			'var' => 'deeplinkUrl'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cps_url'])){
				
				$this->cps_url = $vals['cps_url'];
			}
			
			
			if (isset($vals['share_title'])){
				
				$this->share_title = $vals['share_title'];
			}
			
			
			if (isset($vals['share_desc'])){
				
				$this->share_desc = $vals['share_desc'];
			}
			
			
			if (isset($vals['share_image_url'])){
				
				$this->share_image_url = $vals['share_image_url'];
			}
			
			
			if (isset($vals['wx_small_program_url'])){
				
				$this->wx_small_program_url = $vals['wx_small_program_url'];
			}
			
			
			if (isset($vals['commission_value'])){
				
				$this->commission_value = $vals['commission_value'];
			}
			
			
			if (isset($vals['commission_value_newcust'])){
				
				$this->commission_value_newcust = $vals['commission_value_newcust'];
			}
			
			
			if (isset($vals['sign'])){
				
				$this->sign = $vals['sign'];
			}
			
			
			if (isset($vals['exist_user'])){
				
				$this->exist_user = $vals['exist_user'];
			}
			
			
			if (isset($vals['ulUrl'])){
				
				$this->ulUrl = $vals['ulUrl'];
			}
			
			
			if (isset($vals['deeplinkUrl'])){
				
				$this->deeplinkUrl = $vals['deeplinkUrl'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Cps';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("cps_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cps_url);
				
			}
			
			
			
			
			if ("share_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->share_title);
				
			}
			
			
			
			
			if ("share_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->share_desc);
				
			}
			
			
			
			
			if ("share_image_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->share_image_url);
				
			}
			
			
			
			
			if ("wx_small_program_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wx_small_program_url);
				
			}
			
			
			
			
			if ("commission_value" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commission_value);
				
			}
			
			
			
			
			if ("commission_value_newcust" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commission_value_newcust);
				
			}
			
			
			
			
			if ("sign" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sign);
				
			}
			
			
			
			
			if ("exist_user" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->exist_user);
				
			}
			
			
			
			
			if ("ulUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ulUrl);
				
			}
			
			
			
			
			if ("deeplinkUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deeplinkUrl);
				
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
		
		if($this->cps_url !== null) {
			
			$xfer += $output->writeFieldBegin('cps_url');
			$xfer += $output->writeString($this->cps_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->share_title !== null) {
			
			$xfer += $output->writeFieldBegin('share_title');
			$xfer += $output->writeString($this->share_title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->share_desc !== null) {
			
			$xfer += $output->writeFieldBegin('share_desc');
			$xfer += $output->writeString($this->share_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->share_image_url !== null) {
			
			$xfer += $output->writeFieldBegin('share_image_url');
			$xfer += $output->writeString($this->share_image_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wx_small_program_url !== null) {
			
			$xfer += $output->writeFieldBegin('wx_small_program_url');
			$xfer += $output->writeString($this->wx_small_program_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commission_value !== null) {
			
			$xfer += $output->writeFieldBegin('commission_value');
			$xfer += $output->writeString($this->commission_value);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commission_value_newcust !== null) {
			
			$xfer += $output->writeFieldBegin('commission_value_newcust');
			$xfer += $output->writeString($this->commission_value_newcust);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sign !== null) {
			
			$xfer += $output->writeFieldBegin('sign');
			$xfer += $output->writeString($this->sign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('exist_user');
		$xfer += $output->writeBool($this->exist_user);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->ulUrl !== null) {
			
			$xfer += $output->writeFieldBegin('ulUrl');
			$xfer += $output->writeString($this->ulUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deeplinkUrl !== null) {
			
			$xfer += $output->writeFieldBegin('deeplinkUrl');
			$xfer += $output->writeString($this->deeplinkUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>