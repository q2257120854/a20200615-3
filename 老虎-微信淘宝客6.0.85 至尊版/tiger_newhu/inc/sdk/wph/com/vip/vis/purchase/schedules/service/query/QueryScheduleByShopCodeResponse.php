<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\purchase\schedules\service\query;

class QueryScheduleByShopCodeResponse {
	
	static $_TSPEC;
	public $code = null;
	public $msg = null;
	public $totalNum = null;
	public $scheduleByShopCodeList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'code'
			),
			2 => array(
			'var' => 'msg'
			),
			3 => array(
			'var' => 'totalNum'
			),
			4 => array(
			'var' => 'scheduleByShopCodeList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['totalNum'])){
				
				$this->totalNum = $vals['totalNum'];
			}
			
			
			if (isset($vals['scheduleByShopCodeList'])){
				
				$this->scheduleByShopCodeList = $vals['scheduleByShopCodeList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryScheduleByShopCodeResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->code); 
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("totalNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalNum); 
				
			}
			
			
			
			
			if ("scheduleByShopCodeList" == $schemeField){
				
				$needSkip = false;
				
				$this->scheduleByShopCodeList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\purchase\schedules\service\query\ScheduleByShopCode();
						$elem0->read($input);
						
						$this->scheduleByShopCodeList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeI32($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalNum !== null) {
			
			$xfer += $output->writeFieldBegin('totalNum');
			$xfer += $output->writeI32($this->totalNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleByShopCodeList !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleByShopCodeList');
			
			if (!is_array($this->scheduleByShopCodeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->scheduleByShopCodeList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>