<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class OperatorParams {
	
	static $_TSPEC;
	public $operatorType = null;
	public $operatorId = null;
	public $operatorNickname = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operatorType'
			),
			2 => array(
			'var' => 'operatorId'
			),
			3 => array(
			'var' => 'operatorNickname'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['operatorType'])){
				
				$this->operatorType = $vals['operatorType'];
			}
			
			
			if (isset($vals['operatorId'])){
				
				$this->operatorId = $vals['operatorId'];
			}
			
			
			if (isset($vals['operatorNickname'])){
				
				$this->operatorNickname = $vals['operatorNickname'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OperatorParams';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("operatorType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->operatorType); 
				
			}
			
			
			
			
			if ("operatorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operatorId); 
				
			}
			
			
			
			
			if ("operatorNickname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operatorNickname);
				
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
		
		$xfer += $output->writeFieldBegin('operatorType');
		$xfer += $output->writeByte($this->operatorType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->operatorId !== null) {
			
			$xfer += $output->writeFieldBegin('operatorId');
			$xfer += $output->writeI32($this->operatorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operatorNickname !== null) {
			
			$xfer += $output->writeFieldBegin('operatorNickname');
			$xfer += $output->writeString($this->operatorNickname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>