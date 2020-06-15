<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutWmsZcodeApplyInfo {
	
	static $_TSPEC;
	public $APP_NUM = null;
	public $AMOUNT = null;
	public $APP_TIME = null;
	public $CODE = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'APP_NUM'
			),
			2 => array(
			'var' => 'AMOUNT'
			),
			3 => array(
			'var' => 'APP_TIME'
			),
			4 => array(
			'var' => 'CODE'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['APP_NUM'])){
				
				$this->APP_NUM = $vals['APP_NUM'];
			}
			
			
			if (isset($vals['AMOUNT'])){
				
				$this->AMOUNT = $vals['AMOUNT'];
			}
			
			
			if (isset($vals['APP_TIME'])){
				
				$this->APP_TIME = $vals['APP_TIME'];
			}
			
			
			if (isset($vals['CODE'])){
				
				$this->CODE = $vals['CODE'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutWmsZcodeApplyInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("APP_NUM" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->APP_NUM);
				
			}
			
			
			
			
			if ("AMOUNT" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->AMOUNT); 
				
			}
			
			
			
			
			if ("APP_TIME" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->APP_TIME);
				
			}
			
			
			
			
			if ("CODE" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->CODE);
				
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
		
		$xfer += $output->writeFieldBegin('APP_NUM');
		$xfer += $output->writeString($this->APP_NUM);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('AMOUNT');
		$xfer += $output->writeI32($this->AMOUNT);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('APP_TIME');
		$xfer += $output->writeString($this->APP_TIME);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('CODE');
		$xfer += $output->writeString($this->CODE);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>