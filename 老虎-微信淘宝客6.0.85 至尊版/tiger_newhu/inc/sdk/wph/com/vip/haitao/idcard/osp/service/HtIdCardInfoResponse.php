<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\idcard\osp\service;

class HtIdCardInfoResponse {
	
	static $_TSPEC;
	public $head = null;
	public $idCardInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'head'
			),
			2 => array(
			'var' => 'idCardInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['head'])){
				
				$this->head = $vals['head'];
			}
			
			
			if (isset($vals['idCardInfo'])){
				
				$this->idCardInfo = $vals['idCardInfo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtIdCardInfoResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("head" == $schemeField){
				
				$needSkip = false;
				
				$this->head = new \com\vip\haitao\idcard\osp\service\Head();
				$this->head->read($input);
				
			}
			
			
			
			
			if ("idCardInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->idCardInfo = new \com\vip\haitao\idcard\osp\service\HtIdCardInfo();
				$this->idCardInfo->read($input);
				
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
		
		if($this->head !== null) {
			
			$xfer += $output->writeFieldBegin('head');
			
			if (!is_object($this->head)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->head->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->idCardInfo !== null) {
			
			$xfer += $output->writeFieldBegin('idCardInfo');
			
			if (!is_object($this->idCardInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->idCardInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>