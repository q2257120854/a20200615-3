<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\common\process\template;

class CreateProcessTemplateReq {
	
	static $_TSPEC;
	public $opUserId = null;
	public $opUserName = null;
	public $app = null;
	public $bizType = null;
	public $templateName = null;
	public $templateVersion = null;
	public $templateContent = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'opUserId'
			),
			2 => array(
			'var' => 'opUserName'
			),
			3 => array(
			'var' => 'app'
			),
			4 => array(
			'var' => 'bizType'
			),
			5 => array(
			'var' => 'templateName'
			),
			6 => array(
			'var' => 'templateVersion'
			),
			7 => array(
			'var' => 'templateContent'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['opUserId'])){
				
				$this->opUserId = $vals['opUserId'];
			}
			
			
			if (isset($vals['opUserName'])){
				
				$this->opUserName = $vals['opUserName'];
			}
			
			
			if (isset($vals['app'])){
				
				$this->app = $vals['app'];
			}
			
			
			if (isset($vals['bizType'])){
				
				$this->bizType = $vals['bizType'];
			}
			
			
			if (isset($vals['templateName'])){
				
				$this->templateName = $vals['templateName'];
			}
			
			
			if (isset($vals['templateVersion'])){
				
				$this->templateVersion = $vals['templateVersion'];
			}
			
			
			if (isset($vals['templateContent'])){
				
				$this->templateContent = $vals['templateContent'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateProcessTemplateReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("opUserId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opUserId);
				
			}
			
			
			
			
			if ("opUserName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opUserName);
				
			}
			
			
			
			
			if ("app" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->app);
				
			}
			
			
			
			
			if ("bizType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizType);
				
			}
			
			
			
			
			if ("templateName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->templateName);
				
			}
			
			
			
			
			if ("templateVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->templateVersion); 
				
			}
			
			
			
			
			if ("templateContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->templateContent);
				
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
		
		if($this->opUserId !== null) {
			
			$xfer += $output->writeFieldBegin('opUserId');
			$xfer += $output->writeString($this->opUserId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opUserName !== null) {
			
			$xfer += $output->writeFieldBegin('opUserName');
			$xfer += $output->writeString($this->opUserName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->app !== null) {
			
			$xfer += $output->writeFieldBegin('app');
			$xfer += $output->writeString($this->app);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizType !== null) {
			
			$xfer += $output->writeFieldBegin('bizType');
			$xfer += $output->writeString($this->bizType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templateName !== null) {
			
			$xfer += $output->writeFieldBegin('templateName');
			$xfer += $output->writeString($this->templateName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templateVersion !== null) {
			
			$xfer += $output->writeFieldBegin('templateVersion');
			$xfer += $output->writeI16($this->templateVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templateContent !== null) {
			
			$xfer += $output->writeFieldBegin('templateContent');
			$xfer += $output->writeString($this->templateContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>