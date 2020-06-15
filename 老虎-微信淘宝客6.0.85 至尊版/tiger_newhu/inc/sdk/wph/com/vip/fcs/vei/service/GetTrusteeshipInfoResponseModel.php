<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class GetTrusteeshipInfoResponseModel {
	
	static $_TSPEC;
	public $trusteeshipInfoModel = null;
	public $restulMesg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'trusteeshipInfoModel'
			),
			2 => array(
			'var' => 'restulMesg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['trusteeshipInfoModel'])){
				
				$this->trusteeshipInfoModel = $vals['trusteeshipInfoModel'];
			}
			
			
			if (isset($vals['restulMesg'])){
				
				$this->restulMesg = $vals['restulMesg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetTrusteeshipInfoResponseModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("trusteeshipInfoModel" == $schemeField){
				
				$needSkip = false;
				
				$this->trusteeshipInfoModel = new \com\vip\fcs\vei\service\TrusteeshipInfoModel();
				$this->trusteeshipInfoModel->read($input);
				
			}
			
			
			
			
			if ("restulMesg" == $schemeField){
				
				$needSkip = false;
				
				$this->restulMesg = new \com\vip\fcs\vei\service\BaseRetMsg();
				$this->restulMesg->read($input);
				
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
		
		if($this->trusteeshipInfoModel !== null) {
			
			$xfer += $output->writeFieldBegin('trusteeshipInfoModel');
			
			if (!is_object($this->trusteeshipInfoModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->trusteeshipInfoModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('restulMesg');
		
		if (!is_object($this->restulMesg)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->restulMesg->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>