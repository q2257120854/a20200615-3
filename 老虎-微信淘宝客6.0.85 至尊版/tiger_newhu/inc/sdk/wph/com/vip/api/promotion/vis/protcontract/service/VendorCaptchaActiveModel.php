<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class VendorCaptchaActiveModel {
	
	static $_TSPEC;
	public $captchaActive = null;
	public $vendorContactEmail = null;
	public $vendorContactMobile = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'captchaActive'
			),
			2 => array(
			'var' => 'vendorContactEmail'
			),
			3 => array(
			'var' => 'vendorContactMobile'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['captchaActive'])){
				
				$this->captchaActive = $vals['captchaActive'];
			}
			
			
			if (isset($vals['vendorContactEmail'])){
				
				$this->vendorContactEmail = $vals['vendorContactEmail'];
			}
			
			
			if (isset($vals['vendorContactMobile'])){
				
				$this->vendorContactMobile = $vals['vendorContactMobile'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorCaptchaActiveModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("captchaActive" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->captchaActive);
				
			}
			
			
			
			
			if ("vendorContactEmail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorContactEmail);
				
			}
			
			
			
			
			if ("vendorContactMobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorContactMobile);
				
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
		
		$xfer += $output->writeFieldBegin('captchaActive');
		$xfer += $output->writeBool($this->captchaActive);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->vendorContactEmail !== null) {
			
			$xfer += $output->writeFieldBegin('vendorContactEmail');
			$xfer += $output->writeString($this->vendorContactEmail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorContactMobile !== null) {
			
			$xfer += $output->writeFieldBegin('vendorContactMobile');
			$xfer += $output->writeString($this->vendorContactMobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>