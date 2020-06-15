<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\user\face\service;

class XstoreCameraInfoResult {
	
	static $_TSPEC;
	public $codeResult = null;
	public $xstoreCameraInfoModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'codeResult'
			),
			2 => array(
			'var' => 'xstoreCameraInfoModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['codeResult'])){
				
				$this->codeResult = $vals['codeResult'];
			}
			
			
			if (isset($vals['xstoreCameraInfoModel'])){
				
				$this->xstoreCameraInfoModel = $vals['xstoreCameraInfoModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XstoreCameraInfoResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("codeResult" == $schemeField){
				
				$needSkip = false;
				
				$this->codeResult = new \com\vip\xstore\user\face\service\common\CodeResult();
				$this->codeResult->read($input);
				
			}
			
			
			
			
			if ("xstoreCameraInfoModel" == $schemeField){
				
				$needSkip = false;
				
				$this->xstoreCameraInfoModel = new \com\vip\xstore\user\face\service\XstoreCameraInfoModel();
				$this->xstoreCameraInfoModel->read($input);
				
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
		
		if($this->codeResult !== null) {
			
			$xfer += $output->writeFieldBegin('codeResult');
			
			if (!is_object($this->codeResult)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->codeResult->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->xstoreCameraInfoModel !== null) {
			
			$xfer += $output->writeFieldBegin('xstoreCameraInfoModel');
			
			if (!is_object($this->xstoreCameraInfoModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->xstoreCameraInfoModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>