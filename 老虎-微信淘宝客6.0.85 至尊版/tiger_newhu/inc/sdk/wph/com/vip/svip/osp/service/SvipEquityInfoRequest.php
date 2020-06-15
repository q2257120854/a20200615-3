<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipEquityInfoRequest {
	
	static $_TSPEC;
	public $needSaveAmount = null;
	public $needFigureUrl = null;
	public $needRebate = null;
	public $needPrice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'needSaveAmount'
			),
			2 => array(
			'var' => 'needFigureUrl'
			),
			3 => array(
			'var' => 'needRebate'
			),
			4 => array(
			'var' => 'needPrice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['needSaveAmount'])){
				
				$this->needSaveAmount = $vals['needSaveAmount'];
			}
			
			
			if (isset($vals['needFigureUrl'])){
				
				$this->needFigureUrl = $vals['needFigureUrl'];
			}
			
			
			if (isset($vals['needRebate'])){
				
				$this->needRebate = $vals['needRebate'];
			}
			
			
			if (isset($vals['needPrice'])){
				
				$this->needPrice = $vals['needPrice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipEquityInfoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("needSaveAmount" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->needSaveAmount);
				
			}
			
			
			
			
			if ("needFigureUrl" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->needFigureUrl);
				
			}
			
			
			
			
			if ("needRebate" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->needRebate);
				
			}
			
			
			
			
			if ("needPrice" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->needPrice);
				
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
		
		if($this->needSaveAmount !== null) {
			
			$xfer += $output->writeFieldBegin('needSaveAmount');
			$xfer += $output->writeBool($this->needSaveAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->needFigureUrl !== null) {
			
			$xfer += $output->writeFieldBegin('needFigureUrl');
			$xfer += $output->writeBool($this->needFigureUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->needRebate !== null) {
			
			$xfer += $output->writeFieldBegin('needRebate');
			$xfer += $output->writeBool($this->needRebate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->needPrice !== null) {
			
			$xfer += $output->writeFieldBegin('needPrice');
			$xfer += $output->writeBool($this->needPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>