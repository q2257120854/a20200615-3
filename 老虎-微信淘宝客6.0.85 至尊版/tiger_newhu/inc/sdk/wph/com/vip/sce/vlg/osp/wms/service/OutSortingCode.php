<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutSortingCode {
	
	static $_TSPEC;
	public $messageId = null;
	public $containerCode = null;
	public $pickCode = null;
	public $carriersCode = null;
	public $userDefined1 = null;
	public $userDefined2 = null;
	public $userDefined3 = null;
	public $userDefined4 = null;
	public $userDefined5 = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'messageId'
			),
			2 => array(
			'var' => 'containerCode'
			),
			3 => array(
			'var' => 'pickCode'
			),
			4 => array(
			'var' => 'carriersCode'
			),
			5 => array(
			'var' => 'userDefined1'
			),
			6 => array(
			'var' => 'userDefined2'
			),
			7 => array(
			'var' => 'userDefined3'
			),
			8 => array(
			'var' => 'userDefined4'
			),
			9 => array(
			'var' => 'userDefined5'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['messageId'])){
				
				$this->messageId = $vals['messageId'];
			}
			
			
			if (isset($vals['containerCode'])){
				
				$this->containerCode = $vals['containerCode'];
			}
			
			
			if (isset($vals['pickCode'])){
				
				$this->pickCode = $vals['pickCode'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['userDefined1'])){
				
				$this->userDefined1 = $vals['userDefined1'];
			}
			
			
			if (isset($vals['userDefined2'])){
				
				$this->userDefined2 = $vals['userDefined2'];
			}
			
			
			if (isset($vals['userDefined3'])){
				
				$this->userDefined3 = $vals['userDefined3'];
			}
			
			
			if (isset($vals['userDefined4'])){
				
				$this->userDefined4 = $vals['userDefined4'];
			}
			
			
			if (isset($vals['userDefined5'])){
				
				$this->userDefined5 = $vals['userDefined5'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutSortingCode';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("messageId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->messageId);
				
			}
			
			
			
			
			if ("containerCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->containerCode);
				
			}
			
			
			
			
			if ("pickCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pickCode);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("userDefined1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDefined1);
				
			}
			
			
			
			
			if ("userDefined2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDefined2);
				
			}
			
			
			
			
			if ("userDefined3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDefined3);
				
			}
			
			
			
			
			if ("userDefined4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDefined4);
				
			}
			
			
			
			
			if ("userDefined5" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDefined5);
				
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
		
		$xfer += $output->writeFieldBegin('messageId');
		$xfer += $output->writeString($this->messageId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('containerCode');
		$xfer += $output->writeString($this->containerCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pickCode');
		$xfer += $output->writeString($this->pickCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carriersCode');
		$xfer += $output->writeString($this->carriersCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->userDefined1 !== null) {
			
			$xfer += $output->writeFieldBegin('userDefined1');
			$xfer += $output->writeString($this->userDefined1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDefined2 !== null) {
			
			$xfer += $output->writeFieldBegin('userDefined2');
			$xfer += $output->writeString($this->userDefined2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDefined3 !== null) {
			
			$xfer += $output->writeFieldBegin('userDefined3');
			$xfer += $output->writeString($this->userDefined3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDefined4 !== null) {
			
			$xfer += $output->writeFieldBegin('userDefined4');
			$xfer += $output->writeString($this->userDefined4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDefined5 !== null) {
			
			$xfer += $output->writeFieldBegin('userDefined5');
			$xfer += $output->writeString($this->userDefined5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>